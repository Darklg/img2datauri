<?php
include dirname(__FILE__) . '/inc/config.php';
include dirname(__FILE__) . '/inc/traitement.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo IMG2_NAME; ?></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <h1><?php echo IMG2_NAME; ?></h1>
        <?php echo $retour; ?>
        <form method="post" enctype="multipart/form-data" action="" id="form">
            <div>
                <label>
                    Selecteur :
                    <input type="text" name="selecteur" size="30" value=".maclass" />
                </label>
				<hr class="clear" />
                <input type="file" name="fichier" size="30" /><br />
                <label>
                    URL :
                    <input type="text" name="url" value="" id="url">
                </label>
				<hr class="clear" />
				<label>Compatibilité IE</label>
                <ul>
				    <li><label><input type="radio" value="0" name="active_ie" /> Non </label></li>
				    <li><label><input type="radio" value="1" name="active_ie" checked="checked" /> Oui (sale) </label></li>
				    <li><label><input type="radio" value="2" name="active_ie" /> Oui (propre) </label></li>
				</ul>
                    
                </label>
                <input type="submit" name="upload" value="Uploader" />
            </div>
        </form>
        <a href="https://github.com/Darklg/img2datauri" target="_blank" style="position:fixed;top:0;right:0;"><img src="img/fork-me.png" width="149" height="149" alt="Fork Me" /></a>
    </body>
</html>


