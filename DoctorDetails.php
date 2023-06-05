<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Doctors</title>
   <link rel="stylesheet" href="./CSS/DoctorList.css">
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="./CSS/Style.css">
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
   <?php


   @include 'config.php';
   ?>
   <?php @include("./Components/Header.php") ?>
   <?php

   //   Queries
   $select = mysqli_query($conn, "SELECT * FROM users");

   
   
   ?>
   <!-- Product table -->
   <div class="products">
      <table class="tblproduct">
         <form method="POST">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>Doctor Name</th>
                  <th>Contact</th>
                  <th>SPECIALITY</th>
                  <th>Availability</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['contact'] ?></td>
                  <td><?php echo $row['SPECIALITY'] ?></td>
                  <td><?php echo $row['AVAILABILITY'] ?></td>
               </tr>
            <?php } ?>
      </table>
      </form>
   </div>

   </div>





</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>