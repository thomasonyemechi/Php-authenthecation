<?php
session_start(); ob_clean();

include('lib/connect.inc.php');

if(isset($_SESSION['user_id'])){}else{ header("location: login.php"); }

$user = $_SESSION['user_id'];

$sql = $db->query("SELECT * FROM users WHERE sn='$user' ")or die('cannot connect');
$data = mysqli_fetch_array($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user table</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>


<body>
<div class="container">
  <h2>Users Table</h2>           
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>SN</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <?php 
    $sql =$db->query("SELECT * FROM users WHERE status =1");
    while($data = mysqli_fetch_assoc($sql)){

    ?>
    <tbody>
      <tr>
        <td><?php echo $data['sn'] ?></td>
        <td><?php echo ucwords($data['surname']); ?></td>
        <td><?php echo ucwords($data['othernames']); ?></td>
        <td><?php echo ucwords($data['email']); ?></td>
        <td><button type= "button" class ="btn btn-primary btn-block mb-2" id="toggleMyModal"
          data-sn="<?php echo $data['sn']; ?>" >profile</button></td>
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>




<div class="modal fade" id="userTable" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
      <div>
        <div class="col-lg-12 col-md-12 col-12 mb-2">     
          <h5 id="name"></h5>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn-primary btn" name="userTable">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



</body>

    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
	  <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(function () {
          $('body').on('click', '#toggleMyModal', function () {
              const sn = $(this).data('sn');
              console.log(sn);
              $.ajax({
                url: 'test.php?userId='+sn,
                method: 'GET'

                // beforeSend: () => {
                //   $('#toggleMyModal').html(`Loading Profile....`)
                // }
              }).done( (res) => {
                res = JSON.parse(res);
                $('#userTable').modal('show');
                $('#edit_modal').modal('show');
                $('#name').html(res.surname +' '+res.othernames);
                // $('#title').val(title);
                // $('#description').val(description);
                // $('#slug').val(slug);
              });
              
          })
      })
  </script>

</html>