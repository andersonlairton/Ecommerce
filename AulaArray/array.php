<?php //a versao do servidor local instalada nao esta atualizada e com isso ela nao reconhece as novas tags de abertura e fechamento do php 

    echo 'ola mundo';
?>
    <br>
<?php
    $pessoas = array();//criando um array
    
    array_push($pessoas,array(//com array push é adicionado valores a um array ja criado
        'nome'=>'anderson',
        'idade'=>'23'
    ));
?>
<br>
<?php

    echo json_encode($pessoas);//transformando o array pessoas em um json
        
    //criando um json
    $json='
    [{"nome":"anderson","idade":"23"}]';

    //transformando o json em um array
    
    $data= json_decode($json,true);//se não colocar o true,ele transforma em objeto

    var_dump($data);
?>
