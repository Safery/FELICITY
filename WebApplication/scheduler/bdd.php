<?php
try
{
	$bdd = new PDO('mysql:host=jannatulferdous.ca;dbname=janingpo_lisakun;charset=utf8', 'janingpo_lina', 'safery123');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
