<?php
// include('./includes/connect.php');

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
              <li class="breadcrumb-item active">Testimonials</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5">
        <h2 class="mb-4">Client Feedback Form</h2>

        <form action="testimonials.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="client_name">Client Name:</label>
                <input type="text" class="form-control" id="client_name" name="client_name" required>
            </div>

            <div class="form-group">
                <label for="client_comments">Client Comments:</label>
                <textarea class="form-control" id="client_comments" name="client_comments" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="client_profession">Client Profession:</label>
                <input type="text" class="form-control" id="client_profession" name="client_profession" required>
            </div>

            <div class="form-group">
                <label for="client_image">Upload Client Image:</label>
                <input type="file" class="form-control-file" id="client_image" name="client_image" accept="image/*"
                    required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit_feedback">Submit Feedback</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $client_name = $_POST['client_name'];
    $client_comments = $_POST['client_comments'];
    $client_profession = $_POST['client_profession'];
    $client_image = $_FILES['client_image']['name'];
    $temp_image = $_FILES['client_image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"../Images/Testimonials/$client_image");

    //insert query
    $insert_query = "insert into testimonials(client_name,client_comment,client_profession,client_image) 
    values('$client_name','$client_comments','$client_profession','$client_image')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('inserted successfully.')</script>";
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }


}
?>


<!-- View testimonials -->

<body>
    <div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">client comments</th>
                        <th scope="col">client profession</th>
                        <th scope="col">client image</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM testimonials";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $client_name = $row['client_name'];
      $client_comment = $row['client_comment'];
      $client_profession = $row['client_profession'];
      $client_image = $row['client_image'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $client_name . '</td>
        <td>' . $client_comment . '</td>
        <td>' . $client_profession . '</td>
        <td><img src="../Images/Testimonials/' . $client_image . '" alt="content_image" width="50"></td>
        <td>
        <button class="btn btn-primary"><a href="update_testimonials.php?edit_id='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="testimonials.php?delete_id='.$id.'" class="text-light">Delete</a></button>
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
    




<!-- Delete testimonials -->

<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query
    $select_query = "SELECT client_image FROM testimonials WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $image = $row['client_image'];

        $file_path = './includes/images/' . $image; 


        $delete_query = "DELETE FROM testimonials WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "<script>alert('Deleted successfully'); window.location.href = 'products.php';</script>";
            } else {
                echo "<script>alert('Error deleting file'); window.location.href = 'products.php';</script>";
            }
        }
    } else {
        die(mysqli_error($con));
    }
} else {
    die(mysqli_error($con));
}

?>


<?php
include('includes/footer.php');

?>