<?php
include "config.php";
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

<?php
$data = getPaperStyle($_GET['onairID']);
print_r($data);
?>

<div class="paper-parent">
    <h1 class="center">Exam Name</h1>
    <h3 class="center">Subject Code</h3>
    <h3 class="center">Computer</h3>
    <h3 class="flex-between">
        <span class="left">Time Duration: 3 Hours</span>
        <span class="right">Max. Marks: 60</span>
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
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    <div>
        <h3 class="center">Section B</h3>
        <ol>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
    <div>
        <h3 class="center">Section C</h3>
        <ol>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>
</div>