<?php

namespace Pherserk\SignProvider\model;

use Pherserk\Sign\model\SignInterface;

class ClassifiedSign implements SignInterface
{ 
    const WORD_TYPE = 'word';                          # E.G.: 猴, 狗
    const SYLLAB_TYPE = 'syllab';		       # E.G.: あ, ग
    const LETTER_TYPE = 'letter';		       # E.G.: a, б, ธ, V ...
    const DIGIT_TYPE = 'digit';			       # E.G.: 1, 2, 3 ...
    const EMPTY_TYPE = 'empty';                        # E.G.: whitespaces, newlines
    const SEPARATION_PUNCTATION_TYPE = 'separation';   # E.G.: ;, , 
    const TERMINATION_PUNCTATION_TYPE = 'termination'; # E.G.: ), ], ", ', .
    const STARTING_PUNCTATION_TYPE = 'starting';       # E.G.: :, (, [, <, ", '
    const LIGATION_PUNCTATION_TYPE = 'ligation';       # E.G.: -, |, /, \, _
    const SYMBOL_TYPE = 'symbol';                      # E.G.: %, $, +, @

    private $sign;
 
    private $type;

    public function __construct(string $sign, string $type)
    {
        $this->sign = $sign;
        $this->type = $type;
    }
    
    public function getSign() : string
    {
        $this->sign = $sign;
    }

    public function getType() : string
    {
        $this->type = $type;
    }
}
