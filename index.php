<?php
require_once "assets/lib/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;

$md5_scss = md5_file("assets/sass/main.scss");
$md5_data = file_get_contents("assets/data/main_md5", FILE_USE_INCLUDE_PATH);

if ($md5_scss != $md5_data) {
	$scss = new Compiler();
	$scss->setImportPaths('assets/sass/');
	$css = $scss->compile('@import "main.scss";');

	$file_css = fopen("assets/css/main.css", "w");
	$file_data = fopen("assets/data/main_md5", "w");
	fwrite($file_css, $css);
    fwrite($file_data, $md5_scss);
    //echo 'Compile ok';
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
    <div id="dialog-majeur" title="Aites vous majeur ?">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Vous devez avoir au moins 18 ans pour consulté ce site</p>
    </div>



    <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="assets/js/popper-1.14.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>

    </body>
</html>