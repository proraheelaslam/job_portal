<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use libphonenumber\PhoneNumberUtil;

class PhoneNumber implements Rule
{
    protected $countryCode;

    public function __construct($countryCode = null)
    {
        $this->countryCode = $countryCode;
    }

    public function passes($attribute, $value)
    {
        try {
            $phoneUtil = PhoneNumberUtil::getInstance();
            
            if ($this->countryCode) {
                // Validate with specific country code
                $phoneNumber = $phoneUtil->parse($value, $this->countryCode);
            } else {
                // Try to validate without country code (less reliable)
                $phoneNumber = $phoneUtil->parse($value);
            }
            
            return $phoneUtil->isValidNumber($phoneNumber);
        } catch (\Exception $e) {
            return false;
        }
    }

    public function message()
    {
        return 'The :attribute must be a valid phone number for the selected country.';
    }
}