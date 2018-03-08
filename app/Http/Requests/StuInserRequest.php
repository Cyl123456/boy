<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StuInserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|alpha|unique:stus|max:32',
            'sex'=>'required|in:w,m',
            'age'=>'required|numeric|between:16,35',
            'class'=>'required|max:32'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'姓名必填',
            'name.alpha'=>'姓名必须为纯字符',
            'name.unique'=>'姓名重复',
            'name.max'=>'姓名过长,最大32位',
            'sex.required'=>'性别必选',
            'sex.in'=>'性别错误',
            'age.required'=>'年龄必填',
            'age.numeric'=>'年龄纯数字',
            'age.between'=>'年龄必须在16~35之间',
            'class.required'=>'班级必填',
            'class.max'=>'班级最长32位',
        ];
    }
}
