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
           'hulk' => __('Green Goliath'),
           'spider_man' => __('Spidey'),
           'thor' => __('Goldilocks'),
           'wolverine' => __('Ol\' Canucklehead'),
       ];
    }
}