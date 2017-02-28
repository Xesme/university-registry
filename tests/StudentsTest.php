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
    protected function teardown()
    {
        Student::deleteAll();

    }
    function test_construct()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2017-02-10";
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

    function test_save()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2017-02-10";
        $id = NULL;
        $test_student = new Student($name, $admission, $id);
        $test_student->save();

        // Act
        $result = Student::getAll();

        // Assert
        $this->assertEquals($test_student, $result[0]);
    }

    function test_getAll()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2017-02-10";
        $id = NULL;
        $test_student = new Student($name, $admission, $id);
        $test_student->save();

        $name2 = "Lisa Frank";
        $admission2 = "2017-02-10";
        $test_student2 = new Student($name2, $admission2, $id);
        $test_student2->save();

        // Act
        $result = Student::getAll();

        // Assert
        $this->assertEquals([$test_student, $test_student2], $result);
    }

    function test_deleteAll()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2017-02-10";
        $id = NULL;
        $test_student = new Student($name, $admission, $id);
        $test_student->save();

        $name2 = "Lisa Frank";
        $admission2 = "2017-02-10";
        $test_student2 = new Student($name2, $admission2, $id);
        $test_student2->save();

        // Act
        Student::deleteAll();
        $result = Student::getAll();

        // Assert
        $this->assertEquals([], $result);
    }

    function test_update()
    {
        // Arrange
        $name = "Lisa Frank";
        $admission = "2017-02-10";
        $id = NULL;
        $test_student = new Student($name, $admission, $id);
        $test_student->save();

        $new_name = "Elisa Frank";

        // Act
        $test_student->update($new_name);
        // var_dump($result);

        // Assert
        $this->assertEquals("Elisa Frank", $test_student->getName());
    }
}

 ?>
