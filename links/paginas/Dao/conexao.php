<?php 
class Conexao{
    public static function conectar(){
        $conexao = mysqli_connect ("127.0.0.1", "root", "root", "zodiacgeek");
        return $conexao;
         
    }
}
?>
