<?php

namespace News;

class News {

    function __construct() {
        echo "Inside contructor function <br/>";
    }

    function insert($param1, $param2) {
        echo "insert function {$param1}, {$param2} <br/>";
    }
    
    function display() {
        echo "display function <br/>";
    }
}
