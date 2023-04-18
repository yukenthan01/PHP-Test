<?php

    class TestImplementation {

        private $n;

        /*
         * Initiate Class
         */
        function __construct(){
            $this->n = 0;
        }

        /*
         * Algorithm: Compares two parameters expected to be identical
         * Output:    Prints given parameters + Success or Failure
         */
        function run($returned,$expected){
            
            // Keep Track of Tests
            $this->n++;

            // Convert Variables To Str
            $returned = json_encode($returned);
            $expected = json_encode($expected);

            // Compare Results
            if($returned!==$expected){
                echo "\nTest {$this->n}: FAILED";
                echo "\n Expected: {$expected}";
                echo "\n Returned: {$returned}\n";
            } else {
                echo "\nTest {$this->n}: Successful\n";
            }

        }

    }

    $test = new TestImplementation();