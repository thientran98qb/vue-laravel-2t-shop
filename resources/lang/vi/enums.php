<?php

use App\Enums\StatusAdminType;

return [
    StatusAdminType::class => [
        StatusAdminType::PENDING => 'Đợi duyệt',
        StatusAdminType::APPROVED => 'Đã phê duyệt',
    ],
];
