<?php
session_start();

$rgm = filter_input(INPUT_GET,'rgm',FILTER_SANITIZE_NUMBER_INT);
$_SESSION['rgm'] = $rgm;

require("dao.php");
$con = conectar('localhost','root','','backend');
mysqli_set_charset($con,"utf8");
$sql = "select * from alunos where rgm=$rgm";
$consulta = mysqli_query($con,$sql) or die(mysqli_error($con));
$registros = mysqli_num_rows($consulta);
if($registros > 0){
    echo "<h1> Exclusão de Dados";
    echo "<br><h3> Seguem os dados do RGM: $rgm </h3>";
    while($reg_consulta = mysqli_fetch_array($consulta)){
        echo 'Nome : '.$reg_consulta['nome'].'<br>';
        echo 'Telefone : '.$reg_consulta['telefone'].'<br>';
        echo ''
    }
}

?>