<?php
include 'conexao.php';
class DaoLogin
{
    public function fazerlogin($email)
    {
        $conn = Conexao::conectar();
        $command = "select * from usuario where email = ?";
        $stmt = mysqli_prepare($conn, $command);
        if (!$stmt) {
            die("Erro ao preparar: " . mysqli_error($conn));
        }
        mysqli_stmt_bind_param($stmt, "s", $email);


        mysqli_stmt_execute($stmt);
        $resultado = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    }
};
?>
