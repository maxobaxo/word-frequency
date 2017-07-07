<?php
    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $lower_word = strtolower($input_word);
            $lower_string = strtolower($input_string);
            // $repeats = substr_count($lower_string, $lower_word);

            $repeats_arr = [];
            $arr_of_words = explode(" ", $lower_string);
            foreach ($arr_of_words as $word) {
                if (!(ctype_alnum($word))) {
                    $word_as_arr = str_split($word);
                    $new_word_as_arr = [];

                    foreach($word_as_arr as $char) {
                        if (ctype_alnum($char)) {
                            array_push($new_word_as_arr, $char);
                        }
                    }
                    $word = implode("", $new_word_as_arr);
                }

                if ($word == $lower_word) {
                    array_push($repeats_arr, $word);
                }
            }
            var_dump($repeats_arr);
            $total_repeats = count($repeats_arr);

            return $total_repeats;
        }
    }
?>
