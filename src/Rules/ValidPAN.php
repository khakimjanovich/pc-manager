<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

final class ValidPAN implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! is_numeric($value)) {
            $fail('The :attribute must be numeric.');
        }

        if (mb_strlen($value) !== 16) {
            $fail('The :attribute must be exactly 16 digits.');
        }

        //        if (!$this->passesLuhnCheck($value)) {
        //            $fail('The :attribute is not a valid card number.');
        //        }
    }

    private function passesLuhnCheck($number): bool
    {
        $sum = 0;
        $alt = false;

        for ($i = mb_strlen($number) - 1; $i >= 0; $i--) {
            $n = (int) $number[$i];

            if ($alt) {
                $n *= 2;
                if ($n > 9) {
                    $n -= 9;
                }
            }

            $sum += $n;
            $alt = ! $alt;
        }

        return $sum % 10 === 0;
    }
}
