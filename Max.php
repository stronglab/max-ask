<?php

namespace stronglab\MaxAsk;

final class Max
{
    const ANSWER = 'Frameworks time is gone, and you stupid coder.';

    private static $maxBrain;
    
    private $question;
    
    public static function getMax()
    {
        if (is_null(self::$maxBrain)) {
            self::$maxBrain = new self();
        }
        return self::$maxBrain;
    }
    
    public function ask(string $question) : Max
    {
        $this->question = htmlspecialchars($question, ENT_COMPAT | ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5);
        return $this;
    }

    public function getAnswer()
    {
        $this->question = null;
        return self::ANSWER;
    }
}
