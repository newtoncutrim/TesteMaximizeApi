<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simetra</title>
    <link rel="stylesheet" href="../css/header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body >
    <?php
        require_once('header.php');
    ?>
    <nav class='navegacao'>
        <a id="link" href="../index.php">Início</a> <span>></span>
        <a id="link" href="../index.php">Blog</a>
    </nav>

<section class='info container' >
    <div class="lista row g-5 justify-content-evenly">
        <h1 id='title'></h1>
        <img id="image" src="" width="300px" alt="">
        <h2 id="description"></h2>
        <p id='text'></p>
        <p id="date">Data da publicação: </p>
    </div>
    
</section>
    <?php
        require_once('footer.php');
    ?>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script src="../js/getOnePost.js"></script>
</body>
</html>