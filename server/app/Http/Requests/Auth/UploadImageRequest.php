<?php 
namespace App\Http\Requests\Auth;


use Illuminate\Foundation\Http\FormRequest;
class UploadImageRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => 'required|max:1024|mimes:png,jpg,jpeg',

        ];
    }
}
