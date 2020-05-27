<style>
    h4.userColor {
        font-size: 16px;
        /* background-image: -webkit-linear-gradient(180deg, #9E768F 0%, #9FA4C4 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; */
    }

    .containerPrep {
        margin-bottom: 10px;
    }

    .jumbotron {
        background: white;
    }

    .jumbotron p#prepositionText {
        font-family: "Montserrat", Arial, sans-serif;
        font-size: 17px;
        line-height: 1.8;
        font-weight: 500;
        /* color: #999999; */
        color: #666
    }

    div.newStyle {
        display: flex;
        justify-content: space-between;
        margin-top: 60px;
    }

    .votingSpace {
        transform: translateY(5px);
        background: none;
        border: none;
        outline: none;
    }

    .votingSpace {
        color: #385898;
    }

    .votingSpace:hover {
        color: #fec92f;
    }

    .votingSpace:active {
        color: #a485fd;
    }

    .VoteSpace .groupProfile {
        /* display: flex; */
        justify-content: space-around
    }

    .groupProfile i {
        float: left;
        font-size: 20px;
    }

    .groupProfile h4 {
        margin-top: -1px;
        float: right;
        color: black;
    }

    .VoteSpace {
        margin-top: 8px;
        margin-right: 10px;
    }

    .VoteSpace>* {
        color: #411881 !important;
        transition: all 0.2s ease-in-out;
    }

    .VoteSpace>*:hover {
        color: #cb4efc !important;
        transition: all 0.2s ease-in-out;
    }

    .groupProfile {
        margin-top: 7px;
        margin-left: 20px;
    }

    .newStyle {
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }

    .containerPrep {
        box-shadow: 0px 30px 40px 0px #e2e3e7;
    }
</style>
<?php
include "includes/dbh.inc.php";

$sql = "SELECT * FROM preposition ORDER BY prepDate desc";
$result = mysqli_query($conn, $sql);
$votecount = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $votecount++;
        $area = "prep" . $votecount;
        $button = "vote" . $votecount;
        echo '
        <div class="containerPrep">
            <div class="jumbotron ' . $area . '" id="prepositions" >
            <h6>' . $row['prepDate'] . '</h6>
            <p id="prepositionText">' . $row['text'] . ' </p>
                <div class="newStyle">
                    <div class="groupProfile" >
                        <i class="fas fa-user-tie" style="margin-right:10px; font-size:30px;color:#accf52"></i>
                        <h4 class="userColor" style="color: #accf52">' . $lang['writen by'] . '<br> ' . $row['uidUsers'] . '</h4>
        </div>
        <br>

        <div class="VoteSpace">
            <div class="line-divider"></div>
            <button name="voteUp" type="button" class="votingSpace voteup ' . $button . '" style=" font-size: 16px;margin-top: 0px">
                <i class="fas fa-thumbs-up"></i>
                ' . $lang['vote'] . '  <i class="text" style=" font-style: normal; font-size: 14px ">' . $row['voteNumber'] . '</i>
            </button>
        </div>
        </div>
        </div>
        </div>
        <br><br>
        ';
    }
}
?>