<?php

if(isset($_COOKIE["username"])){
    $user = $_COOKIE["username"];
    
}
else{
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang = "en">
    <meta charset="UTF-8">
    <title>Fuel Quote Form</title>
    <head>
        <link rel="stylesheet" href="../styles.css">
        <script src = "../js/formMover.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src ="../js/tab.js"></script>
    </head>
    <body>
        <header>
            <!-- Tab links -->
            <div class="tab">
                <button class="tablinks" onclick="loginTab()">Login</button>
                <button class="tablinks" onclick="registerTab()">Register</button>
                <button class="tablinks" onclick="profileTab()">Profile</button>
                <button class="tablinks" onclick="quoteTab()">Fuel Quote</button>
                <button class="tablinks" onclick="historyTab()">Fuel Quote History</button>
            </div>
  </header>
        <div class = "quote-form">
        <h2 class = "text-center">Fuel Quote History</h2>

        <?php
            
            require_once('php_class/FuelQuote.php');
            require_once('php_class/FuelHistory.php');
            
            echo FuelHistory::generateHistory("cooldude9");
        ?>
        
        <button type = "button" onclick="formLoader()" class = "btn btn-primary btn-block">Submit New Quote</button>
    </div>
    </body>
</html>
