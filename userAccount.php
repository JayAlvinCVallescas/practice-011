<?php

    require ('vendor/autoload.php');
    $faker = Faker\Factory::create();

    $conn = mysqli_connect("localhost","root","jay123456789","logapp_test");

    if(!$conn)
    {   
    die(mysqli_connect_error());
    }  

    for ($i=0; $i <= 99; $i++){   
    $fakerPassword = preg_replace('/[^a-z0-9]/i','a',$faker->password);
    $sql = "INSERT INTO logapp_test.useraccount(email,lastName,firstName,userName,password) values('".$faker->email."','".$faker->lastName."','".$faker->firstName."','".$faker->userName."','".$fakerPassword."')";     
    mysqli_query($conn, $sql);}

?>