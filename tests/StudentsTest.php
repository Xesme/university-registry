<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
**/

require_once "src/Students.php";
require_once "src/Courses.php";


$server = "mysql:host=localhost:8889;dbname=university";
$username = "root";
$password = "root";
$DB = new PDO($server, $username, $password);

class StudentTest extends PHPUnit_Framework_TestCase
{
    function test_construct()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2/10/17";
        $id = NULL;
        $test_student = new Student($name, $admission, $id);

        // Act
        $result1 = $test_student->getName();
        $result2 = $test_student->getAdmission();
        $result3 = $test_student->getId();


        // Assert
        $this->assertEquals($name, $result1);
        $this->assertEquals($admission, $result2);
        $this->assertEquals($id, $result3);

    }
}

 ?>
