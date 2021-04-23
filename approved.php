<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Approved</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="approved">
    <?php 
        session_start();
        $currentPage = "ideas";
        include("includes/nav.php");
    ?>
    <div class="project-form top">
        <h1 class="main-title">Project Approved</h1>
        <p>You are ready to get some funding for that dream</p>        

        <div class="progress progress2" id="slider" style="height: 6px;">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="leftdot3"></div>
                <div class="rightdot3"></div>
            </div>
        </div>
        <label for="slider" class="form-label">Details</label>
        <label for="slider" class="form-label right">Cash Flows</label>
    </div>
    <div style="display: flex; justify-content: center;">
        <div class="row justify-content-center a-content">
            <div class="col-6 l-side-box" style="margin-right: 2%;">
                <div>
                    <h4>Quick Figures Digest</h4>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="form_name">Needed Capital</label>
                        <p>Money needed to pay for project purchases</p>
                    </div>
                    <div class="form-group col-md-4 ml-auto">
                        <p>$<?php echo $_SESSION["incomeAmt"]; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="form_name">Payback Period</label>
                        <p>Time it takes for money generated by project to reach investments</p>
                    </div>
                    <div class="form-group col-md-4 ml-auto">
                        <p><?php echo $_SESSION["payback"]; ?></p>
                    </div>
                </div>
                <h4>Business Summary</h4>
            </div>
            <div class="r-side-box col-3">
                <h4>Status: Approved</h4>
                <br>
                <p>After calculating the underlying values of your project, it is deemed viable and approved for funding.</p>
            </div>
        </div>
    </div>
    <form method="POST" class="d-flex justify-content-center">
        <button type="submit" class="btn save" name="save">Save</button>
    </form>

    <?php

        include_once "includes/connection.php";
        $conn = new Database();
        $dbase = $conn->connect();

        if(isset($_POST["save"])) {
            $project_name = $_POST["p_name"];
            $industry = $_POST["industry"];
            $description = $_POST["description"];
            $s_date = $_POST["startDate"];
            $e_date = $_POST["endDate"];
            $neededIncome = $_POST["incomeAmt"];
            $payback = $POST["payback"];

            $query = "INSERT INTO project(project_name, industry_type, p_description, date, capital, payback_p) VALUES ('$project_name', '$industry', '$description', concat('$s_date', ' ~ ', '$e_date'), '$neededIncome', '$payback')";
            $execute = $dbase->query($query);

            if($execute) {
                echo "<script> alert('Project details have been saved successfully') </script>";
            }
            else {
                echo "<script> alert('Sorry, something went wrong') </script>";
                header("location:project_info.php");
            }
        }
    ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>