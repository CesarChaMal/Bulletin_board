<? include("cabecera.php"); ?>
<!-- incluyo la cabecera -->
<!-- del contenido -->
<script>
miconfig = function(){}

miconfig.trim = function(string){
      return string.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

/* Ajax Actualizacion de Datos de Acceso */
miconfig.acceso = function(campo){
   //alert(campo.value);
    var user_old=document.getElementById('txt_usuario_old').value
    var pass_old=document.getElementById('txt_password_old').value
    var user_new=document.getElementById('txt_usuario_new').value
    var pass_new=document.getElementById('txt_password_new').value
    
    //alert(user_old);
    //alert(user_new);
    //alert(pass_old);
    //alert(pass_new);
    
     var url="includes/classlib/ResponseAjax.php?ajax=1"; 
     url = url + "&dummy=" + new Date().getTime();  
     request.open("POST", url, true);
     request.onreadystatechange = miconfig.updateaccesoAjax;
     request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     request.send("user_old=" + escape(user_old) + "&pass_old=" + escape(pass_old) + "&user_new=" + escape(user_new) + "&pass_new=" + escape(pass_new));        
}

miconfig.updateaccesoAjax=function()
{
    if (request.readyState == 4){
        if (request.status == 200) {               
             var dataAcceso = request.responseText;
             alert(dataAcceso);
         }
     }
}

/* Ajax Actualizacion de Datos de Acceso */


</script>

<form name="frm" method="post">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="lineHorizontal">
    <img src="./images/configuracion.gif" border="0" /><a href="configuracion.php" class="styleMain"> &nbsp;&nbsp;Configuracion</a>&nbsp;|&nbsp;
    <img src="./images/cerrar_s_1.gif" border="0" /><a href="index.php?logout=true" class="styleMain">&nbsp;&nbsp;Cerrar Sesion</a></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td class="lineHorizontal"><span class="styleNBLM">Configuraciones</span></td>
  </tr>
  <tr>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="50%" valign="top">
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td class="lineHorizontal"><span class="styleNBLM">&nbsp;.:. Configuracion de Acceso</span></td>
          </tr>
          <tr>
            <td class="lineVerticalA lineHorizontal"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2" class="lineHorizontal"><span class="styleContent">.:. Actualizar datos de usuario.</span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="3">
                  <tr>
                    <td width="10%"><span class="styleContent">Usuario :</span></td>
                    <td width="20%"><input name="txt_usuario_old" type="text" class="boxText" id="txt_usuario_old" size="30" /></td>
                    <td width="12%"><span class="styleContent">Usuario :</span></td>
                    <td width="18%"><input name="txt_usuario_new" type="text" class="boxText" id="txt_usuario_new" size="30" /></td>
                    <td rowspan="2" width="40%" valign="bottom"><label>
                    <input name="btn_actualiza" type="button" class="btnText" id="btn_actualiza" value=":: Actualizar" onclick="miconfig.acceso(this);" />
                    </label></td>
                  </tr>
                  <tr>
                    <td><span class="styleContent">Password viejo :</span></td>
                    <td><label>
                      <input name="txt_password_old" type="password" class="boxText" id="txt_password_old" size="30" />
                      </label>                    </td>
                    <td><span class="styleContent">Password  Nuevo :</span></td>
                    <td><input name="txt_password_new" type="password" class="boxText" id="txt_password_new" size="30" /></td>
                  </tr>
                </table>                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>            </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>

    </table>
    </td>

  </tr>
</table>
</form>
<!-- fin del contenido -->
<!-- incluyo la el pie -->
<? include("pie.php");?>
