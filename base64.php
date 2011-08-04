<?php
$content_dir = dirname(__FILE__).'/upload/';
include dirname(__FILE__).'/inc/upload.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>untitled</title>
    </head>
    <body>
        <?php echo $retour; ?>
        <form method="post" enctype="multipart/form-data" action="">
            <p>
                <label>Selecteur : <input type="text" name="selecteur" size="30" /></label><br />
                <input type="file" name="fichier" size="30" /><br />
                <input type="submit" name="upload" value="Uploader" />
            </p>
        </form>
    </body>
</html>


