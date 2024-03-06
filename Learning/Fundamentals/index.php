<?php
        $name='Anjan';
        $age='100';
        echo "<h1>{$name} and {$age}</h1>";

    function dump($values)
    {
        echo"<pre>";
        var_dump($values);
        echo"</pre>";
    }
######## echo
    echo"hey this is anjan  <br>";

######## variables
    $name="Anjan Shrestha"; //string
    $age=56;    //integer
    $height=5.6; // double/float 
    $isHungry = true; // boolean

    echo "<h1>{$name}</h1>";
    echo"<br>";
    echo $age;
    echo"<br>";
    var_dump($isHungry);


########### arrays (1. indexed array 2. associative array 3. multidimensional array)
    $students=["ramesh","anjan","pukar"];
    
    dump($students);
    // $details =["firstname"===>"Roshan","Lastname" ===>"Lali"];


##### looping (1.For loop 2.foreach)
    $food =["coffee","tea","juice","ice"];
    $length = count($food);

    for($i=0;$i< $length;$i++){
    echo $food[$i];
    echo"<br>";
}
