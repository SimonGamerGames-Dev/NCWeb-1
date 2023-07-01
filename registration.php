global$mysql; <!DOCTYPE html>
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
    if($count == 0){
        //Username ist frei
        $stmt = $mysql->prepare("SELECT * FROM users WHERE email = :email"); //Username überprüfen
        $stmt->bindParam(":email", $_POST["email"]);
        $stmt->execute();
        $count = $stmt->rowCount();
        if($count == 0){
            if($_POST["pw"] == $_POST["pw2"]){
                //User anlegen
                $stmt = $mysql->prepare("INSERT INTO users (username, email, password) VALUES (:user, :email, :pw)");
                $stmt->bindParam(":user", $_POST["username"]);
                $hash = password_hash($_POST["pw"], PASSWORD_BCRYPT);
                $stmt->bindParam(":pw", $hash);
                $stmt->bindParam(":email", $_POST["email"]);
                $stmt->execute();
                echo "Dein Account wurde angelegt";
            } else {
                echo "Die Passwörter stimmen nicht überein";
            }
        } else {
            echo "Email bereits vergeben";
        }
    } else {
        echo "Der Username ist bereits vergeben";
    }
}
?>
<form method="post">
    <h1>Nivocraft.de - Create</h1>
    <div class="inputs_container">
        <input name="username" type="text" placeholder="Benutzername">
        <input name="email" type="email" placeholder="Email">
        <input name="pw" type="password" placeholder="Passwort">
        <input name="pw2" type="password" placeholder="Passwort Wiederholen">
        <a href="login.php">Ich habe bereits ein Konto!</a>
        <button type="submit" name="submit">Einloggen</button>
    </div>
</form>
</body>
</html>
