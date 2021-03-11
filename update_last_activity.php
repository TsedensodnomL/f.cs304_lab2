<?php

//update_last_activity.php

include('database_connection.php');

session_start();

function update_last_activity(){
    $query = "
    UPDATE login_details 
    SET last_activity = now() 
    WHERE login_details_id = '".$_SESSION["login_details_id"]."'
    ";

    $statement = $connect->prepare($query);

    $statement->execute();
}

?>

