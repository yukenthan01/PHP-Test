<?php

    /* 
     *  Class       : Counter
     * 
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     * 
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *  
     *  Variables   : (private:int) count   - The count value
     * 
     *  Functions
     * 
     *      Function        : (public) count()
     * 
     *          Description : Increment the count value
     *              
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     * 
     *          Return      : NULL
     * 
     *      Function        : (public) get()
     * 
     *          Description : Return the current count value
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : int
     * 
     *      Function        : (public) reset()
     * 
     *          Description : Reset the count value to 0
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : NULL
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     * 
     */

    
    class Counter {
        
        public $X = 0; // public variable
        function __construct(int $count = 0)
        {
            $this->X = $count;
        }
        function count(int $count = 0){
            if($count == 0) // check whether the parameter is passed or not
            {
                $count++;
            }
            $this->X = $this->X + $count;
        }
        
        function get()
        {
            return $this->X;
        }

        function reset()
        {
            $this->X = 0;
        }

    }