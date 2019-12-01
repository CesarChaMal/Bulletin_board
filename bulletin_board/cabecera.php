<?
error_reporting(0);
include_once("includes/classlib.php");
include_once("includes/datoscon.php");
$con= new dbconexion(database,host,user,pass);
if(!$con)
{
    Application::message('Conexion Fállida.');
}
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="includes/classlib/ajax.js"> </script>
<script src="includes/classlib/text-utils.js"> </script>  
<title>.:: Administraci&oacute;n ::.</title>
</head>
<body topmargin="0">
