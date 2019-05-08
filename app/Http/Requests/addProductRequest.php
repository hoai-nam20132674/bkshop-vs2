<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductRequest extends FormRequest
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
            'price'=> 'required',
            'amount' =>'required',
            'content' => 'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif,jpeg',
            'image-detail'=>'image|mimes:jpg,png,gif,jpeg'
        ];
    }
    public function messages(){
        return [
            'url.required' => 'Vui lòng nhập Url',
            'url.unique' => 'Url này đã được sử dụng',
            'name.required'=>'Vui lòng nhập tên sản phẩm',
            'title.required'=>'Vui lòng nhập tiêu đề sản phẩm',
            'price.required'=> 'Vui lòng nhập giá',
            'amount.required'=>'Vui lòng nhập số lượng sản phẩm',
            'content.required'=>'Vui lòng nhập mô tả sản phẩm',
            'seo_keyword.required'=>'Vui lòng nhập seo keywords',
            'seo_description.required'=>'Vui lòng nhập seo description',
            'image.required' => 'Vui lòng chọn ảnh đại diện',
            'image.image' =>'Định dạng ảnh đại diện không đúng',
            'image.mimes' => 'Định dạng ảnh đại diện không đúng',
            'image-detail.image' =>'Định dạng ảnh 2 không đúng',
            'image-detail.mimes' => 'Định dạng ảnh 2 không đúng'
        ];
    }
}
