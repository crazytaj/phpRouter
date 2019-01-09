<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./Library/CSS/bootstrap.min.css">
        <script src="./Library/CSS/jquery-3.3.1.slim.min.js"></script>
        <script src="./Library/CSS/popper-1-14-3.min.js"></script>
        <script src="./Library/CSS/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Site Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/help">Help</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/donotpopulate">404 Page</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Option 3</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <a class="nav-link" href="#">Sign Up(#)</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Login(#)</a>
            </li>
        </ul>
        </div>
    </nav>
