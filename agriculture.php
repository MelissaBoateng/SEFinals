<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log-In</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <?php
        $currentPage = "investors";
        include("includes/nav.php");
    ?>
    <main>
        <h1 class="i-heading">Agriculture</h1>
        <div class="row">
            <div class="left">
                <caption>Industry averages</caption>
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
                    </div>
                    <div class="form-group add-btn">
                        <button type="submit" class="btn btn-block add">Add project</button>
                    </div>
                </div>
            </div>

            <div class="right">
                <caption>Projects</caption>
                <table class="table right-box">
                    <thead>
                        <tr>
                            <th scope="col">DATE</th>
                            <th scope="col">INDUSTRY</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">NET BALANCE</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">3/01/20</th>
                            <td>African farmers M.</td>
                            <td>Profit</td>
                            <td>$300</td>
                            <td><a href="">Read More</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2/02/20</th>
                            <td>Knockknock market</td>
                            <td>Profit</td>
                            <td>$1000</td>
                            <td><a href="">Read More</a></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Kinafarm</td>
                            <td>Loss</td>
                            <td>(-)$500</td>
                            <td><a href="">Read More</a></td>
                        </tr>
                        <tr>
                            <th scope="row"></th>
                            <td>Pokuculture</td>
                            <td>Profit</td>
                            <td>$10000</td>
                            <td><a href="">Read More</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>