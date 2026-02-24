<?php
if (isset($_GET ["name"]) && isset ($_GET["age"] )) {
    $name = $_GET ["name"];
    $age = $_GET ["age"];

    echo" <h2> POST Data Received </h2> ";
    echo "<p> Name: $name</p>";
    echo "<p> Age: $age</p>";
    echo "<p> Notice how the data is NOT visible in the URL</p>";
} else{
    echo "no POST data received";
}