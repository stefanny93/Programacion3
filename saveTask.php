<?php

    include("db.php");

    if (isset($_POST['saveTask'])){                                                        
        $title = $_POST['title'];                                                          
        $description = $_POST['description'];                                              
        
        $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')"; 
        $result = mysqli_query($conn, $query);                                             

        if(!$result){                                                                      
            die("Query Failed");                                                            
        }

        $_SESSION['message'] = 'Tarea Guardada Correctamente';                          
        $_SESSION['message_type'] = 'primary';
        header("location: index.php");                                                    
    }
?>