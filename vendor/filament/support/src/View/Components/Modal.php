<?php

namespace Filament\Support\View\Components;

class Modal
{
    public static bool $hasCloseButton = true;

    public static bool $isClosedByClickingAway = true;

    public static bool $isClosedByEscaping = true;

    public static function closeButton(bool $condition = true): void
    {
        static::$hasCloseButton = $condition;
    }

    public static function closedByClickingAway(bool $condition = true): void
    {
        static::$isClosedByClickingAway = $condition;
    }

    public static function closedByEscaping(bool $condition = true): void
    {
        static::$isClosedByEscaping = $condition;
    }
}
