<?php
include_once('config.php');
$sql = "SELECT * FROM `user` WHERE 1";
$query = $myBase->query($sql);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">addres</th>
      <th scope="col">city</th>
      <th scope="col">Time entered</th>
  </thead>
  <tbody>
  <?php while($row = $query->fetch_object()):?>
    <tr>
      <th scope="row"><?= $row->id?></th>
      <td><?= $row->name?></td>
      <td><?= $row->email?></td>
      <td><?=$row->phone?></td>
      <td><?=$row->addres?></td>
      <td><?=$row->city?></td>
      <td><?= $row->data?></td>
      <td>
        <a href="edit.php?id=<?=$row->id?>"><button type="button" class="btn btn-warning">Edit</button></a>
        <a href="delete.php?id=<?=$row->id?>" onclick="confirm('delete')"><button type="button" class="btn btn-danger">Delete</button></a>

      </td>
    </tr>
    <?php endwhile;?>
  </tbody>
 
</table>
<button type="button" class="btn btn-primary" ><a style="text-decoration:none; color:#fff;" href="create.php">Sign Up +</a></button>

    </div>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>