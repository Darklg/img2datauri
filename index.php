<?php
$poids_maximal_img = 50*1024;
$content_dir = dirname(__FILE__).'/upload/';
include dirname(__FILE__).'/inc/upload.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title>IMG.2.DATA:URI</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
		<h1>IMG.2.DATA:URI</h1>
        <?php echo $retour; ?>
        <form method="post" enctype="multipart/form-data" action="">
            <p>
                <label>Selecteur : <input type="text" name="selecteur" size="30" value=".maclass" /></label><br />
                <input type="file" name="fichier" size="30" /><br />
                <input type="submit" name="upload" value="Uploader" />
            </p>
        </form>
    </body>
</html>


