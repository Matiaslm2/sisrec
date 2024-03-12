<?php
//@session_start();
ini_set("error_reporting", E_ALL);

require __DIR__ . '/../config.php';
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\db\Database;
use classes\db\TableBD;


//Create an object 
$table= new TableBD();

//Set the path for the html template
$table->setTemplate(_CAMINHO_ADMIN . "tabela.html");
//Set title of the list
$table->setTitle("Lista de Requisiçoes");

//select the table in the datebase
$table->prepareTable("ListaRequisicao");
//list of fields for list, new, edit and import records
//SELECT `Estado`, `NumRequisicao`, `CodLivro`, `NumListaRequisicao` FROM `ListaRequisicao` WHERE 1
$table->setFieldsAtive("id, Estado, NumRequisicao, CodLivro, NumListaRequisicao",'list');
$table->setFieldsAtive("Estado, NumRequisicao, CodLivro, NumListaRequisicao", 'new');
$table->setFieldsAtive("Estado, NumRequisicao, CodLivro, NumListaRequisicao", 'edit');
$table->setFieldsAtive("Estado, NumRequisicao, CodLivro, NumListaRequisicao", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
$table->setFieldList("idCat",1," SELECT `Nome`, `CodAutor` FROM `Autor` ORDER BY `autor`");
//$table->setFieldList("active",2,"1=>Active,0=>Inactive");

//the fiekd to be present as an image
$table->setImageField("imagens","../",30);

//Link each record on the listo to external page passing the key value
//$table->setLinkPage("/public/perfil.php");

//Labels for fields
//$table->setLabel('userID',"Process");
//$table->setLabel('name',"Full Name");
//$table->setLabel('passw',"Password");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
//$table->setCriterio("type='Admin'");

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>