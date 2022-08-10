<?php

namespace App\Http\Controllers;

use App\Enums\MarvelCharacter;
use Spatie\LaravelOptions\Options;

class MarvelCharacterController extends Controller
{
    public function show() 
    {
        $hobbitArr = Options::forEnum(MarvelCharacter::class)->toArray();
        foreach ($hobbitArr as $key => $value) {
            echo $key . '=>' . json_encode($value) . PHP_EOL;
        }
    }
}
