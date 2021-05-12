<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-Up</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <?php
        $currentPage = "";
        include("includes/nav.php");
    ?>
    <div class="login-form">
        <form method="POST">
            <div>
                <h1 class="title">Know the value of your project before spending</h1>
            </div>
            <div class="form-row">
                <div class="col">
                    <label for="form_name">First name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Your first name">
                </div>
                <div class="col">
                    <label for="form_name">Last name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Your last name">
                </div>
            </div>
            <div class="form-group">
                <label for="form_name">Email address</label>
                <input type="text" class="form-control item" id="email" name="email" placeholder="Enter your email address">
            </div>
            <div class="form-group">
                <label for="form_name">Password</label>
                <input type="password" class="form-control item" id="password" name="password" placeholder="Create a new password">
            </div>
            <div class="form-group">
                <label for="form_name">Confirm Password</label>
                <input type="password" class="form-control item" id="c-password" name="c_password" placeholder="Confirm your new password">
            </div>
            
            <div class="form-group signup-btn">
                <button type="submit" class="btn btn-block signup" name="signUp">Get started</button>
            </div>
            <div class="other">
                <div>
                    Already have an account? 
                    <a href="index.php">Sign in</a>
                </div>
            </div>
            
        </form>
    </div>

    <?php
        include_once "includes/connection.php";
        $conn = new Database();
        $dbase = $conn->connect();
        
        if(array_key_exists("signUp", $_POST)) {
            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password2 = $_POST["c_password"];

            if($password === $password2) {
                $pass_encrypt = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO fundee VALUES (null, '$email', '$fname', '$lname', '$pass_encrypt', '')";
                $execute = mysqli_query($dbase, $query);

                if($execute) {
                    echo "<script> alert('You signed up successfully'); </script>";
                    header("location:index.php");
                }
                else {
                    echo "<script> alert('Sorry, something went wrong'); </script>";
                    echo ("this:" . $dbase->error);
                }
            }
            else {
                echo "<script> alert('Passwords do not match'); </script>";
            }
        }
    ?>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>