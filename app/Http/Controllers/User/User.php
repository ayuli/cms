<?php
/**
 * Created by PhpStorm.
 * User: 小鱼
 * Date: 2018/12/29
 * Time: 9:15
 */

namespace App\Http\Controllers\User;
use Illuminate\Routing\Controller;
use App\Model\UserModel;

class User extends Controller
{
    public function admin($id)
    {
        echo 'ID'.$id;
        echo __METHOD__;
        $user = UserModel::where(['id'=>$id])->first()->toArray();
//        echo '<pre>';
//        print_r($user);
//        echo '<pre>';
        dd($user);

    }
}