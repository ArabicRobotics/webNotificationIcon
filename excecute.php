<?php 
//include_once($_SERVER['DOCUMENT_ROOT'].'/git/web/remoroboinclude/globals.php');
function DB_query($query)
{
include('connect.php');
        $result = mysqli_query($conn, $query);

    if ($result)
    {
        return mysqli_fetch_all($result);
    } else {
        return mysqli_affected_rows($result);
    }
    
mysqli_close($conn);
}

?>