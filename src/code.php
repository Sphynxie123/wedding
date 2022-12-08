<?php
    session_start();
    require 'dbcon.php';
    
    if(isset($_POST['questDelete']))
    {
        $id = mysqli_real_escape_string($con, $_POST['questDelete']);

        $query = "DELETE FROM quest WHERE id='$id'";  

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "Svečias sekmingai ištrintas";
            header("Location: questList.php");
            exit(0);
        } else 
        {
            $_SESSION['message'] = "Svečias neištrintas";
            header("Location: questList.php");
            exit(0);
        }  
        
    }
    
    if(isset($_POST['updateQuest']))
    {
        $id = mysqli_real_escape_string($con, $_POST['id']);
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $surname = mysqli_real_escape_string($con, $_POST['surname']);
        $city = mysqli_real_escape_string($con, $_POST['city']);

        $query = "UPDATE quest SET name='$name', surname='$surname', city='$city' 
                    WHERE id='$id' ";  

        $query_run = mysqli_query($con, $query);
    
        if($query_run)
        {
            $_SESSION['message'] = "Svečias atnaujinas sekmingai";
            header("Location: questList.php");
            exit(0);
        } else 
        {
            $_SESSION['message'] = "Svečias neatnaujinas";
            header("Location: questList.php");
            exit(0);
        }       
    }
    if(isset($_POST['saveQuest']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $surname = mysqli_real_escape_string($con, $_POST['surname']);
        $city = mysqli_real_escape_string($con, $_POST['city']);

        $query = "INSERT INTO quest (name, surname, city) VALUES
                    ('$name', '$surname', '$city')";

        $query_run = mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['message'] = "Svečias sukurtas sekmingai";
            header("Location: questCreate.php");
            exit(0);
        } else 
        {
            $_SESSION['message'] = "Svečias ne sukurtas";
            header("Location: questCreate.php");
            exit(0);
        }       
    }
?>