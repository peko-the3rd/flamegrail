<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
require base_path('vendor/smarty/smarty/libs/Smarty.class.php');
use Smarty;
use Config;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty;
        $this->smarty->left_delimiter = Config::get('parser.left_delimiter');
        $this->smarty->right_delimiter = Config::get('parser.right_delimiter');
        $this->smarty->template_dir = Config::get('parser.template_path');
        $this->smarty->compile_dir = Config::get('parser.compile_path');
    }

}
