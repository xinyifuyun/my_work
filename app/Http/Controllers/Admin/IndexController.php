<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {

        $data = [

        ];

        return view('admin/index/index',$data);
    }
}
