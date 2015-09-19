<?php
namespace Ayeo\Barcode\Data;

class Subsets
{
    private $mapA = [
        ' ', '!', '"', '#', '$', '%', '&', "'", '(', ')', // 9 (end)
        '*', '+', ',', '-', '.', '/', '0', '1', '2', '3', // 19
        '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', // 29
        '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', // 39
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', // 49
        'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', // 59
        '\\', ']', '^', '_', // 63 (We're going into the weird bytes next)

        // Hex is a little more concise in this context
        "\x00", "\x01", "\x02", "\x03", "\x04", "\x05", // 69
        "\x06", "\x07", "\x08", "\x09", "\x0A", "\x0B", // 75
        "\x0C", "\x0D", "\x0E", "\x0F", "\x10", "\x11", // 81
        "\x12", "\x13", "\x14", "\x15", "\x16", "\x17", // 87
        "\x18", "\x19", "\x1A", "\x1B", "\x1C", "\x1D", // 93
        "\x1E", "\x1F", // 95

        // Now for system codes
        'FNC_3', 'FNC_2', 'SHIFT_B', 'CODE_C', 'CODE_B', // 100
        'FNC_4', 'FNC_1', 'START_A', 'START_B', 'START_C', // 105
        'STOP',	// 106
    ];

    private $mapB = [
        ' ', '!', '"', '#', '$', '%', '&', "'", '(', ')', // 9 (end)
        '*', '+', ',', '-', '.', '/', '0', '1', '2', '3', // 19
        '4', '5', '6', '7', '8', '9', ':', ';', '<', '=', // 29
        '>', '?', '@', 'A', 'B', 'C', 'D', 'E', 'F', 'G', // 39
        'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', // 49
        'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '[', // 59
        '\\', ']', '^', '_', '`', 'a', 'b', 'c', 'd', 'e', // 69
        'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', // 79
        'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', // 89
        'z', '{', '|', '}', '~', "\x7F", // 95

        // Now for system codes
        'FNC_3', 'FNC_2', 'SHIFT_A', 'CODE_C', 'FNC_4', // 100
        'CODE_A', 'FNC_1', 'START_A', 'START_B', 'START_C', // 105
        'STOP',	// 106
    ];

    private $mapC = [];

    public function __construct()
    {
        for ($x = 0; $x < 100; $x++) {
            $xx = sprintf('%02d', $x);
            $this->mapC[$xx] = $xx;
        }
    }

    public function get($letter)
    {
        return $this->{'map'.$letter};
    }
}