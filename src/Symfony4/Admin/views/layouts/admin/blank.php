<?php

/**
 * @var array $menuConfigFile
 * @var View $this
 * @var string $content
 */

use ZnLib\Web\Symfony4\MicroApp\Assets\AdminAppAsset;
use ZnLib\Web\Symfony4\MicroApp\Widgets\Layout\ScriptWidget;
use ZnLib\Web\Symfony4\MicroApp\Widgets\Layout\StyleWidget;
use ZnLib\Web\View\View;
use ZnLib\Web\Widgets\Toastr\ToastrWidget;

(new AdminAppAsset())->register($this);

//$this->registerCssFile('/dist/css/footer.css');
//$this->registerCssFile('/dist/css/site.css');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?? '' ?></title>
    <?= StyleWidget::widget(['view' => $this]) ?>
</head>
<body>

<?= $content ?>

<?= ToastrWidget::widget(['view' => $this]) ?>
<?= StyleWidget::widget(['view' => $this]) ?>
<?= ScriptWidget::widget(['view' => $this]) ?>

</body>
</html>
