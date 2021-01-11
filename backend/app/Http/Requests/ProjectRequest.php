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
            'project_name' =>'required|max:10',
            'project_description'=>'max:10',
            'target_days'=>'required|max:365|integer',
            'tags'=>'json|regex:/^(?!.*\s).+$/u|regex:/^(?!.*\/).*$/u',
        ];
    }

    public function attributes()
    {
        return [
            'project_name' =>'プロジェクト名',
            'project_description'=> 'プロジェクト概要',
            'target_days'=> '目標日数',
            'achievement_days'=> '達成日数',
            'tags'=> 'タグ',
        ];
    }
    public function passedValidation()
    {
        $this->tags = collect(json_decode($this->tags))
          ->slice(0,5)
          ->map(function($requestTag){
            return $requestTag->text;
          });
    }
}

