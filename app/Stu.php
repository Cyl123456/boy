<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stu extends Model
{
    //指定与模型关联的表名
    protected $table = 'stus';

    //执行表主键
    protected $primaryKey = 'id';

    //时间戳自动写入 created_at  updated_at  注意共有属性
    public $timestamps =  true;//默认

    //批量赋值
    protected $fillable = ['name','age','sex','class'];

    //name字段的访问器 小写
    public function getNameAttribute($value)
    {
    	return strtolower($value);
    	// return $value;
    }

    public function getSexAttribute($value)
    {
        $sex = ['w'=>'女','m'=>'男'];
        return $sex[$value];
        // return $value;
    }
}
