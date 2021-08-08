<?php

use ZnCore\Base\Legacy\Yii\Helpers\Url;
use ZnSandbox\Sandbox\Casbin\Domain\Enums\Rbac\ExtraPermissionEnum;

return [
    [
        'label' => 'Log history',
        'url' => Url::to(['/log/history']),
        'icon' => 'fas fa-circle',
        'access' => [ExtraPermissionEnum::ADMIN_ONLY],
    ],
];
