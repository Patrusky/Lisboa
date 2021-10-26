<?php 
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT'] . "/lisboa_bd_clase/config/global.php";
require_once($global);
comprobar_sesion();
require (ROOT . "/controller/tagsController.php");
require (ROOT . "/parts/headSinMd.php") ?>

<title>Artículos con el tag:
  <?php echo $idTag; ?> en Lisboa.com
</title>
<meta name="description" content="Artículos con el tag:
  <?php echo $idTag; ?> en Lisboa.com">

  </head>
  <body>    
<?php require (ROOT . "/model/tagsModel.php") ?>

