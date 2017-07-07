<?php
    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $lower_word = " " . strtolower($input_word) . " ";
            $lower_string = " " . strtolower($input_string) . " ";
            $repeats = substr_count($lower_string, $lower_word);

            return $repeats;
        }
    }
?>
