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

    // getters and setters

    function getName()
    {
        return $this->name;
    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }

    function getAdmission()
    {
        return $this->admission;
    }

    function setAdmission($new_admin)
    {
        $this->admission = $new_admin;
    }

    function getId()
    {
        return $this->id;
    }
}
 ?>
