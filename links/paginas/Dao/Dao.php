<?php 
include 'conexao.php';
class Dao{
    public function buscarpromocoes(){
        $conn = Conexao::conectar();
        $comando = "
        SELECT 
        p.id,
        p.nome,
        p.descricao,
        p.categoria,
        p.valor,
        p.promocao,
        p.imagem,
        GROUP_CONCAT(e.tamanho SEPARATOR ' ') AS estoque
        FROM Produto p
        LEFT JOIN estoque e 
        ON p.id = e.id_produto
        WHERE p.promocao = 1
        GROUP BY p.id
        ";
        $resultado = mysqli_query($conn,query: $comando);
        mysqli_close($conn);
        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
    public function buscarprodutos($categoria) {
        $conn = Conexao::conectar();
        $comando = "
        SELECT 
        p.id,
        p.nome,
        p.descricao,
        p.categoria,
        p.valor,
        p.promocao,
        p.imagem,
        GROUP_CONCAT(e.tamanho SEPARATOR ' ') AS estoque
        FROM Produto p
        LEFT JOIN estoque e 
        ON p.id = e.id_produto
        WHERE p.categoria = ?
        GROUP BY p.id
        ";
    $stmt = mysqli_prepare($conn, $comando);

    
    if (!$stmt) {
        die("Erro ao preparar: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $categoria); 

   
    mysqli_stmt_execute($stmt);

    // Obtém o resultado
    $resultado = mysqli_stmt_get_result($stmt);

   
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Retorna os dados
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

public function inserirProduto($categoria) {
        $conn = Conexao::conectar();
        $comando = "
       
        ";
    $stmt = mysqli_prepare($conn, $comando);

    
    if (!$stmt) {
        die("Erro ao preparar: " . mysqli_error($conn));
    }
    mysqli_stmt_bind_param($stmt, "s", $categoria); 

   
    mysqli_stmt_execute($stmt);

    // Obtém o resultado
    $resultado = mysqli_stmt_get_result($stmt);

   
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Retorna os dados
    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
};
?>