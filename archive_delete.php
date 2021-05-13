<?php

    include_once "includes/connection.php";

    $conn = new Database(); // creating an instance of the Database class
    $d_base = $conn->connect();

    // check if the required button is clicked and perform tasks as follows
    
    if(isset($_GET["remove"])) {
        $id = $_GET["remove"];

        // sql query to access data
        $sql_query = "DELETE FROM project WHERE project_id = '$id'";
        // execute or run the query
        $execute = mysqli_query($d_base, $sql_query);

        if($execute) {
            header("location:project_arch.php");
        }
    }

?>