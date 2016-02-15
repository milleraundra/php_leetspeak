<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_allLower()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "ALL UPPER";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("All Upper", $result);
        }

    }
?>
