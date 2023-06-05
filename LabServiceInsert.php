<?php

@include './config.php';

// service insert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the update_service form field is set
  if (!isset($_POST['update_service'])) {
    // Only execute the INSERT query if the update_service form field is not set
    $labService_name = mysqli_real_escape_string($conn, isset($_POST['labService_name']) ? $_POST['labService_name'] : '');
    $labService_Des = mysqli_real_escape_string($conn, isset($_POST['labService_Des']) ? $_POST['labService_Des'] : '');
    $labService_Img = isset($_FILES['labService_Img']['name']) ? $_FILES['labService_Img']['name'] : '';
    $Labservice_image_tmp_name1 = isset($_FILES['labService_Img']['tmp_name']) ? $_FILES['labService_Img']['tmp_name'] : '';
    $Labservice_image_folder1 = 'uploaded_img/' . $labService_Img;

    if (empty($labService_name) || empty($labService_Des)  || empty($labService_Img)) {
      $message[] = 'please fill out all';
    } else {
      try {
        $insert = "INSERT INTO labservice (LSNAME, LSDES, LSIMG) VALUES( '$labService_name','$labService_Des','$labService_Img')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
          move_uploaded_file($Labservice_image_tmp_name1, $Labservice_image_folder1);
          $message[] = 'new Service added successfully';
        } else {
          throw new Exception(mysqli_error($conn));
        }
      } catch (Exception $e) {
        $error = $e->getMessage();
        $message[] = "Could not add the Service: $error";
      }
    }
  }
}

if(isset($_POST['update_service'])){
  $hosService_ID = htmlspecialchars($_POST['hosService_ID']);
  $labService_name = htmlspecialchars($_POST['labService_name']);
  $labService_Des = htmlspecialchars($_POST['labService_Des']);
  
  $labService_Img = htmlspecialchars($_FILES['labService_Img']['name']);
  $Labservice_image_tmp_name1 = htmlspecialchars($_FILES['labService_Img']['tmp_name']);
  $Labservice_image_folder1 = 'uploaded_img/' . htmlspecialchars($labService_Img);
  
   if (empty($labService_name) || empty($labService_Des)  || empty($labService_Img)) {
    $message[] = 'please fill out all';
  } else {

      $update_data = "UPDATE labservice SET LSNAME='$labService_name', LSDES='$labService_Des', LSIMG='$labService_Img'  WHERE LSID = '$hosService_ID'";
      $upload1 = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload1){
         move_uploaded_file($Labservice_image_tmp_name1, $Labservice_image_folder1);
         $message[] = 'new Service added successfully';
         header('location:LabServiceInsert.php');
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
        <input placeholder="Service Name" name="labService_name" type="text" tabindex="1" required autofocus ">
      </fieldset>
      <fieldset>
        <!-- <input placeholder="Service Desription" name="labService_Des" type="tel" tabindex="2" required "> -->
        <textarea placeholder="Type item description here...." name="labService_Des" tabindex="2" required></textarea>
      </fieldset>
      <fieldset>
        <input placeholder="" type="file" name="labService_Img" tabindex="3" required>
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
<input type="submit" name="add_service" value="Submit" id="contact-submit">
<input type="submit" name="update_service" value="Update" id="contact-submit">
</form>
</div>
</body>
</html>

