<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cash Flow</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
            $('#datetimepicker2').datetimepicker({
            useCurrent: false
            });
            $("#datetimepicker1").on("dp.change", function (e) {
                $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
            });
            $("#datetimepicker2").on("dp.change", function (e) {
                $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
            });
        });
    </script>
</head>

<?php
    session_start();

    if(isset($_POST["c_continue"])) {
        $_SESSION["incomeAmt"] = $_POST["incomeAmt"];
        $_SESSION["payback"] = $_POST["payback"];

        header("location:approved.php");
        die();
    }


?>

<body>
    <?php
        
        $currentPage = "ideas";
        include("includes/nav.php");
    ?>
    <div class="project-form top">
        <h1 class="main-title">Enter your project cash flows</h1>
        <p>Tell us about how money comes in and out of your business</p>        

        <div class="progress progress2" id="slider" style="height: 6px;">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                <div class="leftdot2"></div>
                <div class="rightdot2"></div>
            </div>
        </div>
        <label for="slider" class="form-label">Details</label>
        <label for="slider" class="form-label right">Cash Flows</label>
    </div>
    <div class="project-form bottom">
        <form method="POST" style="max-width: 90%;">
            <div>
                <h4>Project Inputs</h4>
            </div>
            
            <div class="container row" style="padding: 0;">
                <div class='col-md-2'>
                    <label>Start Date</label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" name="startDate"/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-md-2'>
                    <label>End Date</label>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker2'>
                            <input type='text' class="form-control" name="endDate"/>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group form-check" style="padding: 2% 8%;">
                    <input type="checkbox" class="form-check-input" id="check" style="display: block; margin-left: -10px;" required>
                    <label class="form-check-label" for="check" style="margin-left: 16px;">End Date Unkown or Indefinite</label>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="form_name">Needed Income</label>
                    <input type="text" class="form-control item" id="n_income" placeholder="Needed capital for project" required>
                </div>
                <div class="form-group col-md-4 ml-auto">
                    <label for="form_name">Amount ($)</label>
                    <input type="number" class="form-control item" id="incomeAmt" name="incomeAmt" placeholder="State amount" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="form_name">Payback Period</label>
                    <input type="text" class="form-control item" id="payback" name="payback" placeholder="Payback period for the project" required>
                </div>
            </div>
        </form>
    </div>
    <div class="decisions">
        <a class="back" href="project_info.php">Go back</a>
        <form method="POST" style="margin: 0;">
            <button type="submit" class="btn continue" name="c_continue">Continue</button>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>