<?php
$f = fopen('Server/ONVIF/Requst/Requsting.txt', 'w');
file_put_contents('Requsting.txt', '');
fclose($f);
?>

<?
if(isset($_REQUEST['connect_cam'])){
$f1 = fopen('Server/ONVIF/Requst/Index.txt', 'w');
file_put_contents('Index.txt', 'w');
fclose($f1);
$index_select = htmlspecialchars($_GET['selected_camera11']);
$indexS = fopen("Server/ONVIF/Requst/Index.txt", "a");
fwrite($indexS, $index_select);fclose($indexS); 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Camera</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/add_camera.css">
	<link rel="stylesheet" type="text/css" href="Styles/add_camera1.css">
	<link rel="stylesheet" type="text/css" href="Styles/add_camera2.css">
	<link rel="stylesheet" type="text/css" href="Styles/fff_1.css">
	<link rel="stylesheet" type="text/css" href="Styles/button.css">
		<link rel="stylesheet" type="text/css" href="css/Text_f1.css">
		<link rel="stylesheet" type="text/css" href="css/Text_f2.css">
</head>

<body>
<div id="footer"> 
<a href="settings.php"><img src="Images/menu2.png" width="50px" height="50px"></a><strong id ="text">SETTINGS</strong>
<img src="Images/logo_white.png" width="150px" height="50px" id="logo">

</div><br>






<div id="panel"><strong id="Glav1">Sources</strong><br>
<strong id="text_f11">IP/DDNS</strong><strong id="text_f1">DEVICE TYPE</strong><strong id="text_f1">PORT</strong><strong id="text_f1">STREAM URL</strong><br><br>
<?php
$Index_source_selected =fopen('Server/ONVIF/Requst/index.txt',"r");
while (!feof($Index_source_selected)) {
	$index_release = fgets($Index_source_selected, 5000);
	
}

$data_full_static = file("Server/ONVIF/Requst/Data.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES );
foreach ($data_full_static as $data_info ) {
	echo "<a id="."universal"." "."class="."Camera"." "."href="."javascript:void(0);"." ".">".$data_info."</a><br>";
}



//echo "<a id="."universal"." "."class="."Camera"." "."href="."javascript:void(0);"." ".">".$Data_checker[$f]."</strong></a>";


if (isset($_REQUEST['submitData']))
{
exec("Server\ONVIF\IQ_SERVER.exe");
$arr=str_split(iconv('Windows-1251', 'UTF-8', file_get_contents('Server/ONVIF/Requst/source_selected.txt')));


$data = fopen("Server/ONVIF/Requst/Data.txt", "a"); // Открываем файл в режиме записи

for($i=7;$i<count($arr);$i++){
	if($arr[$i] == ":"){
	$i = count($arr);
	}else{
	echo "<strong id="."universal".">".($arr[$i])."</strong>";
	fwrite($data,$arr[$i]);
	}
}
fwrite($data, " IPC 8899 ");
echo  "<strong id="."universal".">IPC</strong>";
echo  "<strong id="."universal".">8899</strong>";
$fp11 = fopen("Server/ONVIF/Requst/source_selected.txt", "r"); 

while (!feof($fp11))
{
$mytext = fgets($fp11, 999);
$Stream_URL = $mytext;
echo  "<strong id="."universal".">".$Stream_URL."</strong>";
fwrite($data, $Stream_URL);
}
fclose($fp11);
fwrite($data, "\n");
fclose($data);
}


///////////////////////////////////////////////////////////////
if(isset($_POST['Add_Cam'])){
$ip = htmlspecialchars($_POST['ip']);
$user = htmlspecialchars($_POST['user']);
$pass = htmlspecialchars($_POST['password']);
$port = htmlspecialchars($_POST['port']);

$link=$ip.":".$port." ".$user." ".$pass." ";	
echo "<a id="."universal"." "."class="."Camera"." "."href="."javascript:void(0);"." ".">".$link."</a><br>";

}




?>
<script type="text/javascript">
function myFunction(){
let camera_s = document.getElementsByClassName("Camera");
let index = '<?php echo $index_release; ?>';
camera_s[index].style.color ="green";
}

</script>

</div>

<div id="camera_info">
<form   method="post">
<strong>IP ADRESS*</strong><input  id ="text_f"type="text" name="ip"><br>
<strong>USER*</strong><input  id ="text_f"type="text" name="user"><br>
<strong>PASSWORD*</strong><input  id ="text_f"type="text" name="password"><br>
<strong >PORT*</strong><input  id ="text_f" type="text" name="port"><br>
<input  type="submit"  name="Add_Cam" value="ADD CAMERA" id="button_1" ><br>
</form>


 <form >
<input id="button_1" type="submit" name="submitData" value="FIND STREAM" />
</form>
<br><br>
<form>
	<strong >SELECT CAMERA</strong><input  placeholder="INDEX" id ="text_f" type="text" name="selected_camera11">
<input  type="submit"  name="connect_cam" value=" CONNECT " id="button_1" onclick="myFunction()"/><br>





</form>
</div>
</body>
</html>






