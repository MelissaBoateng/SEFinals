<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Archives</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();
        $currentPage = "tracker";
        include("includes/nav.php");

        include_once "includes/connection.php";
        $conn = new Database();
        $dbase = $conn->connect();

        $sql = "SELECT * FROM `project`";
        $result = $dbase->query($sql);

        echo '<main>
            <h1 class="i-heading">Project Archives</h1>
            <div class="row">
                <div class="left-b">
                    <caption>My Balance</caption>
                    <div class="left-box">
                        <h4>Net industry income</h4>
                        <h2>$26,300.00</h2>
                        <hr>
                        <div class="row" style="padding: 0 5%;">
                            <p>Total Cash Inflow</p>
                            <p>$31,300</p>
                        </div>
                        <div class="row" style="padding: 0 5%;">
                            <p>Total Cash Outflow</p>
                            <p>(-)$5000</p>
                        </div>
                        <div class="row" style="padding: 0 5%;">
                            <p>Total</p>
                            <p>$26,300</p>
                        </div>' ?>
                        <div class="form-group add-btn">
                            <button type="button" class="btn btn-block add"><a href="project_info.php">Add project</a></button>
                        </div><?php echo '
                    </div>
                </div>

                <div class="right-b">
                    <caption>Project History</caption>
                    <table class="table right-box">
                        <thead>
                            <tr>
                                <th scope="col">DATE</th>
                                <th scope="col">PROJECT NAME</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">NET BALANCE</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>';

                            if($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $b = "break-even";
                                    echo '<tbody>
                                        <tr>
                                            <th scope="row">'. $row["date"].'</th>
                                            <td>'. $row["project_name"].'</td>
                                            <td>'.$b.'</td>
                                            <td>$'. $row["capital"].'</td>
                                            <td>'?><a href="archive_edit.php?project_id=<?php echo $row["project_id"]; ?>"><i class="fa fa-edit"></i><?php echo '</td>
                                            <td>'?><a href="" data-toggle="modal" data-target="#delete"><i class="fa fa-trash" aria-hidden="true"></i><?php echo '</td>
                                        </tr>
                                    </tbody>';?>
                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal">Delete Record?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Kindly confirm if you want to delete the chosen record.<div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <a href="archive_delete.php?remove=<?php echo $row["project_id"]; ?>" class="btn btn-danger"> delete </a>
                                                </div>
                                            </div>
                                        </div>
                                    <div>
                                    <?php
                                }
                            }
                            echo '
                        </table>
                    </div>
                </div>
            </main>';
    ?>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>