<?php
require_once 'db_conn.php';

if(isset($_GET['id'])){
    $task_id = $_GET['id']; 
    $stmt = $DB_con->prepare("SELECT * from tasks WHERE id=:task_id");
    $stmt->execute([':task_id' => $task_id]);
    $task = $stmt->fetch(PDO::FETCH_ASSOC);

    

    if(isset($_POST['btn-edit'])){  
        $newtask = $_POST['newTask'];
        $user->updateTask($task_id, $newtask);
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <title>Edit</title>
</head>
<body>
<section class="vh-100">
    <div class="container py-5 h-200">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
              <div class="container">
             <form method="post">
                <div class="mb-4 text-center" >
                  <label for="" class="label-form fs-2">Edit Your Task</label>
                  <input type="text" class="form-control" name="newTask" placeholder="<?=$task['task']?>">
                </div>
                <div class="mb-3 text-center ">
                  <a href="Todolist.php" class="btn btn-danger">Exit</a>
                  <button  name="btn-edit" class="btn btn-primary">Sumbit</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

</body>
</html>