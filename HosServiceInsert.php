<?php

@include './config.php';

// Product insert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the update_service form field is set
  if (!isset($_POST['update_service'])) {
    // Only execute the INSERT query if the update_service form field is not set
    $hosService_name = mysqli_real_escape_string($conn, isset($_POST['hosService_name']) ? $_POST['hosService_name'] : '');
    $hosService_Des = mysqli_real_escape_string($conn, isset($_POST['hosService_Des']) ? $_POST['hosService_Des'] : '');
    $hosService_Img = isset($_FILES['hosService_Img']['name']) ? $_FILES['hosService_Img']['name'] : '';
    $product_image_tmp_name1 = isset($_FILES['hosService_Img']['tmp_name']) ? $_FILES['hosService_Img']['tmp_name'] : '';
    $product_image_folder1 = 'uploaded_img/' . $hosService_Img;

    if (empty($hosService_name) || empty($hosService_Des)  || empty($hosService_Img)) {
      $message[] = 'please fill out all';
    } else {
      try {
        $insert = "INSERT INTO hosservice (HSNAME, HSDES, HIMG) VALUES( '$hosService_name','$hosService_Des','$hosService_Img')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
          move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
          $message[] = 'new service added successfully';
        } else {
          throw new Exception(mysqli_error($conn));
        }
      } catch (Exception $e) {
        $error = $e->getMessage();
        $message[] = "Could not add the service: $error";
      }
    }
  }
}

if(isset($_POST['update_service'])){
  $hosService_ID = htmlspecialchars($_POST['hosService_ID']);
  $hosService_name = htmlspecialchars($_POST['hosService_name']);
  $hosService_Des = htmlspecialchars($_POST['hosService_Des']);
  
  $hosService_Img = htmlspecialchars($_FILES['hosService_Img']['name']);
  $product_image_tmp_name1 = htmlspecialchars($_FILES['hosService_Img']['tmp_name']);
  $product_image_folder1 = 'uploaded_img/' . htmlspecialchars($hosService_Img);
  
   if (empty($hosService_name) || empty($hosService_Des)  || empty($hosService_Img)) {
    $message[] = 'please fill out all';
  } else {

      $update_data = "UPDATE hosservice SET HSNAME='$hosService_name', HSDES='$hosService_Des', HIMG='$hosService_Img'  WHERE HSID = '$hosService_ID'";
      $upload1 = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload1){
         move_uploaded_file($product_image_tmp_name1, $product_image_folder1);
         $message[] = 'new service added successfully';
         header('location:HosServiceInsert.php');
      }else{
         $message[] = 'Something went Wrong!'; 
      }

   }
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/ServiceInsert.css">
</head>
<body>
  <div class="container">
    <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <h3> Add Service</h3>
      <h4>Please insert Service details here</h4>
      
      <fieldset>
        <input placeholder="Service ID" name="hosService_ID" type="text" tabindex="1"  autofocus ">
      </fieldset>
      <fieldset>
        <input placeholder="Service Name" name="hosService_name" type="text" tabindex="1" required autofocus ">
      </fieldset>
      <fieldset>
        <!-- <input placeholder="Service Desription" name="hosService_Des" type="tel" tabindex="2" required "> -->
        <textarea placeholder="Type item description here...." name="hosService_Des" tabindex="2" required></textarea>
      </fieldset>
      <fieldset>
        <input placeholder="" type="file" name="hosService_Img" tabindex="3" required>
      </fieldset>
      <!-- <fieldset>
        <textarea placeholder="Type item description here...." name="product_des" tabindex="4" required></textarea>
      </fieldset> -->

<?php if (!empty($message)): ?>
  <div class="message">
    <?php foreach ($message as $msg): ?>
      <p><?php echo $msg ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
<input type="submit" name="add_product" value="Submit" id="contact-submit">
<input type="submit" name="update_service" value="Update" id="contact-submit">
</form>
</div>
</body>
</html>

