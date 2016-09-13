<?php

/**
 * Created by PhpStorm.
 * User: r4m1r
 * Date: 7/09/2016
 * Time: 7:54 AM
 */
class clsConexion
{
	function conectardb(){
		$user ="root";
		$pass="";
		$server="localhost";
		$db="ventas";
		$con=mysqli_connect($server,$user,$pass) or die("Error al conectar la base de datos". mysql_error());
		mysql_select_db($db,$con);
		return $con;
	}
}
