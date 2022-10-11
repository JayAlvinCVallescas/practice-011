<?php

    require ('vendor/autoload.php');
    $faker = Faker\Factory::create();

    $conn = mysqli_connect("localhost","root","jay123456789","logapp_test");

    if(!$conn)
    {   
    die(mysqli_connect_error());
    }  

    for ($i=0; $i <= 19; $i++){   
    $userIdNumber = rand(1,100);
    $sql = "INSERT INTO logapp_test.carddetail(creditCardType,creditCardNumber,creditCardExpirationDate,userIdNumber) values('".$faker->creditCardType."','".$faker->creditCardNumber."','".$faker->creditCardExpirationDate->format('Y-m-d H:i:s')."','".$userIdNumber."')";     
    mysqli_query($conn, $sql);}

?>