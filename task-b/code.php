<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start,array $items,...$append){
        $numberOfItems = count($items);
        $num_count = 0;
        $sentence = "";
        $sentence .= $start.": ";
            
        foreach($items as $key => $item){
            $num_count = $num_count + 1;
           // print_r($append); 
           //check array or string parameter
            if(isset($append[0])&& !is_array($append[0]))
            {
                $sentence .= $item." ".$append[0];
            }
            else if(isset($append[0])){
                $sentence .= $item." ".$append[0][$key];
            }
            else
            {
                $sentence .= $item;
            }
            // append comma, and within the words
            if ($num_count < $numberOfItems -1) {
                $sentence .= ", ";
            }
            else if($num_count == $numberOfItems -1)
            {
            $sentence .= " and ";
            }
        }


        
        return $sentence .".";
    }