<?php

    class LeetspeakGenerator
    {
        function makeLeetspeak($input_phrase) {
            $input_array_of_words = explode(" ", $input_phrase);
            $final_phrase = array();

                for ($i=0; $i < count($input_array_of_words); $i++) {
                    $word = $input_array_of_words[$i];
                    $input_array_of_letters = str_split($input_array_of_words[$i]);
                    $final_word = array();

                    foreach($input_array_of_letters as $index => $letter) {
                        if ($letter == "e") {
                            array_push($final_word, "3");
                        }

                        elseif ($letter == "o"){
                            array_push($final_word, "0");
                        }

                        elseif ($letter == "I"){
                            array_push($final_word, "1");
                        }

                        elseif ($index != 0 && $letter == "s") {
                            array_push($final_word, "z");
                        }

                        else {
                            array_push($final_word, $letter);
                        }
                    }
                    array_push($final_phrase, implode("", $final_word));
            }
            return implode(" ", $final_phrase);
        }
    }

 ?>
