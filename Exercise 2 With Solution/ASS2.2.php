<?php

class Student {
    private $name;
    private $id;
    private $courses;

    public function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
        $this->courses = array();
    }

    public function addCourse($courseName) {
        $this->courses[] = $courseName;
    }

    public function removeCourse($courseName) {
        $index = array_search($courseName, $this->courses);
        if ($index !== false) {
            array_splice($this->courses, $index, 1);
        }
    }

    public function getCourses() {
        return $this->courses;
    }
}

$student = new Student("Uday Sheth", 0012);

$student->addCourse("php");
$student->addCourse("java");
$student->addCourse("c#");

$courses = $student->getCourses();
echo "Courses: " . implode(", ", $courses) . "\n";

$student->removeCourse("java");
$courses = $student->getCourses();
echo "<br>Courses after removing java: " . implode(", ", $courses) . "\n";
?>
