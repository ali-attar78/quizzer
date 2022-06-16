<?php
include "database.php";
session_start();
$_SESSION["total"];


?>



<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آزمونک</title>

    <link rel="stylesheet" href="css/bootstrap.rtl.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            آزمونک
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>





<div class="container">


<div class="card mt-5">
    <div class="card-header">
        صفحه مدیریت
    </div>
    <div class="card-body">

<form method="post" action="new_question.php">

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">پرسش خود را وارد کنید</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"  name="question">
    </div>

    <div id="answerBox">



    </div>

    <div class="d-flex flex-row-reverse">
        <button type="button" id="add-answer" class="btn btn-success mt-5 mb-1 rounded-circle btnRound" onclick="Add_answer()">
           <img src="img/plus.png" class="btnimg" >
        </button>
        <button type="button" id="remove-answer" class="btn btn-danger mt-5 mb-1 mx-1 rounded-circle  btnRound" onclick="Remove_answer()">
            <img src="img/minus.png" class="btnimg" >
        </button>
    </div>

    <button style="width: 10% !important;" type="submit" class="btn btn-success mt-2 rounded-pill">ثبت</button>



</form>



    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
<script src="js/myScript.js"></script>

</body>