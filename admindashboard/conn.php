<?php
    
    $local_servername = "localhost"; // Change this to your local database server
    $local_username = "root"; // Change this to your database username
    $local_password = ""; // Change this to your database password
    $local_database = "coupen_db"; // Change this to your database name
    
    $production_servername = "sdb-61.hosting.stackcp.net"; // Change this to your local database server
    $production_username = "crazzycoupon-353032378b47"; // Change this to your database username
    $production_password = "k9n348o91y"; // Change this to your database password
    $production_database = "crazzycoupon-353032378b47"; // Change this to your database name

    // Create connection
    $conn = mysqli_connect($local_servername, $local_username, $local_password, $local_database);   
    
    // $conn = mysqli_connect('sdb-61.hosting.stackcp.net','crazzycoupon-353032378b47','k9n348o91y','crazzycoupon-353032378b47');

    if(!$conn){
        echo "Failed" . mysqli_error($conn); 
    }


?>