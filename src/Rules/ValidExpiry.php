<?php

namespace Khakimjanovich\PCManager\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidExpiry implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^\d{4}$/', $value)) {
            $fail('The :attribute must in YYMM format.');
        }

        $month = intval(substr($value, 2, 2));

        $is_good_month = $month >= 1 && $month <= 12;

        if (!$is_good_month) {
            $fail('The :attribute month must be between 1 and 12.');
        }
    }
}
