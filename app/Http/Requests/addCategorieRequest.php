<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addCategorieRequest extends FormRequest
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
            
            'url' => 'required|unique:products,url',
            'url' => 'required|unique:blogs,url',
            'url' => 'required|unique:categories,url',
            'name' => 'required',
            'title' => 'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'image_share'=>'image|mimes:jpg,png,gif,jpeg'
        ];
    }
    public function messages(){
        return [
            'url.required' => 'Vui lòng nhập Url',
            'url.unique' => 'Url này đã được sử dụng',
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'title.required'=>'Vui lòng nhập tiêu đề sản phẩm',
            'seo_keyword.required'=>'Vui lòng nhập seo keywords',
            'seo_description.required'=>'Vui lòng nhập seo description',
            'image_share.image' =>'Định dạng ảnh image không đúng',
            'image_share.mimes' => 'Định dạng ảnh không đúng'
        ];
    }
}
