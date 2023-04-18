<?php

    require('../_src/init.php');
    require('code.php');

    // Test 1
    $counter = new Counter();
    $counter->count();
    $counter->count();
    $counter->count();
    $test->run(
        $counter->get(),
        3
    );

    // Test 2
    $counter = new Counter(3);
    $counter->count();
    $counter->count();
    $test->run(
        $counter->get(),
        5
    );

    // Test 3
    $counter = new Counter(1);
    $counter->count(9);
    $test->run(
        $counter->get(),
        10
    );

    // Test 4
    $counter = new Counter(3);
    $counter->count();
    $counter->count();
    $counter->reset();
    $counter->count();
    $test->run(
        $counter->get(),
        1
    );





