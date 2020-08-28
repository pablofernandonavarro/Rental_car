<?php
//This script compress the html for improve google page speed
function sanitize_output($buffer)
{
    $search = array(
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        '/(\s)+/s'  // shorten multiple whitespace sequences
        );
    $replace = array(
        '>',
        '<',
        '\\1'
        );
  $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?></title>
    <meta name="description" content="<?php echo $pageDescription ?>">
    <meta name="keywords" content="<?php echo $pageKeywords ?>">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
    <link rel="stylesheet" href="assets/css/styles.css?1.1">
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53673041-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>
<body>
    <div class="sticky__header">
        <div class="container">
            +54 261 4233543 / +54 261 155369809 info@mendozarental.com
        </div>
    </div>
    <div id="main" class="main">
        <header id="header" class="header">
            <div class="padded">
                <div class="row">
                    <div class="col-sm-4 col-xs-12 ">
                        <a href="/" id="logo" class="logo">Mendoza Rental Service</a>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <h1>Alquiler de Autos en Mendoza</h1>
                    </div>
                </div>  
            </div>