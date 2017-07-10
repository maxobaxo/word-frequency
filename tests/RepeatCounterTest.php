<?php
    require_once "src/RepeatCounter.php";

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

        function testRepeatCounterCaseAgnostic()
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

        function testRepeatCounterWordWithinAWord()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = 'a';
            $input_string = 'A mouse once ate a cookie.';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(2, $result);
        }

        function testRepeatCounterIgnorePunctuation()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = 'sweet';
            $input_string = 'Sweet Caroline is the sweetest song of all the #sweet songs I know to be sweet!';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals(3, $result);
        }

        function testRepeatCounterEmptyInput()
        {
            //Arrange
            $test_repeatCounter = new RepeatCounter;
            $input_word = 'empty';
            $input_string = '';

            //Act
            $result = $test_repeatCounter->countRepeats($input_word, $input_string);

            //Assert
            $this->assertEquals('You must enter a target word and a sample string to receive a result', $result);
        }
    }
?>
