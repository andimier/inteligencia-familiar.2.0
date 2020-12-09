<div class="contenedor">
    <div class="contenidos">
        <div class="contenedorcontenidos">
            <div class="etiquetanegra1">
                + artículos en:&nbsp; <?php echo $titulo_modulo; ?>&nbsp;
            </div>
            <br />
            <br />

            <?php if(!empty($allArticles)): ?>
                <?php while($articulos = (mysql_fetch_array($allArticles))): ?>
                    <?php
                        // BUSQUEDA DE TEXTO = TOMADO DE ....
                        $inicio = 0;
                        $cadena = substr($articulos['contenido'],0,30);
                        $boom = explode(" ", $cadena);
                        $quees = $boom[0];

                        if ($quees == 'Tomado') {
                            $inicio = 70;
                        } else {
                            $inicio = 0;
                        }
                    ?>

                    <div class="cnt_mascontenidos">
                        <div class="marconegromini">
                            <?php if(empty($articulos['imagen1'])): ?>
                                <?php // ?>
                            <?php else: ?>
                                <a href="articulo.php?articulo=<?php echo $articulos['id']; ?>&contenido=<?php echo $articulos['contenido_id']; ?>">
                                    <img src="cms/<?php echo $articulos['imagen1']; ?>"  width="100"/>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="txt_mascontenidos">
                            <div class="titulosnegrosminusculas">
                                <a href="articulo.php?articulo=<?php echo $articulos['id']; ?>&contenido=<?php echo $articulos['contenido_id']; ?>">
                                    <?php echo decodeAllArticlesTextString($articulos['titulo']); ?>
                                </a>
                            </div>

                            <div class="titulosminusculasgrises">
                                <?php echo $articulos['fecha']; ?>
                            </div>

                            <div class="textos4">
                                <?php
                                    $formatedString = stripUnwantedElements($articulos['contenido']);
                                    $subString = substr($formatedString, 0, 200);

                                    echo decodeAllArticlesTextString($subString) . ".....";
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <?php echo $mensaje; ?>
            <?php endif; ?>
        </div>
        <div class="vacio"></div>
    </div>
</div>


