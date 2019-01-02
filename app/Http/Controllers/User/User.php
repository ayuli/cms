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
        echo 'ID' . $id;
        echo __METHOD__;
        $user = UserModel::where(['id' => $id])->first()->toArray();
//        echo '<pre>';
//        print_r($user);
//        echo '<pre>';
        dd($user);

    }

    /** 添加 */
    public function add()
    {
        $data = [
            'username' => str_random(5),
            'sex' => '男',
            'age' => '18',
            'tel' => '13899833344'
        ];

        $insert = UserModel::insert($data);

    }

    /** 修改 */
    public function update($id)
    {
        $data = [
            'username' => str_random(5)
        ];
        $update = UserModel::where(['id' => $id])->update($data);
        print_r($update);

    }

    /** 删除 */
    public function delete($id)
    {
        $delete = UserModel::where(['id' => $id])->delete();
        print_r($delete);
    }

    /** 展示 */
    public function show()
    {
        $list = UserModel::all();
//        print_r($list->toArray());
        $data = [
            'list' => $list, //循环名 list
        ];
        return view('user.show', $data); // 模板下user show
    }

    public function push()
    {
        echo "2";
    }

}