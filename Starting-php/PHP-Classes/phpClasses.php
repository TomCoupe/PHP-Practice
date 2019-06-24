<?php
class User {

    var $firstName;
    var $secondName;
    var $age;
    var $jobTitle;
    //examples of getter methods.
    function getFName() {
        return $this->firstName;
    }
    function getSName() {
        return $this->secondName;
    }
    function getAge() {
        return $this->age;
    }
    function getJobTitle(){
        return $this->jobTitle;
    }
}
// creating user object and assigning values from user input.
$newUser = new User;
$newUser -> firstName  = $_GET['fName'];
$newUser -> secondName = $_GET['sName'];
$newUser -> age        = $_GET['age'];
$newUser -> jobTitle   = $_GET['jobTitle'];

//outputting the information input to ensure it works.
echo "First name: " . $newUser -> firstName;  echo "<br>";
echo "Second name: ". $newUser -> secondName; echo "<br>";
echo "Age: "        . $newUser -> age;        echo "<br>";
echo "Job: "        . $newUser -> jobTitle;   echo "<br>";
