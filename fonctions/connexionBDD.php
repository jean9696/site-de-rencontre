<?php 
	try
	{
		if($_SERVER['SERVER_NAME'] == 'localhost')
		{
			$bdd = new PDO('mysql:host=localhost;dbname=30_nuances_de_mecs', 'root', '');
		}			
		elseif($_SERVER['SERVER_NAME'] == '30nuancesdemecs.net63.net')
		{
			$bdd = new PDO('mysql:host=mysql1.000webhost.com;dbname=a6804988_nuances', 'a6804988_nuances', 'azerty1234');	
		}
		else
		{
			throw new Exception('Oula comment tu as eu ce site toi ?');
		}
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>