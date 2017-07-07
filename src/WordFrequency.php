<?php
    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $repeats = substr_count($input_string, $input_word);
            return $repeats;
        }
    }
?>
