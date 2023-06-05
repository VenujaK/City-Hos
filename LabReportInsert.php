<?php

@include './config.php';

// service insert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the update_report form field is set
  if (!isset($_POST['update_report'])) {
    // Only execute the INSERT query if the update_report form field is not set
    $labReportP_name = mysqli_real_escape_string($conn, isset($_POST['labReportP_name']) ? $_POST['labReportP_name'] : '');
    $labReportP_Des = mysqli_real_escape_string($conn, isset($_POST['labReportP_Des']) ? $_POST['labReportP_Des'] : '');
    $contact = mysqli_real_escape_string($conn, isset($_POST['labReport_contact']) ? $_POST['labReport_contact'] : '');

    if (empty($labReportP_name) || empty($labReportP_Des)  || empty($contact)) {
      $message[] = 'please fill out all';
    } else {
      try {
        $insert = "INSERT INTO labreport (PNAME, LRDES, PCONTACT) VALUES( '$labReportP_name','$labReportP_Des','$contact')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
          
          $message[] = 'new report added successfully';
        } else {
          throw new Exception(mysqli_error($conn));
        }
      } catch (Exception $e) {
        $error = $e->getMessage();
        $message[] = "Could not add the report: $error";
      }
    }
  }
}

if(isset($_POST['update_report'])){
  $labReport_ID = htmlspecialchars($_POST['labReport_ID']);
  $labReportP_name = htmlspecialchars($_POST['labReportP_name']);
  $labReportP_Des = htmlspecialchars($_POST['labReportP_Des']);
  $contact = !empty($_POST['labReport_contact']) ? htmlspecialchars($_POST['labReport_contact'], ENT_QUOTES, 'UTF-8') : '';


   if (empty($labReport_ID) ||empty($labReportP_name) || empty($labReportP_Des)  || empty($contact)) {
    $message[] = 'please fill out all';
  } else {

      $update_data = "UPDATE labreport SET PNAME='$labReportP_name', LRDES='$labReportP_Des', PCONTACT='$contact'  WHERE LRID = '$labReport_ID'";
      $upload1 = mysqli_query($conn, $update_data);
      // echo $update_data;

      if($upload1){
         move_uploaded_file($Labservice_image_tmp_name1, $Labservice_image_folder1);
         $message[] = 'new report added successfully';
         header('location:LabReportInsert.php');
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
      <h3> Add Report</h3>
      <h4>Please insert Report details here</h4>
      
      <fieldset>
        <input placeholder="Report ID" name="labReport_ID" type="text" tabindex="1"  autofocus ">
      </fieldset>
      <fieldset>
        <input placeholder="Patient Name " name="labReportP_name" type="text" tabindex="2" required autofocus ">
      </fieldset>
      <fieldset>
        <!-- <input placeholder="Service Desription" name="labReportP_Des" type="tel" tabindex="2" required "> -->
        <textarea placeholder="Type item description here...." name="labReportP_Des" tabindex="3" required></textarea>
      </fieldset>
      <fieldset>
        <input placeholder="Contact No" name="labReport_contact" type="text" tabindex="4" required autofocus ">
      </fieldset>
      

<?php if (!empty($message)): ?>
  <div class="message">
    <?php foreach ($message as $msg): ?>
      <p><?php echo $msg ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
<input type="submit" name="add_report" value="Submit" id="contact-submit">
<input type="submit" name="update_report" value="Update" id="contact-submit">
</form>
</div>
</body>
</html>

