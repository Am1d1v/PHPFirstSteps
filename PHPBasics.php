

 
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


<?php 

$someName = "Dima";
$userAge = 20;
$isUserLogin = true;

echo "<br>";

if($isUserLogin && $userAge > 18){
    echo "Good day, ".$someName;
} else {
    echo "You have to login";
}


  ?>



<?php 

echo "<br>";

for($i = 0; $i < 20; $i++ ){
   // echo $i." ";

    if(($i % 2) == 1){
        echo $i." ";
    }
}

echo "<br>";

for($j = 10; $j >= 0; $j--){
    echo "<p>$j</p>"." ";
}
?>



<?php 

    echo "<br>";

    $colorsArray = array("black", "white", "grey", "blue", "pink", "violet");

    //echo sizeof($colorsArray);

    foreach ($colorsArray as $key => $value){
        
       // echo $key;
          echo $value.", ";
    }

 /*

    for($i = 0; $i < sizeof($colorsArray); $i++){

        echo $colorsArray[$i]." ";
    }

    */

  ?>


<hr>
<?php


/*



    echo "<br>";

    print_r($_GET);
    echo "Hello, " .$_GET["username"];


    */

?>

<p>Input your name</p>
<form>
    <input type="text" name = "username">
    <input type="submit">
</form>

<hr>

<?php




    echo "<br>";

    $value = ($_GET)["number"];
   
    if($value%2){
        echo "Number is odd";
    } else{
        echo "Number is even";
    }



?>

<p>Input number</p>
<form>
    <input type="number" name = "number">
    <input type="submit">
</form>



<hr>

<?php

print_r($_POST);

?>

<p>Input </p>
<form method = "post">
    <input type="number" name = "inputNumber">
    <input type="submit">
</form>