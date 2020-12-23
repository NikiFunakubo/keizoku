<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class ProjectRequest extends FormRequest
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
            // 'project_name' =>'required|max:255',
            // 'project_description'=>'max:500',
            // 'target_days'=>'required|numeric|digits:3',
            // 'achievement_days'=>'numeric|digits:3|lt:target',
            // 'tags'=>'max:10',
        ];
    }

    public function attributes()
    {
        return [
            'project_name' =>'プロジェクト名',
            'project_description'=> 'プロジェクト概要',
            'target_days'=> '目標日数',
            'achievement_days'=> '達成日数',
            'tags'=> 'タグ名',
        ];
    }
}

