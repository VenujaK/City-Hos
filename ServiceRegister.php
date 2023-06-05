<?php

@include './config.php';

// service insert
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!isset($_POST['update_report'])) {

    $patient_name = mysqli_real_escape_string($conn, isset($_POST['patient_name']) ? $_POST['patient_name'] : '');
    $Service_name = mysqli_real_escape_string($conn, isset($_POST['Service_name']) ? $_POST['Service_name'] : '');
    $mail = mysqli_real_escape_string($conn, isset($_POST['mail']) ? $_POST['mail'] : '');
    $docname = mysqli_real_escape_string($conn, isset($_POST['docname']) ? $_POST['docname'] : '');
    

    if (empty($patient_name) || empty($Service_name)  || empty($mail)) {
      $message[] = 'please fill out all';
    } else {
      try {
        $insert = "INSERT INTO servicereg (PNAME, SNAME, MAIL, DOCNAME) VALUES( '$patient_name','$Service_name','$mail','$docname')";
        $upload = mysqli_query($conn, $insert);
        if ($upload) {
          
          $message[] = 'Thank you for Registering';
        } else {
          throw new Exception(mysqli_error($conn));
        }
      } catch (Exception $e) {
        $error = $e->getMessage();
        $message[] = "Something Went Wrong!!!";
      }
    }
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./CSS/ServiceRegister.css">
</head>
<body>
    
  <div class="container">
    <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <h3> Register Here</h3>
      <h4>Please insert Service details here</h4>
      
      
      <fieldset>
        <input placeholder="Patient Name" name="patient_name" type="text" tabindex="1" required autofocus >
      </fieldset>
      <fieldset>
      <input placeholder="Service Name" name="Service_name" type="text" tabindex="2" required  >
      </fieldset>
      <fieldset>
        <input placeholder="e-mail " name="mail" type="text" tabindex="3" required  >
      </fieldset>
      <fieldset>
        <input placeholder="Doctor Name " name="docname" type="text" tabindex="4" required  >
      </fieldset>
      

<?php if (!empty($message)): ?>
  <div class="message">
    <?php foreach ($message as $msg): ?>
      <p><?php echo $msg ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
<input type="submit" name="add_Appointment" value="Submit" id="mail-submit">
<!-- <input type="submit" name="update_report" value="Update" id="mail-submit"> -->
</form>
</div>
</body>
</html>

