<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Edit Project Archive</title>
</head>
<body class="body">
    <?php
        include_once "includes/connection.php";

        $conn = new Database(); // creating an instance of the Database class
        $d_base = $conn->connect();

        $id = $_GET["project_id"];

        // sql query to access data
        $sql_query = "SELECT * FROM project WHERE project_id = '$id'";
        // execute or run the query
        $execute = mysqli_query($d_base, $sql_query);

        if($execute) {
            while($row = mysqli_fetch_array($execute)) {
               ?>
               <div class="container">
                    <div class="col-lg-6 m-auto">
                        <h2>Edit Project Archive</h2> <br>
                        <form action="" method="POST">
                            <input type="hidden" name="project_id" value="<?php echo $row["project_id"] ?>">

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Project Name</span>
                                </div>
                                <input type="text" name="p_name" class="form-control" value="<?php echo $row["project_name"] ?>" placeholder="project name" required>
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Status</span>
                                </div>
                                <input type="text" name="status" class="form-control" value="<?php echo $row["status"] ?>" placeholder="break-even" readonly>
                            </div>

                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Net Balance</span>
                                </div>
                                <input type="number" name="balance" class="form-control" value="<?php echo $row["capital"] ?>" placeholder="net balance" required>
                            </div>

                            <a href="project_arch.php" class="btn btn-danger">Cancel</a>
                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
        <?php

                if(isset($_POST["update"])) {
                    
                    $project_name = $_POST["p_name"];
                    $status = $_POST["status"];
                    $balance = $_POST["balance"];

                    $query = "UPDATE project SET project_name='$project_name', status=' $status', capital=' $balance' WHERE project_id='$id'  ";
                    $run = mysqli_query($d_base, $query);

                    if($run) {
                        // echo '<script> alert("Update successful"); </script>';
                        // header("location:index.php");
                        echo 
                            "<script>
                                window.location.href = 'project_arch.php'; 
                            </script>";
                    }
                    else {
                        echo '<script> alert("Update unsuccessful"); </script>';
                    }
                }
            }
        }

        ?>
</body>
</html>