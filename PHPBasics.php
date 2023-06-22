

 
 <?php 

 
    /*

    echo "Hello";

    $name = "</br>Dima";
    $user = "</br> <h1>Dima</h1>";
    echo $name;
    echo $user;
    echo "My name is $name </br>";

    $lastName = "someLastName";
    echo "User's Lastname is $lastName";

    */

        ?>

<?php

    $userName = "UserName";
    $userLastName = "UserLastName";
    echo $userName." ".$userLastName;

    $x = 30;
    echo "<p>$x</p>";

    $y = 15;

    $res = $x + $y;
    echo "<p>$res<p>";

    //$bool = true;
    //echo "$bool";

   // $variableName = "userName";
   // echo $$variableName ;
    ?>


<?php 

$colors = array("black", "pink", "white", "purple", "grey", "blue");

print_r($colors);

echo "<p>$colors[0]</p>";

$names[0] = "Anna";
$names[1] = "ALice";
$names[2] = "Lea";
$names["someName"] = "Dima";

print_r($names);

echo "<br>";
echo $names["someName"];
echo "<br>";

$years["Dima"] = 2009;
$years["Anna"] = 1999;
$years["Alice"] = 1989;

print_r($years);
echo "<br>";
echo sizeof($years);

echo "<br>";

unset($years["Dima"]);
print_r($years);
?>