<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Essentials</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <?php
        session_start();
        $currentPage = "ideas";
        include("includes/nav.php");
    ?>
    <div class="project-form top">
        <h1 class="main-title">Welcome Aboard!</h1>
        <p>Tell us a few details about your project</p>

        <div class="progress progress1" id="slider">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                <div class="leftdot"></div>
                <div class="rightdot"></div>
            </div>
        </div>
        <label for="slider" class="form-label">Details</label>
        <label for="slider" class="form-label right">Cash Flows</label>
    </div>
    <div class="project-form bottom">
        <form method="POST">
            <div>
                <h4>Project Details</h4>
            </div>
            <div class="form-group">
                <label for="form_name">Project Name</label>
                <input type="text" class="form-control item" id="p-name" name="p_name" placeholder="Give us the name of your project" required>
            </div>
            <div class="form-group">
                <label for="industry">Industry</label>
                <select name="industry" class="form-control" id="industry" required>
                  <option value="Industry" hidden>Industry</option>
                  <option>Agriculture</option>
                  <option>E-commerce</option>
                  <option>I.o.T</option>
                  <option>Healthcare</option>
                </select>
              </div>
            <div class="form-group">
                <label for="form_name">Project Description</label>
                <input type="text" class="form-control item" id="description" name="description" placeholder="Give us the problem your project solves and the solution">
            </div>
            <div class="form-group">
                <label for="form_name">E-mail Address</label>
                <input type="email" class="form-control item" id="email" name="email" placeholder="Kindly enter your email">
            </div>
            <div class="form-group">
                <label for="form_name">Phone Number</label>
                <input type="tel" class="form-control item" id="contact" name="contact_n" placeholder="Kindly enter your phone number">
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check" style="display: block;">
                <label class="form-check-label" for="check">This project is currently ongoing</label>
            </div>

            <div class="c_decisions">
                <a class="back" href="mainpage.php">Go back</a>
                <button type="submit" class="btn btn-block continue" name="continue">Continue</button>
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST["continue"])){
            $project_name = $_POST["p_name"];
            $industry = $_POST["industry"];
            $description = $_POST["description"];
            $contact = $_POST["contact_n"];

            $_SESSION["project_name"] = $project_name;
            $_SESSION["industry"] = $industry;
            $_SESSION["description"] = $description;
            $_SESSION["contact"] = $contact;

            // header("location:cashflow.php");
            echo "<script>window.location='cashflow.php'</script>";
        }
    ?>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>