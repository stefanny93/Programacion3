<?php
    include("db.php");

    if(isset($_GET['id'])){
        
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];

        }

    }

    if(isset($_POST['update'])){
        
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Tarea Editada Exitosamente';
        $_SESSION['message_type'] = 'warning';

        header("Location: index.php");
    }
?>

<?php include("includes/header.php")?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="editTask.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input  class="form-control" type="text" name="title" value="<?php echo $title; ?>" placeholder="Edita el Titulo">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="2"> <?php echo $description; ?> </textarea>
                        </div>
                        <button class="btn btn-primary" name="update" type="submit">Editar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include("includes/footer.php")?>