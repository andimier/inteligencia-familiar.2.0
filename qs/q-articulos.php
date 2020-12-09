<?php
    $mensaje = "No se encontraron artículos en este módulo";
    $mainArticle = '';
    $allArticles = '';

    function stripUnwantedElements($string) {
        return strip_tags($string, '<br>');
    }

    function decodeTextoString($string) {
        $replaced = str_replace(['â€œ', 'â€', 'Ãš'], '"', $string);

        return utf8_decode($replaced);
    }

    function decodeAllArticlesTextString($string) {
        $characters = [
            'Ã¡' => 'á', 'Ã©' => 'é', 'Ã*' => 'í', 'Ã³' => 'ó', 'Ãº' => 'ú', 'Ã' => 'Á', 'Ã‰' => 'É', 'Ã' => 'Í',
            'Ã“' => 'Ó', 'Ãš' => 'Ú', 'Ã±' => 'ñ', 'Í±' => 'ñ', 'Ã‘' => 'Ñ', 'Âº' => 'º', 'Âª' => 'ª', 'Â¿' => '¿',
            'â€œ' => '"', 'â€' => '"', 'Ãš' => '"'
        ];

        $replaced = str_replace(array_keys($characters), array_values($characters), $string);

        return $replaced;
    }

    function getMainArticle($connection, $id, $isSetArticleId) {
        global $mensaje;
        $mainArticle = [];

        if ($isSetArticleId) {
            $q_articulos = "SELECT * FROM articulos WHERE id = " . $id . " ORDER BY fecha DESC LIMIT 1";
        } else {
            $q_articulos = "SELECT * FROM articulos WHERE contenido_id = " . $id . " ORDER BY fecha DESC LIMIT 1";
        }

        $r_articulos = (mysql_query($q_articulos, $connection));

        if (mysql_num_rows($r_articulos) > 0) {
            $mensaje = "";
            $response = mysql_fetch_array($r_articulos);
            //print("<pre>" . print_r($response, true) . "</pre>");

            $mainArticle['title'] = decodeAllArticlesTextString($response['titulo']);
            $mainArticle['date'] = $response['fecha'];
            $mainArticle['image'] = $response['imagen2'];
            
            $articleContent = stripUnwantedElements($response['contenido']);
            $mainArticle['content'] = decodeAllArticlesTextString($articleContent);

            return $mainArticle;
        } else {
            echo 'No se obtuvieron artículos';
        }
    }

    function getAllArticles($connection, $id) {
        $q_articulos = "SELECT * FROM articulos WHERE contenido_id = " . $id . " ORDER BY fecha DESC";
        return mysql_query($q_articulos, $connection);
    }

    function getSectionArticleId($connection, $id_contenido) {
        $section = [];
        $q_section = "SELECT id, titulo FROM contenidos WHERE id = " . $id_contenido;
        $r_section = mysql_query($q_section, $connection);

        $response = mysql_fetch_array($r_section);
        $section['id'] = $response['id'];
        $section['title'] = $response['titulo'];

        return $section;
    }

    $isSetArticleId = isset($articulo_id);
    $article_id = isset($articulo_id) ? $articulo_id : $id_contenido;
    $id_modulo = getSectionArticleId($connection, $id_contenido)['id'];
    $titulo_modulo = getSectionArticleId($connection, $id_contenido)['title'];
    $mainArticle = getMainArticle($connection, $article_id, $isSetArticleId);
    $allArticles = getAllArticles($connection, $id_modulo);
?>



