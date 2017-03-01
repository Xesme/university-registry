<?php

class Course
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

    // getters and setters

    function getCourseName()
    {
        return $this->course_name;
    }

    function setCourseName($new_course_name)
    {
        $this->course_name = $new_course_name;
    }

    function getCourseNumber()
    {
        return $this->course_number;
    }

    function setCourseNumber($new_course_number)
    {
        $this->course_number = $course_number;
    }

    function getId()
    {
        return $this->id;
    }

    // functions CRUD


    // static functions

}

 ?>
