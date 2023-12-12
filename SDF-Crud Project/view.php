<?php
require_once 'db_conn.php';

if(isset($_GET['id'])){
    $user_id = $_GET['id']; 
    $stmt = $DB_con->prepare("SELECT * from tasks WHERE user_id=:user_id");
    $stmt->execute([':user_id' => $user_id]);
    $tasks = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <title>User Tasks</title>
</head>
<body>
<section class="vh-100">
    <div class="container py-5 h-200">
      
      </div>
    </div>
</section>

</body>
</html>