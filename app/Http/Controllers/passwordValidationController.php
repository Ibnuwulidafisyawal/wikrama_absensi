<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Rules\Password;

class passwordValidationController extends Controller
{
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }
}
