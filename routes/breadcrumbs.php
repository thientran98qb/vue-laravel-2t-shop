<?php

// Home

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', '/admin');
});

// Home > About
Breadcrumbs::for('user', function ($trail) {
    $trail->parent('home');
    $trail->push('User', route('admin.user.index'));
});
