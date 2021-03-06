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

    // functions CRUD

    function save()
    {
        $GLOBALS['DB']->exec("INSERT INTO students (name, admission) VALUES ('{$this->getName()}', '{$this->getAdmission()}');");
        $this->id = $GLOBALS['DB']->lastInsertId();
    }

    function update($new_name)
    {
        $GLOBALS['DB']->exec("UPDATE students SET name = '{new_name}' WHERE id = {$this->getId()};");
        $this->setName($new_name);
    }

    function delete()
    {
        $GLOBALS['DB']->exec("DELETE FROM students WHERE id = {$this->getId()};");
    }

    function find()
    {
        $GLOBALS['DB']->query("SELECT * FROM students WHERE id = {$this->getId()};");
    }

    // static functions
    static function getAll()
    {
        $returned_students = $GLOBALS['DB']->query("SELECT * FROM students;");
        $students = array();
        foreach($returned_students as $student)
        {
            $name = $student['name'];
            $admission = $student['admission'];
            $id = $student['id'];
            $new_student = new Student($name, $admission, $id);
            array_push($students, $new_student);
        }
        return $students;
    }

    static function deleteAll()
    {
        $GLOBALS['DB']->exec("DELETE FROM students;");
    }
}
 ?>
