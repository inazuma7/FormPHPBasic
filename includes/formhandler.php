<?php 

//var_dump($_SERVER["REQUEST_METHOD"]);


if ($_SERVER["REQUEST_METHOD"]=="POST"){
$firstname = htmlspecialchars($_POST["firstname"]); 
$lastname = htmlspecialchars($_POST["lastname"]); 
$favoritepet = htmlspecialchars($_POST["favoritepet"]);

   if(empty($firstname)){
    exit();
   }

echo "These are the data, the user submitted:";
echo "<br>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $favoritepet;

}