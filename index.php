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
    <title>Live search in MySQL</title>
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* text-align: center; */
        padding: 2em;
    }
</style>
<body>
    
    <form action="search.php" method="POST">
        <h1>Live search in MySQL</h1>
        <input class="search-box" type="text" name="name" placeholder="Start typing..." autofocus required>
    </form>

    <h2>Result:</h2>
    <table id="result"></table>

    <script src="main.js"></script>
</body>
</html>