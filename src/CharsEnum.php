<?php

namespace BracketCounter;

enum CharsEnum: string
{
    case LEFT_BRACKET = '(';
    case RIGHT_BRACKET = ')';
    case TAB = "\t";
    case RETURN = "\r";
    case NEW_LINE = "\n";
}
