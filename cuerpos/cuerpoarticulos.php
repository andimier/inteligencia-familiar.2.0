<div class="contenedor">
    <div class="contenidos">
        <div class="contenedorcontenidos">
            <div class="titulosnegros">ARTíCULOS - INTELIGENCIA FAMILIAR </div>
            <div class="titulosamarillosmedianos">
                <?php echo $mainArticle['title']; ?>
            </div>
            <br />
        </div>
    </div>
</div>

<div class="contenedor">
    <div class="contenidos">
        <div class="contenedorcontenidos">
            <div class="barraamarilla">
                <div class="titulosblancosgrandes">
                    <?php echo $mainArticle['title']; ?> <?php echo $mensaje; ?>
                </div>
            </div>
            
            <div class="barranegrafechas">
                <div class="fechasblancas">&nbsp;fecha &nbsp;&nbsp;<?php echo $mainArticle['date'] ;?></div>
            </div>
            
            <div class="textosarticulos">
                <?php echo $mainArticle['content'] ;?>
            </div>
            
            <!--  IMAGEN PRINCIPAL DEL ARTICULO  -->
            <div class="colgajoarticulos">
                <div id="ganchoarticulos"></div>
                <div id="imagencolgajoarticulos">
                    <img src="cms/<?php echo $mainArticle['image'];?>" width="250" />
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
</div>