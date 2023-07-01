<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/loginfoarm.css">
    <link rel="shortcut icon" href="/assets/images/nivocraft_2.png" type="image/x-icon">
    <title>Nivocraft.de</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
    require("configuration/mysql.php");
    $stmt = $mysql->prepare("SELECT * FROM users WHERE username = :user"); //Username überprüfen
    $stmt->bindParam(":user", $_POST["username"]);
    $stmt->execute();
    $count = $stmt->rowCount();
    if($count == 1){
        //Username ist frei
        $row = $stmt->fetch();
        if(password_verify($_POST["pw"], $row["password"])){
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: index.php");
        } else {
            echo "Der Login ist fehlgeschlagen";
        }
    } else {
        echo "Der Login ist fehlgeschlagen";
    }
}
?>
    <form method="post">
        <h1>Nivocraft.de - Login</h1>
        <span>global$mysql;</span>
        <div class="inputs_container">
            <input name="username" type="text" placeholder="Benutzername" required>
            <input name="pw" type="password" placeholder="Passwort" required>
            <a href="#">Passwort vergessen?</a>
            <a href="registration.php">Noch kein Konto? Hier Registrieren!</a>
            <button type="submit" name="submit">Einloggen</button>
        </div>
    </form>
</body>
</html>