<?php

    require('../_src/init.php');
    require('code.php');

    // Test 1
    $test->run(
        generateSentence('Shopping List',array('Cabbages','Cucumber','Milk','Bread')),
        "Shopping List: Cabbages, Cucumber, Milk and Bread."
    );
    
    // Test 2
    $test->run(
        generateSentence('The top choices are',array('strawberry','watermelon','blueberry'),'flavour'),
        "The top choices are: strawberry flavour, watermelon flavour and blueberry flavour."
    );

    // Test 3
    $test->run(
        generateSentence('The materials required',array('green','red','blue'),['carpets','tiles','frames']),
        "The materials required: green carpets, red tiles and blue frames."
    );





