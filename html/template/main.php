<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simetra</title>
    <link rel="stylesheet" href="./css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body >
    <?php
        require_once('header.php');
    ?>
    <nav class='navegacao'>
        <a id="link" href="">Blog</a>
        <!-- <a href="template/form.php" id="link">Adicionar</a> -->
    </nav>

<section class='main' >
    <div class="cream-bg">
        <div class="filho container">
            <div class='list row g-5 justify-content-evenly'>
                
            </div>
        </div>
    </div>
    <div class="renderizar">

    </div>
</section>
    <?php
        require_once('footer.php');
    ?>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/getAllPost.js"></script>
    <script src="js/getOnepost.js"></script>
</body>
</html>
