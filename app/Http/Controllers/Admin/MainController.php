<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function code()
    {

        $data = [

        ];

        return view('admin/main/code',$data);
    }

    public function menu()
    {

        $data = [

        ];

        return view('admin/main/menu',$data);
    }

    public function second()
    {

        $data = [

        ];

        return view('admin/main/second',$data);
    }

    public function dyna_menu()
    {

        $data = [

        ];

        return view('admin/main/dyna_menu',$data);
    }

    public function operation()
    {

        $data = [

        ];

        return view('admin/main/operation',$data);
    }
}
