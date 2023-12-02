<?php

session_start();

if (isset($_GET['id']) && isset($_SESSION['userId']))
{
    
    require 'dbh.inc.php';
    
    $event = $_GET['id'];
    
    if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 'event';
    }
    
    $sql = "SELECT COUNT(*) FROM event_info WHERE event = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../".$page.".php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $event);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_array($result);
        if ($row[0] > 0)
        {
            $sql = "DELETE FROM event_info WHERE event = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../".$page.".php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "s", $event);
                mysqli_stmt_execute($stmt);
            }
        }
    
        $sql = "DELETE FROM events WHERE event_id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../".$page.".php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $event);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: ../".$page.".php");
            exit();
        }
    }
}  