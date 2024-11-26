<?php
session_start();
$rgm = $_SESSION['rgm'];

require("dao.php");
$sql = "delete from alunos where rgm = $rgm";
$con = conectar('localhost','root','','backend');
mysqli_query($con,$sql) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0){
    echo "Aluno excluído com sucesso!";
}else
    echo "Aluno não Excluído!";


    echo '<br>';
    echo '<a href="informaRGMpExcluir.php"> Voltar a tela de Exclusão </a>'.'<br><br>';
    echo '<a href="index.php"> Voltar Ao Menu </a>';


?>