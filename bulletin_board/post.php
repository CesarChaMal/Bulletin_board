<?

// Name and Message required
$name = $_POST["name"];
$message = $_POST["message"];

if (( $name== "") || (  $message== "")) {
    print "<p align=center>Please go back to complete all fields!<p>";
}
else {

//Get the file
$file_name = "post.xml";
$file_pointer = fopen($file_name, "r+");
$lock = flock($file_pointer, LOCK_EX);
$file_read = fread($file_pointer, filesize($file_name));

//$name = strip_tags($name, '');
//$message = strip_tags($message, '');

$date = date ("j M Y");
$post = "\n\n<ponmurt>\n\t<p><span class=name>$name</span><span class=date> $date</span><br>$message</p>\n</ponmurt>";

//Paste the updated info into the file
$post = stripslashes($post);
fwrite($file_pointer, "$post");
fclose($file_pointer);

print "<head><meta http-equiv=refresh content=0;URL=panel.php></head>";
}

?>
