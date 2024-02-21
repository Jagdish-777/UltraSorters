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
              <li class="breadcrumb-item active">Technologies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="mb-4">Technologies Form</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <!-- DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
        new DataTable('#example');
    </script>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"../Images/Technology/$image");

    $insert_query = "insert into technologies(name,description,image) values(?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"sss",$name,$description,$image);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        echo "<script>alert('successfully inserted.'); window.location.href = 'technologies.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }


}
?>


<!-- view technologies -->

<div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">image</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM technologies";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $name = $row['name'];
      $description = $row['description'];
      $image = $row['image'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $name . '</td>
        <td>' . $description . '</td>
        <td><img src="../Images/Technology/' . $image . '" alt="content_image" width="50"></td>
        <td>
        <button class="btn btn-primary"><a href="update_technologies.php?edit_id='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="technologies.php?delete_id='.$id.'" class="text-light">Delete</a></button>
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
<!-- </body>
</html> -->


<!-- Delete Technologies -->

<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query
    $select_query = "SELECT image FROM technologies WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $image = $row['image'];

        $file_path = '../Images/Technology/' . $image; 


        $delete_query = "DELETE FROM technologies WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if (file_exists($file_path)) {
            if (unlink($file_path)) {
                echo "<script>alert('Deleted successfully'); window.location.href = 'technologies.php';</script>";
            } else {
                echo "<script>alert('Error deleting file'); window.location.href = 'technologies.php';</script>";
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
