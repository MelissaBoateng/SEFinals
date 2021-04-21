<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<body>
    <?php
        $currentPage = "home";
        include("includes/nav.php");
    ?>
    <main>
        <h1 class="heading">Welcome</h1>
        <img src="images/projectF.jpg">
        <div class="center">
            <p class="text1">Hey </br> Ready to make that idea a reality?</p>
            <p class="text2">I'm with you all the way! </br> Let's help you know the value of your project in two easy steps.. click the button to start</p>
        </div>
        <div class="form-group start-btn">
            <form action="project_info.php">
                <button type="submit" class="btn btn-block start">Get Started</button>
            </form>
        </div>
    </main>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>