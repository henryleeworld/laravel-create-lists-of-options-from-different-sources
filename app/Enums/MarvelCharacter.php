<?php

namespace App\Enums;

enum MarvelCharacter: string
{
    case Hulk = 'hulk';
    case Spider_Man = 'spider_man';
    case Thor = 'thor';
    case Wolverine = 'wolverine';

    public static function labels(): array
    {
       return [
           'hulk' => 'Green Goliath',
           'spider_man' => 'Spidey',
           'thor' => 'Goldilocks',
           'wolverine' => 'Ol\' Canucklehead',
       ];
    }
}