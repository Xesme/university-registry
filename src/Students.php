<?php

class Student
{
    private $name;
    private $admission;
    private $id;

    function __construct($name, $admission, $id = NULL)
    {
        $this->name = $name;
        $this->admission = $admission;
        $this->id = $id;
    }
    
}
 ?>
