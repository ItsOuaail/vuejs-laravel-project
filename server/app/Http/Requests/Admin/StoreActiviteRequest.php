<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class StoreActiviteRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:2048',
            'objectif' => 'required|string|max:1024',
            'imagePub' => 'sometimes|file|mimes:jpg,jpeg,png|max:5000', // 5MB max size
            'lienYtb' => 'required|string|max:255',
            'programmePdf' => 'sometimes|file|mimes:pdf|max:10000', // 10MB max size 
            'type' => 'required|exists:typeactivites,type'
        ];
    }
    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'description.required' => 'La description est obligatoire.',
            'objectif.required' => 'L\'objectif est obligatoire.',
            'ageMin.required' => 'L\'âge minimum est obligatoire.',
            'ageMax.required' => 'L\'âge maximum est obligatoire.',
            'lienYtb.required' => 'Le lien YouTube est obligatoire.',
            'type.required' => 'Le type d\'activité est obligatoire.',
            'type.exists' => 'Le type d\'activité spécifié n\'est pas valide.',
            'ageMax.gte' => 'L\'âge maximum doit être supérieur ou égal à l\'âge minimum.',
            'programmePdf.file' => 'Le document doit être un fichier.',
            'programmePdf.mimes' => 'Le document doit être un fichier PDF.',
            'programmePdf.max' => 'Le document ne doit pas dépasser 10MB.',
            'imagePub.file' => 'L\'image doit être un fichier.',
            'imagePub.mimes' => 'L\'image doit être de type JPEG, JPG ou PNG.',
            'imagePub.max' => 'L\'image ne doit pas dépasser 5MB.'
        ];
    }
}
