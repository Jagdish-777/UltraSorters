<?php
session_start();

// Check if user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to the login page
    header("Location: login.php");
    exit();
}

include('./connections/dbconnect.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');

?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
              <li class="breadcrumb-item active">View Careers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container mt-5">
    <div class="table-responsive">
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">S.No</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Contact_Number</th>
            <th scope="col">alternate_contact_number</th>
            <th scope="col">category</th>
            <th scope="col">cv</th>
            <th scope="col">message</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>

          <?php
  $select_query = "SELECT * FROM careers";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $fname = $row['first_name'];
      $lname = $row['last_name'];
      $email = $row['email'];
      $contact_number = $row['contact_number'];
      $alt_number = $row['alternate_number'];
      $category = $row['categories'];
      $cv = $row['cv'];
      $message = $row['message'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $fname . '</td>
        <td>' . $lname . '</td>
        <td>' . $email . '</td>
        <td>' . $contact_number . '</td>
        <td>' . $alt_number . '</td>
        <td>' . $category . '</td>
        <td><a href="./files/' . $cv . '" alt="cv" target="_blank">view cv</a></td>
        <td>' . $message . '</td>
        <td>
        <button class="btn btn-danger"><a href="career.php?delete_id='.$id.'" class="text-light">Delete</a></button>
        </td>
      </tr>';
      $serial_number++; // Increment the serial number for the next row
    }
  }
  ?>

        </tbody>
      </table>
      <!-- DataTables JavaScript -->
      <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
      <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    </div>
  </div>
<?php
include('includes/footer.php');

?>


<!-- Delete carrers -->

<?php

if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query
    $select_query = "SELECT cv FROM careers WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $cv = $row['cv'];

        $file_path = './files/' . $cv; 


        $delete_query = "DELETE FROM careers WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "<script>alert('Deleted successfully'); window.location.href = 'career.php';</script>";
                exit();
            } else {
                echo "<script>alert('Error deleting file'); window.location.href = 'career.php';</script>";
                exit();
            }
        }
    } else {
        die(mysqli_error($con));
    }
} else {
    die(mysqli_error($con));
}

?>