<?php include("db.php"); ?>

<?php include("includes/header.php")?>
        
        <div class="container p-4">
            
            <div class="row">
                
                <div class="col-md-4">

                    <?php if(isset($_SESSION['message'])){?>
                    
                        <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message'] ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php session_unset(); } ?> 

                    <div class="card card-body">
                        <form action="saveTask.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" name="title" placeholder="Titulo de la Tarea" autofocus  required >
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" rows="2" placeholder="Descripción de la Tarea" required ></textarea>
                            </div>
                            <input type="submit" class="btn btn-outline-primary btn-block" name="saveTask" value="Guardar Tarea">
                        </form>
                    </div>

                </div>

                <div class="col-md-8">
                
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Descripción</th>
                                <th>Creado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM task";
                                $resultTasks = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($resultTasks)){ ?>
                                    <tr>
                                        <td><?php echo $row['title']?></td>
                                        <td><?php echo $row['description']?></td>
                                        <td><?php echo $row['created_at']?></td>
                                        <td>
                                            <a class="btn btn-success" href="editTask.php?id=<?php echo $row['id']?>"> <i class="fas fa-marker"></i> </a>
                                            <a  class="btn btn-danger" href="deleteTask.php?id=<?php echo $row['id']?>"> <i class="fas fa-trash-alt"></i> </a>
                                        </td>
                                    </tr>
                                
                                <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

<?php include("includes/footer.php")?>
        
