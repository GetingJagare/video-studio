<?php if (isset($_POST['link'])) { \app\helpers\downloadFile($_POST); } ?>
<html>
<head>
    <meta charset="utf8">
    <title>The Olett — Syndicate Studio</title>
    <style>
        @font-face {
            font-family: 'SFNSText';
            src: local(".SFNSText-Light"), url("/assets/img/fonts/SFNSText-Light.woff") format("woff");
            font-weight: 300
        }
        body{
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #1cd5ff), color-stop(100%, #1f56ff));
            background-image: -webkit-linear-gradient(top, #1cd5ff, #1f56ff);
            background-image: -moz-linear-gradient(top, #1cd5ff, #1f56ff);
            background-image: -o-linear-gradient(top, #1cd5ff, #1f56ff);
            background-image: linear-gradient(top, #1cd5ff, #1f56ff);
            background-image: -ms-linear-gradient(top, #1cd5ff 0%, #1f56ff 100%);
            background-size: auto;
            background-position: 0px;
            background-repeat: no-repeat;
            width: 100%;

        }
        #text{
            position: absolute;
            top: 35%;
            left: 0px;
            right: 0px;
            margin: -50px 50px;
            text-align: center;
        }
        #logo{
            position: absolute;
            width: 150px;
            height: 47px;
            background-image: url('/assets/img/syndicate-logo.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center center;
            margin-top: 20px;
            left: 50%;
            margin-left: -75px;
            padding-top: 25px;
        }
    </style>
    <script src="/dist/bundle/yandex-link.js"></script>
</head>
<body>
<div id="text" style="text-align: center; font-family: 'SFNSText', sans-serif; font-size: 28px; font-weight: 400; color: rgb(255, 255, 255) !important; text-decoration: none;">
    <br/>
    <a style="font-size:42px;">The Olett
        <br/><br/>
        <a href="#" data-yd-link="https://yadi.sk/i/jr03w31v1yt-cQ">Test</a><br />
        <a style="color: rgb(255, 255, 255) !important; text-decoration: none" href="https://works.aleams.com/olett/The_Olett_ProRes_422_HQ.mov">Ролик 1. Скачать (для заливки на YouTube)</a><br/>
        <a style="color: rgb(255, 255, 255) !important; text-decoration: none" href="https://works.aleams.com/olett/The_Olett_h265.mov" >Ролик 1. Скачать (для просмотра)</a><br/>
</div>
<a href="https://syndicate.studio"><div id="logo"></div></a>
<script>

</script>
</body>
</html>
