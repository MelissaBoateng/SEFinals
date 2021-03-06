<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log-In</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/forms.css">
        <link rel="stylesheet" href="css/nav.css">
    </head>
    <body>
        <?php
            session_start();
        ?>
        <div class="login-form">
            <form method="POST">
                <div>
                    <h1 class="title">Welcome back!</h1>
                </div>
                <div class="form-group">
                    <label for="form_name">Email address</label>
                    <input type="text" class="form-control item" id="email" name="email" placeholder="Email address" required>
                </div>
                <div class="form-group">
                    <label for="form_name">Password</label>
                    <input type="password" class="form-control item" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="profile">
                    <div class="user">
                        <input type="radio" name="type" value="Investor" id="investor" required>
                        <label for="investor">Investor</label>
                    </div>
                    <div class="user">
                        <input type="radio" name="type" value="Investee" id="investee" required>
                        <label for="investee">Investee</label>
                    </div>
                </div>

                <div class="form-group login-btn">
                    <button type="submit" class="btn btn-block login" name="logIn">Login</button>
                </div>

                <div class="other">
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                    <div>
                        <a href="signup.php">Create an account</a>
                    </div>
                </div>

            </form>
        </div>

        <?php

            include_once "includes/connection.php";
            $conn = new Database();
            $dbase = $conn->connect();

            if(isset($_POST["logIn"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $user = $_POST["type"];

                if($user == "Investee"){
                    $query = "SELECT * FROM fundee where email = '$email'";
                    $execute = mysqli_query($dbase, $query);
                    $user_row = mysqli_fetch_array($execute);

                    if($user_row) {
                        $stored_p = $user_row["password"];
                        $decrypt_pass = password_verify($password, $stored_p);

                        if($decrypt_pass) {
                            echo "<script> alert('Successful logIn'); </script>";
                            $_SESSION["name"] = $email;
                            $_SESSION["userID"] = $user_row["fundee_id"];
                            header("location:mainpage.php");
                        }
                        else {
                            echo "<script> alert('Your password may be incorrect'); </script>";
                        }
                    }
                }

                else if($user == "Investor"){
                    $query1 = "SELECT * FROM investor WHERE investor_email = '$email'";
                    $execute1 = mysqli_query($dbase, $query1);
                    $investor_row = mysqli_fetch_array($execute1);

                    if($investor_row) {
                        $stored_p = $investor_row["password"];
                        $decrypt_pass = password_verify($password, $stored_p);

                        if($decrypt_pass) {
                            echo 
                                "<div class='alert-success' style='top: 100px;'>
                                    <span> Successful logIn </span>
                                <div>";
                            $_SESSION["name"] = $email;
                            $_SESSION["investorID"] = $investor_row["investor_id"];
                            header("location:mainpage.php");
                        }
                        else {
                            echo "<script> alert('Your password may be incorrect'); </script>";
                        }
                    }
                }

                else {
                    echo "<script> alert('You don\'t have an account with us'); </script>";
                }
            }
        ?>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>