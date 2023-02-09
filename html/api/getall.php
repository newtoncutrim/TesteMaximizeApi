<?php
require_once('../config.php');

$method = strtolower( $_SERVER['REQUEST_METHOD']);
if($method === 'get'){
    $sql = $conn->query("SELECT * FROM descricao");
    
    if($sql->rowCount() > 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $item){
            $array['result'][] = [
                'id' => $item['id'],
                'descricao' => $item['descricao'],
                'texto' => $item['texto'],
                'title' => $item['title'],
                'datas' => $item['datas'],
                'img' => $item['img']
            ];
        }
    }
} else {
    $array['error'] = 'Metodo nao reconhecido';
}
require_once('../return.php');
