<?php

$name = htmlspecialchars($_POST['name']);
$lastname = htmlspecialchars($_POST['lastname']);
$age = (int) htmlspecialchars($_POST['age']);
$gender = htmlspecialchars($_POST['gender']);
$DiCaprio = htmlspecialchars($_POST['DiCaprio']);

if (!empty($name) && !empty($lastname) && !empty($age) && !empty($gender) && $DiCaprio === "Lionardo") {
    echo "Name: $name, $lastname. Age is $age" . "<br>";
    echo "Gender: $gender." . "<br>";
    echo "knowledge of the languages:" . "<br>";
    echo "<pre>"; 
    print_r($_POST['language']);
    echo "</pre>";
    echo "The answer to the captcha: $DiCaprio";
} else {
    echo "Заполнены не все поля или не введено/неправильно введено секретное слово" . "<br>";
    echo "<a href='index.html'>Beрнуться обратно</a>";
    exit;
}

?>