<? require_once("includes/connection.php");

$q_prueba = "SELECT * FROM contenidos WHERE id = 1 LIMIT 1";
$result = mysql_query($q_prueba, $connection);


while($contenido = mysql_fetch_array($result)){
	$cont[] = $contenido['contenido'];	
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Formu casi</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="javascript">

/*var oDoc, sDefTxt;
 
function initDoc() {
  oDoc = document.getElementById("news");
  sDefTxt = oDoc.innerHTML;
  document.andi.switchMode.checked;
}*/
 
function formatDoc(sCmd, sValue) {
 document.execCommand(sCmd, false, sValue);
}

function qFormato(sCmd, sValue) {
 document.execCommand(sCmd, false, sValue);
 document.execCommand('backColor', false, '#FFFFFF');
}
 
function submit_form(){
	
	var theForm = document.getElementById("andi");
	var MyDiv1 = document.getElementById('news');
    var contenido = MyDiv1.innerHTML;
	
	theForm.elements["myTextArea"].value = contenido;
	theForm.submit();
}
</script>
<style>
#news {
  width: 540px;
  height: 200px;
  border: 1px #000000 solid;
  padding: 12px;
  overflow: scroll;
}
</style>
</head>
<body>
<form action="sample.php" name="andi" id="andi" method="post">
<input type="button" id="bold_text" name="bold_text" onClick="formatDoc('bold');" value="B">
<input type="button" id="rFormato" name="rFormato" onClick="qFormato('removeFormat');" value="quitar formato">
<textarea style="display:none;" name="myTextArea" id="myTextArea" cols="100" rows="14"></textarea>
<div id="news" contenteditable="true"><? echo $cont[0]; ?> </div>
<br /><br /><input name="myBtn" type="button" value="Submit Data" onClick="javascript:submit_form();"/>
</form>
</body>
</html>