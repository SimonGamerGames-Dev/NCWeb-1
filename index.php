<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/images/static.png" type="image/x-icon">
    <title>Ranzberger - Aufbau</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    #background-video {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        z-index: -1;
    }

    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    div {
        background-color: black;
        display: block;
        text-align: center;
        color: white;
        opacity: 0.9;
        border-radius: 30px;
        margin-top: 17%;
        margin-left: 20%;
        margin-right: 20%;
        padding-bottom: 30px;
        padding-top: 30px;
    }

    img {
        border-radius: 15px;
        width: 150px;
    }

    @media only screen and (max-width: 900px) {
        div {
            margin-top: 0%;
            margin-left: 0%;
            margin-right: 0%;
            border-radius: 0px;
        }
    }
</style>
<body>
<div class="box">
    <img src="/assets/images/up.png" alt="">
    <h1>Ranzberger - Aufbau</h1>
    <span>
            Diese Webseite befindet sich momentan im aufbau <br>
            Weitere Informationen folgen!
        </span>
</div>

<video id="background-video" playsinline="playsinline" autoplay="autoplay" loop="loop" muted="muted">
    <source src="/assets/images/video2.mp4" type="video/mp4">
</video>
</body>
</html>
