<?php
require "../ligacao.php";
//print_r($_POST);
$processo=$_REQUEST["Processo"];$CodLivro=$_REQUEST["CodLivro"];
$sql = "INSERT INTO `ListaRequisicao`(`Processo`, `CodLivro`) VALUES (?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("is", $processo, $CodLivro);
if ($stmt->execute() === TRUE) {
  $last_id = $conn->insert_id;
  echo "O novo registo foi atualizado com o id: $last_id";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//header("Location: tabelaBase.php");
//echo $last_id;
?>
