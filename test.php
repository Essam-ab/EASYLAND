<?php
include "includes/dbh.inc.php";
if (session_status() == PHP_SESSION_NONE)
    session_start();

$vote = $_POST['vote'];
$vote++;
$text = $_POST['text'];
// $stat = $_POST['stat'];
$prep = "SELECT prepDate from preposition where text = '$text'";
if (!$prep) {
    echo "idPrep error";
}
$prep = mysqli_query($conn, $prep);
if (mysqli_num_rows($prep) > 0) {
    while ($row = mysqli_fetch_assoc($prep)) {
        $date = $row['prepDate'];
    }
}

// if ($stat == 1)
$sql = "INSERT INTO vote (voteUp, text, prepDate) VALUES('$vote', '$text', '$date')";
// else
//     $sql = "INSERT INTO vote (voteDown, text, prepDate) VALUES('$vote', '$text', '$date')";

$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "error=VotingStat";
}

$vote = "SELECT voter  FROM preposition WHERE text = '$text'";
$vote = mysqli_query($conn, $vote);
if (mysqli_num_rows($vote) > 0) {
    while ($row = mysqli_fetch_assoc($vote)) {
        $voted = $row['voter'];
    }
}

$username = $_SESSION['userUid'];
if (strpos($voted, $username) !== false  && $voted != "") {
    echo "you already voted";
    $split_voters = preg_split("/,/", $voted);
    $finaleVoters = array();
    $containerString = "";
    foreach ($split_voters as $voters) {
        if ($voters != $username) {
            $finaleVoters[] = $voters;
            $containerString = $containerString . "$voters" . ",";
        }
    }

    $sql = "UPDATE preposition SET voter = '$containerString' WHERE text = '$text'";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error=failedToRemoveVote";
    }

    $voteNumber = "SELECT voteNumber FROM preposition WHERE text='$text'";
    $result = mysqli_query($conn, $voteNumber);
    if (!$result) {
        echo "error=fetching vote number ";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $voter = $row['voteNumber'];
        }
    }

    $voter--;
    $sql = "UPDATE preposition SET voteNumber = '$voter' WHERE text = '$text'";
    $query = mysqli_query($conn, $sql);
    if (!$query) {
        echo "error=failedToDecreaseVoteNumber";
    }
    exit();
} else {
    $count = str_word_count($voted . $username);
    $voter = "UPDATE preposition SET voter = CONCAT('$voted','$username', ',') WHERE text='$text'";
    $voteNumber = "UPDATE preposition SET voteNumber = '$count'  WHERE text='$text'";

    $voterResult = mysqli_query($conn, $voter);
    if (!$voterResult) {
        echo "error=voteResult";
    }

    $voteNumberResult = mysqli_query($conn, $voteNumber);
    if (!$voteNumberResult) {
        echo "error=voteNumberResult";
    }
}
