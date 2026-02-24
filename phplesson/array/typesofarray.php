<?php

$fruits = array("Apple", "Banana", "Orange");

echo"$fruits"[0];
echo"$fruits"[1];

$student = array(
    "name" => "CJ",
    "age" =>  21,
    "course" => "IT" 
    );

    echo "Name" . $student["name"] = " <br>";
    echo "Age" . $student["age"] = " <br>";
    echo "Course" . $student["course"] = " <br>";

    $students = array(
        array("name" => "CJ","age" => 20,"course" => "IT"),
        array("name" => "Joseph","age" => 20,"course" => "IT"),
        array("name" => "Kyevia","age" => 20,"course" => "IT"),
    );


    echo  $students[0] ["name"] = "<br>";
    echo  $students[1] ["course"] = "<br>";               
    echo  $students[2] ["age"] = "<br>";


    $text ="apple, banana, orange";

    $fruits1 = explode(",", $text);

    print_r($fruits1);
    echo"br><br>";

    $fruits2 = ["apple", "banana", "orange"];

    $text = implode ("-", $fruits2);
    echo $text;
    
    ?>
