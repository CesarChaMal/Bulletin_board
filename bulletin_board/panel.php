<? 
error_reporting(0);
include("cabecera.php"); 
?>
<!-- incluyo la cabecera -->
<!-- del contenido -->

<form id="frm" name="frm" >

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
        <td colspan="2">
            <?

            // Get the file
            $file = implode('', file ("post.xml"));
            $post = $_POST["post"];
            $page = $_GET["page"];
            //$user = $_SESSION['user'];
            
            ?>

            <p align="center"> <b>Bulletin Board </b><br/><a href=postmessage.php?post=yes&type=post><b>Post a Message</b></a><br>
            
            <?
            
            // Check if request is a post or not
            if ($post == "yes")
            {
            print "
            <p>
            <b>Attention!</b> All html tags will be removed<br>
            </p>
            <form action=post.php method=post>
            <input type=hidden name=post value=yes>
            <p>
            Name<br>
            <input type=text name=name size=30>
            </p>
            <p>
            Message<br>
            <textarea name=message rows=5 cols=50></textarea>
            </p>
            <p>
            <input type=reset value=Reset>
            <input type=submit value=Post>
            </p>
            </form>";
            }
            else
            {


            // Max amount of posts on one page
            $posts = 15;

            // Count the number of posts
            //$foo = preg_split ("<.*ponmurt.*>", $file);
            $foo = preg_split ("<ponmurt.*>", $file, -1);
            $count = count($foo);
            $posts = ( $posts * 2);
            $pages = round($count / $posts) + 1;

            // Write the required page numbers
            $i = $pages;
            print "<p>";
            if ( $count > $posts) {
                print "page ";
                while ( $i > 0) {
                    if ( $page == "") {
                        $page = $pages;
                    }
                    if ( $page == $i) {
                        print " <b><font size = \"3\">$i</b></font> ";
                    }
                    else {
                        print "<a href=panel.php?page=$i> $i </a>";
                    }
                    --$i;
                }
            }
            print "<hr ALIGN=CENTER WIDTH=100% style='border: 0.5px solid #CCCCCC;height: 0px;'>";
            print "<br/></p>";


            // Always begin at the last page
            if ( $page == "") {
                $from = $count;
                $to = ( $count - $posts);
                while ( $from > $to) {
                    $post = $foo[$from];
                    print "$post";
                    $from--;
                }
            }

            else {
                $counter = $pages - $page + 1;
                $from = ($count - (($counter-1) * $posts));
                $to = ($count - (($counter)  * $posts));
                while ($from > $to) {
                    $post = $foo[$from];
                    print "$post";
                    $from--;
                }
            }

            // Write the required page numbers
            $i = $pages;
            print "<hr ALIGN=CENTER WIDTH=90% style='border: 0.5px solid #CCCCCC;height: 0px;'>";
            print "<p>";
            if ( $count > $posts) {
                print "page ";
                while ( $i > 0) {
                    if ( $page == "") {
                        $page = $pages;
                    }
                    if ( $page == $i) {
                        print " <b><font size = \"3\">$i</b></font> ";
                    }
                    else {
                        print "<a href=panel.php?page=$i class =\"orangeLink\"> $i </a>";
                    }
                    --$i;
                }
            }
                print "</p>";
            }
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
</form>
<!-- fin del contenido -->
<!-- incluyo la el pie -->
<? include("pie.php");?>
