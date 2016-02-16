<?php

    require_once "src/LeetspeakGenerator.php";

    class LeetspeakGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeLeetspeak_replaceEwith3()
        {
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "me";

            $result = $test_LeetspeakGenerator->makeLeetspeak($input);

            $this->assertEquals("m3", $result);
        }
        function test_makeLeetspeak_replaceIwith1()
        {
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "Italy";

            $result = $test_LeetspeakGenerator->makeLeetspeak($input);

            $this->assertEquals("1taly", $result);
        }

        function test_makeLeetspeak_replaceSwithZ()
        {
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "spaceship";

            $result = $test_LeetspeakGenerator->makeLeetspeak($input);

            $this->assertEquals("spac3zhip", $result);
        }

        function test_makeLeetspeak_multipleWords()
        {
            $test_LeetspeakGenerator = new LeetspeakGenerator;
            $input = "The Italian spaceship is green";

            $result = $test_LeetspeakGenerator->makeLeetspeak($input);

            $this->assertEquals("Th3 1talian spac3zhip iz gr33n", $result);
        }
    }
?>
