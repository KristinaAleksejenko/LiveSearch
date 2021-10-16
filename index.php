<?php
    require_once 'DB.php';

    $db = new DB();
    $data = $db->viewData();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Live search in MySQL</title>
</head>
<body>
    
    <main id="main">
        <form id="search-form" action="search.php" method="POST" autocomplete="off">
            <h1 class="title">Live search in MySQL</h1>
            <div class="search-container">
                <input class="search-box" type="text" name="name" placeholder="Start typing..." autofocus required>
                <img class="search-img" src="search.svg" alt="search">
            </div>
        </form>
        <table id="result"></table>
    </main>


    <footer>
        <p class="footer-label">written by <a href="https://www.github.com/r3surr3cti0n">@r3surr3cti0n</p>
    </footer>

    <script src="main.js"></script>
</body>
</html>