<?php

namespace GerbangBayar\Support;

/**
 * Generate alpha-numeric string
 */
function randomAlphanumeric(int $length = 12, $smallLetters = true): string
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    if ($smallLetters === true) {
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
    }

    return substr(str_shuffle($characters), 0, $length);
}

/**
 * Generate reference Id for payment
 */
function referenceId(): string
{
    return randomAlphanumeric();
}
