<? include("cabecera.php"); ?>
<style type="text/css">
td {font-family: arial; font-size: 11px}
p {font-family: arial; font-size: 11px}
a {color: #000000;text-decoration: none}
a:active {color: #000000; text-decoration: none}
a:visited {color: #000000; text-decoration: none}
a:hover {color: #e60909; text-decoration: none}

.date {color: #888888}
.name {color: #000000; font-weight: bold}
</style>

<center>


<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

  <tr id="barra_vacia_dos">
    <td>&nbsp;</td>
  </tr>

  <tr id="barra_menu">
    <td class="lineHorizontal">
        <img src="./images/configuracion.gif" border="0" /><a href="configuracion.php" class="styleMain"> &nbsp;&nbsp;Configuracion</a>&nbsp;|&nbsp;
        <img src="./images/cerrar_s_1.gif" border="0" /><a href="index.php?logout=true" class="styleMain">&nbsp;&nbsp;Cerrar Sesion</a></td>
  </tr>

  <tr>
    <td id="barra_vacia">&nbsp;</td>
  </tr>

  <tr>
    <td>

    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
             
      <tr>
        <td colspan="2" class="lineHorizontal"><div id="div_result" align="right"><span class="styleNBG" id="message">&nbsp;</span></div></td>
      </tr>
    
      <tr>
        <td colspan="2" align="center">


        <br/>
        <?php

        // Get the file
        $file = implode('', file ("post.xml"));
        $type = $_GET["type"];  

        print "
        <p>
        <b>Attention!</b> All html tags will be removed<br>
        </p>
        <form action=post.php method=post>
        <input type=hidden name=post value=yes>
        <input type=hidden name=type value=$type>
        <p>
        Heading<br>
        <input type=text name=name size=30>
        </p>
        <p>
        Message<br>
        <textarea name=message rows=5 cols=50></textarea>
        </p>
        <p>
        <input class='btnText' type=submit value=\":: Post Message ::\">
        <input class='btnText' type=reset value=\":: Reset ::\">
        </p>
        </form>";

        
        ?>
        
       
        
        </td>
      </tr>

      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
    
    
    





    </td>
  </tr>
</table>


</center>
<? include("pie.php");?>
