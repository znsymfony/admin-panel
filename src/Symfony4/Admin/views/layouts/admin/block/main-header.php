<?php

/**
 * @var array $menu
 * @var View $this
 * @var string $content
 */

use ZnBundle\Language\Symfony4\Widgets\Language\LanguageWidget;
use ZnCore\Base\Legacy\Yii\Helpers\Url;
use ZnLib\Web\View\View;
use ZnLib\Web\Widgets\UserNavbarMenu\UserNavbarMenuWidget;
use ZnSandbox\Sandbox\UserNotify\Yii2\Widgets\NotifyMenuWidget;

//use Packages\User\Yii2\Widgets\UserNavbarMenu\UserNavbarMenuWidget;

?>

<!-- Left navbar links -->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <!--<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
    </li>-->
</ul>

<!-- SEARCH FORM -->
<!--<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>-->

<!-- Right navbar links -->
<ul class="navbar-nav ml-auto">


    <?php if (1 == 0): ?>
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <?= $this->renderFile(__DIR__ . '/main-header-messages.php') ?>
        </li>
    <?php endif; ?>

    <?php if (1 == 0): ?>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <?= NotifyMenuWidget::widget() ?>
        </li>
    <?php endif; ?>

    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
        </a>
    </li>

    <?= LanguageWidget::widget([
        'view' => $this,
    ]) ?>

    <?= UserNavbarMenuWidget::widget([
        'userMenuHtml' => '
            <a class="dropdown-item" href="' . Url::to(['/person-settings']) . '">
                <i class="fas fa-user-cog"></i>
                Персональные данные
            </a>
        ',
    ]) ?>

    <?php if (1 == 0): ?>
        <!--<ul class="navbar-nav d-flex flex-row">-->
        <?= UserNavbarMenuWidget::widget() ?>
        <!--</ul>-->
    <?php endif; ?>
</ul>
