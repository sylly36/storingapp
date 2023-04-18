<?php 
session_start();
?>

<!doctype html>
<html lang="nl">

<head>
    <title>StoringApp</title>
    <?php require_once '../head.php'; ?>
</head>

<body>

    <?php require_once '../header.php'; ?>
    
    <div class="container home">
    <form action="../backend/inlogController.php" method="POST">
        <div class="form-item">
            <label>Username</label>
            <input type="text" name="username" id="username" placeholder="Voer een username in!">
        </div>
        <div class="form-item">
            <label>Wachtwoord</label>
            <input type="password" name="password" id="password" placeholder="Voer een wachtwoord in!">
        </div>
        <input type="submit" value="login">
    </form>

    </div>

</body>

</html>
