<?php
//inserir novo post


// require_once('../config.php');

// $method = strtolower( $_SERVER['REQUEST_METHOD']);

// if($method === 'post'){
//     $title = $_POST['titulo'];
//     $descricao = $_POST['descricao'];
//     $texto = $_POST['texto'];
//     $data = date('Y-m-d');
//     $img = $_POST['img'];


//     if(isset($_POST) && !empty($_POST)){
//         $sql = "INSERT INTO descricao (title, descricao, texto, datas, img) VALUES('{$title}','{$descricao}','{$texto}','{$data}', '{$img}')";

//         $result = $conn->query($sql);

//         $id = $conn->lastInsertId();

        
//         $array['result'] = [
//             'id' => $id,
//             'title' => $title,
//             'descricao' => $descricao,
//             'texto' => $texto,
//             'datas' => $data
//         ];
//     } else {
//         $array['error'] = 'campos nao enviados';
//     }
    
// } else {
//     $array['error'] = 'Metodo nao reconhecido somente POST';
// }
// require_once('../return.php');


