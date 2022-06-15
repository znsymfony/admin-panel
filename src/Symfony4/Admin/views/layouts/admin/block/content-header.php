<?php

/**
 * @var array $menu
 * @var View $this
 * @var string $content
 */

use Illuminate\Container\Container;
use ZnLib\Web\View\View;
use ZnLib\Web\Widgets\BreadcrumbWidget;

?>

<div class="col-sm-6">
    <h1 class="m-0 text-dark">
        <?= $this->getAttribute('title', '') ?>
    </h1>
</div>

<div class="col-sm-6">
    <?php
    /** @var BreadcrumbWidget $breadcrumbWidget */
    $breadcrumbWidget = \ZnCore\Base\Libs\Container\Helpers\ContainerHelper::getContainer()->get(BreadcrumbWidget::class);
    $breadcrumbWidget->wrapTemplate = '<ol class="breadcrumb float-sm-right">{items}</ol>';
    if (count($breadcrumbWidget->items) > 1) {
        echo $breadcrumbWidget->render();
    }
    ?>
</div>
