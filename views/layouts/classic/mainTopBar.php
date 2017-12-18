<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAssetClassicTopBar;
use yii\helpers\Url;

AppAssetClassicTopBar::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="<?= Yii::$app->language ?>">
<!-- Etiqueta head -->
<?=$this->render("//components/head")?>
<body class="animsition">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <?php $this->beginBody();?>
  
  <?=$this->render("//components/classic/topbar/nav-bar-topBar")?>

  <?=$this->render("//components/classic/topbar/menu-topBar")?>

  <?=$this->render("//components/classic/topbar/body-topBar", ['content'=>$content])?>

  <?=$this->render("//components/classic/topbar/footer-topBar")?>

  <?php $this->endBody();?>
 
  <script>
  Config.set('assets', '<?=Url::base()?>/templates/classic/topbar/assets');
  </script>

  <script>
  (function(document, window, $) {
    'use strict';
    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
  </script>
</body>
</html>
<?php $this->endPage() ?>