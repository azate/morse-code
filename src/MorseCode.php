<?php

declare(strict_types=1);

namespace Azate\MorseCode;

/**
 * Class MorseCode
 *
 * @package Azate\MorseCode
 */
class MorseCode
{
    /**
     * The translation table we use to encode or decode messages.
     *
     * @var array
     */
    private $translation = [
        '0' => '-----',
        '1' => '.----',
        '2' => '..---',
        '3' => '...--',
        '4' => '....-',
        '5' => '.....',
        '6' => '-....',
        '7' => '--...',
        '8' => '---..',
        '9' => '----.',
        'a' => '.-',
        'b' => '-...',
        'c' => '-.-.',
        'd' => '-..',
        'e' => '.',
        'f' => '..-.',
        'g' => '--.',
        'h' => '....',
        'i' => '..',
        'j' => '.---',
        'k' => '-.-',
        'l' => '.-..',
        'm' => '--',
        'n' => '-.',
        'o' => '---',
        'p' => '.--.',
        'q' => '--.-',
        'r' => '.-.',
        's' => '...',
        't' => '-',
        'u' => '..-',
        'v' => '...-',
        'w' => '.--',
        'x' => '-..-',
        'y' => '-.--',
        'z' => '--..',
        '.' => '.-.-.-',
        ',' => '--..--',
        '?' => '..--..',
        '!' => '-.-.--',
        '-' => '-....-',
        '/' => '-..-.',
        '@' => '.--.-.',
        '(' => '-.--.',
        ')' => '-.--.-',
        ' ' => '/',
    ];

    /**
     * Encode a given string into morse code.
     *
     * @param string $string
     *
     * @return string
     */
    public function encode(string $string = ''): string
    {
        $string = strtolower($string);
        $result = [];

        foreach (str_split($string) as $char) {
            if (isset($this->translation[$char])) {
                $result[] = $this->translation[$char];
            }
        }

        return implode(' ', $result);
    }

    /**
     * Decode a given morse code string into something readable for humans.
     *
     * @param string $string
     *
     * @return string
     */
    public function decode(string $string = ''): string
    {
        $characters = array_flip($this->translation);

        $result = '';

        foreach (explode(' ', $string) as $character) {
            if (isset($characters[$character])) {
                $result .= $characters[$character];
            }
        }

        return $result;
    }
}
