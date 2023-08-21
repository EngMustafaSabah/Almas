<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;

class DifferentId implements ValidationRule
{
    public function __construct(protected $id)
    {
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        if ($value == $this->id) $fail('The :attribute must be different from the current tag ID.');
    }
}
