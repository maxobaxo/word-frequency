<?php
    require_once "src/WordFrequency.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testRepeatCounterSingleLetter()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = 'I';
            $input_string = 'A';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(0, $result);
        }

        function testRepeatCounter()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = 'A';
            $input_string = 'a';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(1, $result);
        }
    }
?>
