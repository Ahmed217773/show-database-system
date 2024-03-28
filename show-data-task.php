<?php
$ID=$_POST["ID"];
$name=$_POST["name"];
$last_name=$_POST["last_name"];
$date_of_birth=$_POST["date_of_birth"];
$host="localhost";
$username="root";
$password="";
$dbname="school2";
$con= mysqli_connect($host, $username, $password,  $dbname);
$query_select = "SELECT * FROM `teachers`";
$select = mysqli_query($con, $query_select);
$query_INSERT="INSERT INTO `teachers`(`teacher_id`, `first_name`, `last_name`, `date_of_birth`) VALUES  ('$ID','$name','$last_name','$date_of_birth')";
mysqli_query($con,$query_INSERT);
$teachers = $select->fetch_all(MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>teachers</title>
</head>

<body>
  <table class="table table-dark table-striped w-100 text-center   align-items-center m-auto ">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">first-name</th>
        <th scope="col">last-name</th>
        <th scope="col">date-of-birth</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($teachers as $tech) :      ?>
        <tr>
          <th scope="row"><?php echo $tech['teacher_id']  ?></th>
          <td><?php echo $tech['first_name']  ?></td>
          <td><?php echo $tech['last_name']  ?></td>
          <td><?php echo $tech['date_of_birth']  ?></td>
        </tr>
      <?php endforeach      ?>
    </tbody>
  </table>
</body>

</html>