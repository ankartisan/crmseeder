<?php

namespace App\Http\Requests;

use Symfony\Component\HttpFoundation\Request;

class RoleUpdateRequest extends ApiRequest
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
    public function rules(Request $request)
    {
        return [
            'name' => 'required|unique:roles,name,'.$request->get('id'),
        ];
    }

}
