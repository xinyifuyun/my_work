<?php
/**
 * Created by PhpStorm.
 * User: shuru
 * Date: 2017/8/15
 * Time: 22:58
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleModel;
use App\Models\LeftMenuModel;

class ArticleController extends Controller
{

    public function index()
    {

        $list = ArticleModel::get()->toArray();


        $data = [
            'list' => json_encode($list)
        ];

        return view('admin/article/index', $data);
    }


    public function dataList()
    {
        $list = ArticleModel::get()->toArray();
        return json_encode($list);
    }


    public function add()
    {
        $list = '';

        $data = [
            'list' => $list
        ];
        return view('admin/article/add', $data);
    }
}
