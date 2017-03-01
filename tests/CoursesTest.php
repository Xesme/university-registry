<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
**/

require_once "src/Courses.php";
// require_once "src/Stu dents.php";

$server = "mysql:host=localhost:8889;dbname=test_university";
$username = "root";
$password = "root";
$DB = new PDO($server, $username, $password);

class CoursesTest extends PHPUnit_Framework_TestCase
{
    function test_construct()
    {
        // Arrange
        $course_name = "Intro to American History";
        $course_number = "HA101";
        $id = NULL;
        $test_course = new Course($course_name, $course_number, $id);

        // Act
        $result1 = $test_course->getCourseName();
        $result2 = $test_course->getCourseNumber();
        $result3 = $test_course->getId();

        // Assert
        $this->assertEquals($course_name, $result1);
        $this->assertEquals($course_number, $result2);
        $this->assertEquals($id, $result3);


    }
}



 ?>
