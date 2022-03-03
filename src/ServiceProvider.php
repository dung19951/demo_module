<?php

namespace Module\Demo;

use App\Traits\ModuleServiceProviderTrait;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    use ModuleServiceProviderTrait;

    private $permissions = [
        'view'         => 'View Demo',
        'create'       => 'Create Demo',
        'edit'         => 'Edit Demo',
        'delete'       => 'Delete Demo'
    ];
    private $appendAdminMenus = [
        'content' => [
            'Demo' => [
                'title'     => 'Demo',
                'icon'      => 'file',
                'route'     => 'admin.demo.index',
                'permission'=> 'page.view'
            ]
        ]
    ];
}
