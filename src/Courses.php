<?php

function Course
{
    private $course_name;
    private $course_number;
    private $id;

    function __construct($course_name,  $course_number, $id = NULL)
    {
        $this->course_name = $course_name;
        $this->course_number = $course_number;
        $this->id = $id;
    }
    
}

 ?>
