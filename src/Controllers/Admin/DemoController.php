<?php

namespace Module\Demo\Controllers\Admin;


use App\Http\Controllers\Admin\Controller;


class DemoController extends Controller
{
   

    public $breadcrumbs = [
        ['link' => 'javascript:void(0)', 'name' => 'Content Manager']
    ];

    public $mainRouteName = 'admin.demo.index';

    public $pageService;

    public function __construct()
    {
        parent::__construct();
       
    }

    public function index()
    {
        $this->breadcrumb('Demo');

        return view('Demo::admin.create');
    }
}
