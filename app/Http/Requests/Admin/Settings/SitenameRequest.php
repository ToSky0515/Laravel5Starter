<?php

namespace App\Http\Requests\Admin\Settings;

use App\Http\Requests\Request;

class SitenameRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'sitename_en' => 'required',
            'sitename_bg' => 'required',
        ];
    }

}
