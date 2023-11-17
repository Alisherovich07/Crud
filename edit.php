<?php
include_once('config.php');
$id = (int) $_GET['id'];
$result = $myBase->query("SELECT `id`, `name`, `email`, `phone`, `addres`, `city`, `data` FROM `user` WHERE `id` = " .$id)->fetch_object();
if(isset($_POST['edit'])){
  $name = htmlspecialchars($_POST['ism']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $addres = htmlspecialchars($_POST['addres']);
  $city = htmlspecialchars($_POST['city']);
  $myBase->query("UPDATE `user` SET `name`='$name',`email`='$email',
  `data`='$result->data' WHERE `id` = ".$id);
  header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="conteiner">
  <h1 class="text-center">Edit<?= $id ?> </h1>
        <form method="post">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="ism">
    <div id="emailHelp" class="form-text">We'll never share your name with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="fortext">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="phone" aria-describedby="emailHelp">
    <div id="emailHelp" class="fortext">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Addres</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="addres" aria-describedby="emailHelp">
    <div id="emailHelp" class="fortext">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
  <select name="city">
                 <option>
                    City
                  </option>
                  <option value="">
                    Moscow
                  </option>
                  <option value="">
                    Tashkent
                  </option>
                  <option value="">
                    Nyu-york
                  </option>
                  <option value="">
                    Bishkek
                  </option>
      </select>
  </div>
  <button type="submit" class="btn btn-primary" name="edit">Submit</button>
  
</form>
        </div>          

</body>
</html>