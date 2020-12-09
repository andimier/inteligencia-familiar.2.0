<form enctype="multipart/form-data" name="formularioedicion1" id="formularioedicion1" method="post">

<input type="hidden" name="id"     value="<?php echo $id;?>"/>
<input type="hidden" name="tabla"  value="<?php echo $tabla;?>"/>

Fecha:<br />
<input name="fecha" type="text" id="titulo" value="<?php echo $fecha ?>" size="50" maxlength="50" />
<br />
<br />

Titulo:
<br />
<input name="titulo" type="text" id="titulo" value="<?php echo $titulo; ?>" size="50" maxlength="50" />
<br />
<br />
Contenido:
<br /><br />
<img class="intLink" title="Quitar Formato" onClick="qFormato('removeFormat');" src="edicion/iconos/formato1.png">
<img class="intLink" title="Sangria"  onClick="formatDoc('indent');"   src="edicion/iconos/sangria1.png" />
<img class="intLink" title="Sangria"  onClick="formatDoc('outdent');"   src="edicion/iconos/sangria2.png" />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img class="intLink" title="Negrilla" onClick="formatDoc('bold');"     src="edicion/iconos/bold.png" />

<img class="intLink" title="Enlazar"  onClick="linkear('createLink');" src="edicion/iconos/link.png" />
<img class="intLink" title="Desenlazar"  onClick="formatDoc('unlink');" src="edicion/iconos/unlink.png" />

<img class="intLink" title="Lista"  onClick="formatDoc('insertUnorderedList');" src="edicion/iconos/bullets.png" />
<!--<img class="intLink" title="Lista"  onClick="formatDoc('insertOrderedList');"   src="edicion/iconos/numeros.png" />-->

<img class="intLink" title="Subrayar"  onClick="formatDoc('underline');"   src="edicion/iconos/underline.png" />



<p id="editMode"><input type="checkbox" name="switchMode" id="switchBox" onChange="setDocMode(this.checked);" /> <label for="switchBox">ver en HTML</label></p>

<!--
<input type="button" id="rFormato"  name="rFormato"  onClick="qFormato('removeFormat');"  value="quitar formato">
<input type="button" id="bold_text" name="bold_text" onClick="formatDoc('bold');"         value="Negrilla">
<input type="button" id="iLink"     name="iLink"    onClick="linkear('createLink');"     value="enlazar">
<input type="button" id="unlink"    name="unlink"   onClick="formatDoc('unlink');"       value="desenlazar">
<input type="button" id="subrayar"  name="sub"      onClick="formatDoc('underline');"    value="subrayar">
<input type="button" id="subrayar"  name="lista"    onClick="formatDoc('insertUnorderedList');"    value="lista">
-->

<textarea style="display:none;" name="areadetexto" id="areadetexto" cols="100" rows="14"></textarea>
<div id="cajaediciontextos" contenteditable="true"><?php echo $contenido; ?></div> 
<br />

<input type="button" name="boton1" id="boton1" value="Guardar" onClick="javascript:submit_form();"/> 
</form>

