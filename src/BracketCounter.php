<?php

namespace BracketCounter;

use InvalidArgumentException;

class BracketCounter
{

    public static function check(string $input): bool
    {
        $leftBracketCounter = $rightBracketCounter = 0;

        foreach (str_split($input) as $char) {
            if (CharsEnum::tryFrom($char) === null) {
                throw new InvalidArgumentException('Found a wrong char in a string');
            }

            switch ($char) {
                case CharsEnum::LEFT_BRACKET->value:
                    $leftBracketCounter++;
                    break;
                case CharsEnum::RIGHT_BRACKET->value:
                    $rightBracketCounter++;
                    break;
            }

            if ($rightBracketCounter > $leftBracketCounter) {
                return false;
            }
        }

        if ($leftBracketCounter === 0 || $rightBracketCounter === 0 || $rightBracketCounter !== $leftBracketCounter) {
            return false;
        }

        return true;
    }
}
