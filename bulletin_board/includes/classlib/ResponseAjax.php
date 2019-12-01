<?php
//session_start();
error_reporting(0);
//error_reporting(2047);

include_once("dbconexion.php");
include_once("System.php");
include_once("mydatetime.php");
include_once("../datoscon.php");

$conexion = new dbconexion(database,host,user,pass);

 if($_GET['ajax']==1){
     $user_old=$_POST['user_old'];
     $pass_old=$_POST['pass_old'];
     $user_new=$_POST['user_new'];
     $pass_new=$_POST['pass_new'];
     
     $rs = new ResultSet();
     //$qry = "select * from tbl_usuario where username='".$user_old."' and password='".md5($pass_old)."'";
     $qry = "select * from tbl_usuario where username='".$user_old."' and password='$pass_old'";
     $rs = $conexion->executeQuery($qry);
     $tempuser = $rs->get('username');
     if($tempuser != ""){
         //$query="update tbl_usuario set password='".md5($pass_new)."' where username='$user_new'";
         $query = "update tbl_usuario set password='$pass_new' where username='$user_new'";
         $conexion->BeginTransaction();
         if($conexion->executeUpdate($query)){
             echo "Actualizacion finalizada.";
             $conexion->EndTransaction();     
         }else{
             $conexion->RollBack();
             echo "Ocurrio un error al actualizar. Intente de nuevo";
         }
     }else{
        echo "Los datos del usuario anterior no son correctos.";
     }     
 }



