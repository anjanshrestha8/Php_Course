<?php
    // create a database called-> foods
    // database k field -> id(int pk,ai) ,, name(varchar()),, created_at (time-stamp), updated_at(time-stamp) ,

    # connect to the data base 
    # fetch the data 
    # display the data 



    # MYSQLI or POD
    # MYSQLI(POD)


    // CODE STARTS HERE
    $hostname='localhost';
    $username='root';
    $password='anjanshrestha8';
    $dbname='foods';

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    echo"connection vako xa la ";

    // fetch all from database
    $query = 'Select * from momos';
    $query_run = mysqli_query($conn,$query);
    $rows = mysqli_fetch_all($query_run,MYSQLI_ASSOC);

    // echo"<pre>";
    // var_dump($rows);
    // echo"</pre>";

?>

<ul>
    <?php
        foreach($rows as $values){
            echo"<li>{$values['id']}-{$values['name']}</li>";
        }
    ?>

</ul>