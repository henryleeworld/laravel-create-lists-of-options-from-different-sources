<?php

namespace App\Http\Controllers;

use App\Enums\MarvelCharacter;
use Spatie\LaravelOptions\Options;

class MarvelCharacterController extends Controller
{
    /**
     * Display the resource.
     */
    public function show()
    {
        $hobbitArr = Options::forEnum(MarvelCharacter::class)->toArray();
        foreach ($hobbitArr as $key => $value) {
            echo $value['label'] . '=>' . __($value['value']) . PHP_EOL;
        }
    }
}
