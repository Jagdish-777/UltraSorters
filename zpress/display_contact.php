<?php
include('./includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">
  <title>Display contact</title>
</head>

<body>
  <div class="container mt-5">
    <div class="table-responsive">
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">Name</th>
            <th scope="col">email</th>
            <th scope="col">company</th>
            <th scope="col">description</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>

          <?php
  $select_query = "SELECT * FROM contact";
  $result_query = mysqli_query($conn, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $company = $row['comapany'];
      $description = $row['description'];
      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $company . '</td>
        <td>' . $description . '</td>
        <td>
        <button class="btn btn-danger"><a href="display_contact.php?contact_id='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
      $serial_number++; // Increment the serial number for the next row
    }
  }
  ?>

        </tbody>
      </table>
    </div>
  </div>
  <!-- DataTables JavaScript -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
  <script>
    new DataTable('#example');
  </script>
</body>

</html>


<!-- Delete Contact  -->

<?php
if(isset($_GET['contact_id'])){
    $id = $_GET['contact_id'];

    $delete_query = "delete from contact where id=$id";
    $result_query = mysqli_query($conn,$delete_query);
    if($result_query){
        echo "<script>alert('Deleted successfully'); window.location.href = 'display_contact.php';</script>";
    }else{
        die(mysqli_error($conn));
    }
}
?>