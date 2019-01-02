<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    public $table = 'form';
    //当数据库表中没有 created_at 和updated_at字段
    public $timestamps = false;
}
