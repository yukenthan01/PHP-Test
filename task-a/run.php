<?php

    require('../_src/init.php');
    require('code.php');

    // Test 1
    $test->run(
        containsWord('hello','hello world'),
        true
    );
    
    // Test 2
    $test->run(
        containsWord('hello','goodbye world'),
        false
    );
    
    // Test 3
    $test->run(
        containsWord('salad','Pass The Salad.'),
        true
    );
    
    // Test 4
    $test->run(
        containsWord('CAT','Feed the cat.'),
        true
    );
    
    // Test 5
    $test->run(
        containsWord('cat','Round up the cattle.'),
        false
    );





