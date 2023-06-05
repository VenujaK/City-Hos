<html lang="en">

<head>
  <link rel="stylesheet" href="./CSS/AdminInterface.css">
</head>

<body>

  <button style="--clr:#39FF14" onclick="openPage1()"><span>Lab Services</span><i></i></button>
  <button style="--clr:#FF44CC" onclick="openPage()"><span>Hospital Services</span><i></i></button>
  <button style="--clr:#FF44CC" onclick="openPage2()"><span>Queries</span><i></i></button>
  <button style="--clr:#FF44CC" onclick="openPage3()"><span>Service Appointments</span><i></i></button>

</body>
<script>
function openPage() {
  window.location.href = "./HosServiceInsert.php";
}
function openPage1() {
  window.location.href = "./LabServiceInsert.php";
}
function openPage2() {
  window.location.href = "./Queries.php";
}
function openPage3() {
  window.location.href = "./Appointments.php";
}
</script>
</html>