<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Detail - Microservice Migration Meta-Approach Web-based Tool</title>

    <meta name="author" content="QiwenGu">
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<?php
//<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
include('functions.php');
$servername = "localhost";
$username = "user";
$password = "";
$dbname = "migration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully" . "<br>";

$sql = "SELECT * FROM contribution WHERE id=" . $_GET['id'];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();

    //echo "<h1>Success: find detailed page from database</h1>";
    //echo  $row["Title"];
} else {
    echo "<h1>Error: fail to find detailed page from database</h1>";
}
?>

<body>
    <div class="container-fluid" style="padding:30px">
        <div class="row">
            <div class="col-md-10">
                <div class="page-header">
                    <h1 id="Title" name="Title">
                        <!-- php get-->
                        <?php

                        echo nl2br($row["Title"]); ?>
                    </h1>

                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12">
                        <!-- php get-->
                        <h1>
                            <span class="badge badge-default float-right" id="Year" name="Year">
                                <?php

                                echo $row["Year"]; ?>
                            </span>
                        </h1>
                    </div>
                </div>

                <div class="row" style="margin-top:5px">
                    <div class="col-md-12">
                        <!-- php get-->
                        <h3><a href="<?php
                                        echo $row["Link"]; ?>" class="badge badge-primary float-right" id="Link" name="Link" target="_blank">Link to Website</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:20px">
            <div class="col-md-12">
                <!-- php get-->
                <h4><span class="bg-light text-dark" id="Author" name="Author">
                        <?php

                        echo $row["Authors"]; ?></span></h4>
            </div>
        </div>
        <div class="row" style="margin-top:50px">
            <div class="col-md-12">
                <table class="table">
                    <thead></thead>
                    <tbody>
                        <tr class="table">
                            <td>
                                <b>Approach</b>
                            </td>
                            <td id="DetailApproach" name="DetailApproach">
                                <!-- php get-->
                                <?php
                                echo $row["Approach"]; ?>
                            </td>
                        </tr>
                        <tr class="table">
                                <td>
                                    <b>Programming Language</b>
                                </td>
                                <td id="ProgramLanguage" name="ProgramLanguage">
                                    <!-- php get-->
                                    <?php
                                    echo nl2br($row["ProgramLanguage"]); ?>
                                </td>
                            </tr>
                        <tr class="table">
                            <td>
                                <b>Process Strategy</b>
                            </td>
                            <td id="DetailProcessStrategy" name="DetailProcessStrategy">
                                <!-- php get-->
                                <?php
                                showProcess($row);
                                ?>
                            </td>
                        </tr>

                        <trclass="table">
                            <td>
                                <b>Decomposition Strategy</b>
                            </td>
                            <td id="DetailDecompositionStrategy" name="DetailDecompositionStrategy">
                                <!-- php get-->
                                <?php
                                showDecomposition($row);
                                ?>
                            </td>
                            </trclass=>
                            <tr class="table">
                                <td>
                                    <b>Technique Type</b>
                                </td>
                                <td id="DetailTechniqueType" name="DetailTechniqueType">
                                    <!-- php get-->
                                    <?php
                                    showTechniqueType($row);
                                    ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Applicability</b>
                                </td>
                                <td id="DetailApplicability" name="DetailApplicability">
                                    <!-- php get-->
                                    <?php
                                    showApplicability($row); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Technique Sets</b>
                                </td>
                                <td id="DetailTechniqueSets" name="DetailTechniqueSets">
                                    <!-- php get-->
                                    <?php
                                    echo nl2br($row["TechniqueSet"]); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b> Input</b>
                                </td>
                                <td id="DetailInput" name="DetailInput">
                                    <!-- php get-->
                                    <?php
                                    showInput($row);
                                    ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Output</b>
                                </td>
                                <td id="DetailOutput" name="DetailOutput">
                                    <!-- php get-->
                                    <?php
                                    showOutput($row);
                                    ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Atomic Unit</b>
                                </td>
                                <td id="DetailAtomic" name="DetailAtomic">
                                    <!-- php get-->
                                    <?php
                                    echo nl2br($row["AtomicUnit"]); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Tool Support</b>
                                </td>
                                <td id="DetailToolSupport" name="DetailToolSupport">
                                    <!-- php get-->
                                    <?php
                                    echo nl2br($row["Tool"]); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Validation Type</b>
                                </td>
                                <td id="DetailValidationType" name="DetailValidationType">
                                    <!-- php get-->
                                    <?php
                                    showValidation($row); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Quality Metrics / Intention</b>
                                </td>
                                <td id="DetailQuality" name="DetailQuality">
                                    <!-- php get-->
                                    <?php
                                    showQuality($row); ?>
                                </td>
                            </tr>
                            <tr class="table">
                                <td>
                                    <b>Score</b>
                                </td>
                                <td id="Score" name="Score">
                                    <!-- php get-->
                                    <?php
                                    echo $row["Score"]; ?>
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>