<?php
require_once('../config.php');

$method = strtolower( $_SERVER['REQUEST_METHOD']);

if($method === 'get'){
    $sql = $conn->query("SELECT * FROM descricao");

    $id = filter_input(INPUT_GET, 'id');
    if($id){
        $sql = $conn->prepare("SELECT * FROM descricao WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $data = $sql->fetch(PDO::FETCH_ASSOC);

            $array['result'] = [
                'id' => $data['id'],
                'title' => $data['title'],
                'descricao' => $data['descricao'],
                'texto' => $data['texto'],
                'datas' => $data['datas'],
                'img' => $data['img']
            ];
        }
    } else {
        $array['error'] = 'id nao enviado';
    }
    
} else {
    $array['error'] = 'Metodo nao reconhecido somente GET';
}
require_once('../return.php');
