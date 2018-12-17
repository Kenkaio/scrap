<?php

function dbConnect()
{
	try
	{
	    /* $db = new PDO('mysql:host=localhost;dbname=scrapmonique;charset=utf8', 'root', ''); */
        $db = new PDO('mysql:host=db761051409.hosting-data.io;dbname=db761051409;charset=utf8', 'dbo761051409', 'amelie33');
		return $db;
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
}
