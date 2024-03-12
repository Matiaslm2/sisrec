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
$table->setTitle("Requiições de Salas");

//select the table in the datebase
$table->prepareTable("RequisicoesSalas");
//SELECT `Data`, `Processo`, `NumRequisicao` FROM `RequisicoesSalas` WHERE 1
//list of fields for list, new, edit and import records
$table->setFieldsAtive("id, Data, Processo, NumRequisicao",'list');
$table->setFieldsAtive("Data, Processo, NumRequisicao", 'new');
$table->setFieldsAtive("Data, Processo, NumRequisicao", 'edit');
$table->setFieldsAtive("Data, Processo, NumRequisicao", 'csv');

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
