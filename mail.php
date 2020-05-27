<?php
include "includes/dbh.inc.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$query = "SELECT max(voteNumber) as num FROM preposition WHERE WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()) limit 1";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "error in gettting the maximum voteNumber";
} else
    while ($row = mysqli_fetch_assoc($result)) {
        $max = $row['num'];
    }

$query = "SELECT uidUsers, text, prepDate ,max(voteNumber) as voteNumber FROM preposition WHERE (voteNumber = ' $max ') and (WEEKOFYEAR(prepDate) = WEEKOFYEAR(NOW()))  limit 1";
$result = mysqli_query($conn, $query);
if (!$result) {
    echo "error in gettting the maximum voteNumber";
} else
    while ($row = mysqli_fetch_assoc($result)) {
        $user = $row['uidUsers'];
        $email = "SELECT emailUsers FROM users WHERE uidUsers = '$user'";
        $emailresult = mysqli_query($conn, $email);
        if (!$emailresult) {
            echo "error in fetching user email";
        } else {
            while ($col = mysqli_fetch_assoc($emailresult)) {
                $mailTo = $col['emailUsers'];
            }
        }

        $all = "SELECT * FROM users WHERE emailUsers!='$mailTo'";
        $allresult = mysqli_query($conn, $all);
        if ($allresult) {
            while ($al = mysqli_fetch_assoc($allresult)) {
                $mailTo .= ", " . $al['emailUsers'];
            }
            echo "<script>alert('" . $mailTo . "')</script>";
        } else {
            echo "error getting all users email";
            exit();
        }

        // $mailTo = 'issamabed0000@gmail.com';

        $subject = 'PROPOSITION';
        $content = '<div>
            <h1 style="font-family:sans-serif;color:red;">This Propositions is the best this week</h1>
            <h4 style="color: red">Content:</h4>
             ' . $row['text']
            . '<br><h5><a href="http://localhost/my%20project/index.php" style="color: darkred">for more information see your profile page..</a></h5>
            </div>';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Create email headers
        $from = 'abedissam95@gmail.com';
        $headers .= 'From: ' . $from . "\r\n" .
            'Reply-To: ' . $from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($mailTo, $subject, $content, $headers);
    }
