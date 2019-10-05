<?php
include "config.php";
global $conn;
$qry = "SELECT * FROM onair WHERE url='" . $_GET['onairID'] . "'";
$exe = mysqli_query($conn, $qry);
$onairData = array(array());
$i = 0;
while ($cont = mysqli_fetch_array($exe)) {
    for ($j = 0; $j <= 5; $j++) {
        $onairData[$i][$j] = $cont[$j];
    }
    $i++;
}

$qry = "SELECT * FROM questions WHERE paper_id='" . $onairData[0][1] . "'";
$exe = mysqli_query($conn, $qry);
$questions = array(array());
$i = 0;
while ($cont = mysqli_fetch_array($exe)) {
    for ($j = 0; $j <= 3; $j++) {
        $questions[$i][$j] = $cont[$j];
    }
    $i++;
}

$qry = "SELECT * FROM paper WHERE paper_id='" . $onairData[0][1] . "'";
$exe = mysqli_query($conn, $qry);
$paperData = array(array());
$i = 0;
while ($cont = mysqli_fetch_array($exe)) {
    for ($j = 0; $j <= 5; $j++) {
        $paperData[$i][$j] = $cont[$j];
    }
    $i++;
}

$qry = "SELECT * FROM subjects WHERE code='" . $paperData[0][1] . "'";
$exe = mysqli_query($conn, $qry);
$subjects = array(array());
$i = 0;
while ($cont = mysqli_fetch_array($exe)) {
    for ($j = 0; $j <= 4; $j++) {
        $subjects[$i][$j] = $cont[$j];
    }
    $i++;
}
?>
<style>
    body {
        margin: 10%;
    }

    .paper-parent {
        border: 1px solid;
        width: 100%;
    }

    .center {
        text-align: center;
    }

    .flex-between {
        display: flex;
        justify-content: space-between;
    }
</style>
<div class="paper-parent">
    <h1 class="center"><?php echo getSubjectName($paperData[0][1]) ?></h1>
    <h3 class="center">Subject Code:<?php echo $paperData[0][1] ?></h3>
    <h3 class="center" style="text-transform:uppercase;"><?php echo $subjects[0][4] ?></h3>
    <h3 class="flex-between">
        <span class="left">Time Duration: 3 Hours</span>
        <span class="right">Max. Marks: <?php echo $paperData[0][3] ?></span>
    </h3>
    <h5>INSTRUCTION TO CANDIDATES :</h5>
    <ul>
        <li>SECTION-A is COMPULSORY consisting of TEN questions carrying TWO marks each.</li>
        <li>SECTION-B contains FIVE questions carrying FIVE marks each and students have to attempt any FOUR questions.</li>
        <li>SECTION-C contains THREE questions carrying TEN marks each and students have to attempt any TWO questions.</li>
    </ul>
    <div>
        <h3 class="center">Section A</h3>
        <ol>
            <?php
            foreach ($questions as $question) {
                if ($question[3] == "A") {
                    echo "<li>$question[2]</li>";
                }
            }
            ?>
        </ol>
    </div>
    <div>
        <h3 class="center">Section B</h3>
        <ol>
            <?php
            foreach ($questions as $question) {
                if ($question[3] == "B") {
                    echo "<li>$question[2]</li>";
                }
            }
            ?>
        </ol>
    </div>
    <div>
        <h3 class="center">Section C</h3>
        <ol>
            <?php
            foreach ($questions as $question) {
                if ($question[3] == "C") {
                    echo "<li>$question[2]</li>";
                }
            }
            ?>
        </ol>
    </div>
</div>