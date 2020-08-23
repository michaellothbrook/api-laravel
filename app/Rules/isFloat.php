<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class isFloat implements Rule
{
    public function passes($attribute, $value)
    {
        return is_float($value);
    }

    public function message()
    {
        return ['valor_emprestimo' => 'O campo precisa ser do tipo Float.'];
    }
}
