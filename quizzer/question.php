<?php

include "database.php";
session_start();
$number = $_GET["x"];

$porsesh=$db->query("SELECT * FROM questions WHERE id=$number");
$porsesh=$porsesh->fetch_assoc();

$answers=$db->query("SELECT * FROM answers WHERE question_id=$number");


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

    <div class="container">

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


        <div class="card mt-5">
            <div class="card-header">
                سوال 
                <?php echo $porsesh["id"]; ?>
                از 
                <?php echo $_SESSION["total"]; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">   <?php echo $porsesh["text"]; ?></h5>

                <form method="post" action="process.php">

                <?php foreach($answers as $answer): ?>


                    <div class="form-check">
                        <input type="hidden" value="<?php echo $porsesh["id"]; ?>" name="question_id">
                        <input class="form-check-input" type="radio" value="<?php echo $answer["id"]; ?>" name="answerr" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        <?php echo $answer["text"]; ?>
                        </label>
                    </div>


                    <?php endforeach; ?>

                    <button type="submit" class="btn btn-primary mt-4">بعدی</button>

                </form>

            </div>
        </div>




    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>


</html>