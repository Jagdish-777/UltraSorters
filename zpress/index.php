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
              <li class="breadcrumb-item active">View Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <h2 class="mt-5">Home page</h2>
        <form action="home.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bgimage">Banner Image:</label>
                <input type="file" class="form-control-file" id="bgimage" name="bgimage">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<?php
// include('./includes/connect.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $bgimage = $_FILES['bgimage']['name'];
    $temp_bgimage = $_FILES['bgimage']['tmp_name'];

    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    $content = $_POST['content'];

    move_uploaded_file($temp_bgimage,"../Images/Home/$bgimage");
    move_uploaded_file($temp_image,"../Images/Home/$image");
    
    $insert_query = "insert into home(bgImage,image,content) values(?,?,?)";
    $stmt = mysqli_prepare($con,$insert_query);

    mysqli_stmt_bind_param($stmt,"sss",$bgimage,$image,$content);
    $result = mysqli_stmt_execute($stmt);

    if($result){
        echo "<script>alert('successfully inserted.'); window.location.href = 'home.php';</script>";
        exit();
    }else{
        echo "<script>alert('error in inserting.'); window.location.href = 'home.php';</script>";
        exit();
    }

}
?>

    <!-- view home -->

    <div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Background Image</th>
                        <th scope="col">Image</th>
                        <th scope="col">content</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM home";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $bgimage = $row['bgImage'];
      $image = $row['image'];
      $content = $row['content'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td><img src="../Images/Home/' . $bgimage . '" alt="content_image" width="50"></td>
        <td><img src="../Images/Home/' . $image . '" alt="content_image" width="50"></td>
        <td>' . $content . '</td>
        <td>
        <button class="btn btn-primary mb-2"><a href="update_home.php?edit_id='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="home.php?delete_id='.$id.'" class="text-light">Delete</a></button>
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
 
    <?php
include('includes/footer.php');

?>

<!-- Delete home -->

<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query to fetch images associated with the product
    $select_query = "SELECT bgImage,image FROM home WHERE id=$id";
    $result_query = mysqli_query($conn, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $bgimage = $row['bgImage'];
        $image = $row['image'];

        // Construct file paths for both images
        $file_path1 = './includes/images/' . $bgimage;
        $file_path2 = './includes/images/' . $image;

        // Delete record from the database
        $delete_query = "DELETE FROM home WHERE id=$id";
        $result_query = mysqli_query($conn, $delete_query);

        if ($result_query) {
            // Delete the image files if they exist
            if (file_exists($file_path1)) {
                unlink($file_path1);
            }
            if (file_exists($file_path2)) {
                unlink($file_path2);
            }

            echo "<script>alert('Deleted successfully'); window.location.href = 'home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting record'); window.location.href = 'home.php';</script>";
        }
    } else {
        echo "<script>alert('Error fetching images'); window.location.href = 'home.php';</script>";
    }
}
?>