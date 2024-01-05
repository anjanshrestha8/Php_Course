<?php
    $player_number = $_GET['search'];
    echo"The number you choose is : ".$player_number;
    
    echo"<br>";
    $computer_number=(rand(0,10));
    echo "The number computer choose is : ".$computer_number;
    

    function Compare($p,$c){
        // echo "The number computer choose is : ".$c;
        // echo"The number you choose is : ".$p;
        if($p==$c)
        {
            echo"<br>";
            echo "YOU WON !!!!";
        }
        else {
            echo"<br>";
            echo"Try Again !!!";
            
        }

    }

    Compare($player_number,$computer_number);
?>