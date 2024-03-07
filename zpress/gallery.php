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
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="mb-4">Gallery</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="bottom_content">Bottom Content:</label>
                <textarea class="form-control" id="bottom_content" name="bottom_content" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link:</label>
                <input type="url" class="form-control" id="link" name="link">
            </div>

            <div class="form-group">
                <label for="content_type">Choose Content Type:</label>
                <select class="form-control" id="content_type" name="content_type" required>
                    <option value="choose">choose content type</option>
                    <option value="general">General</option>
                    <option value="custom">custom</option>
                    <option value="grain samples">Grain samples</option>
                    <option value="samples">Samples</option>
                    <!-- Add more options if needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="gallery_type">Choose Gallery Type:</label>
                <select class="form-control" id="gallery_type" name="gallery_type" required>
                    <option value="text">Gallery type</option>
                    <option value="photo">Photo</option>
                    <option value="video">Video</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Choose Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary" name="gallery">Submit</button>
        </form>
    </div>

    <!-- Bootstrap ck editor link -->
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>


    <!-- calling ck editor function -->
    <script>
        ClassicEditor
            .create(document.querySelector('#bottom_content'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>



<?php
if(isset($_POST['gallery'])){
    $name = $_POST['name'];
    $bottom_content = $_POST['bottom_content'];
    $link = $_POST['link'];
    $content_type = $_POST['content_type'];
    $gallery_type = $_POST['gallery_type'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"../Images/Gallery/$image");

    //insert query
    $insert_query = "insert into gallery(name,bottom_content,link,content_type,gallery_type,image) 
    values('$name','$bottom_content','$link','$content_type','$gallery_type','$image')";
    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('inserted successfully.'); window.location.href = 'gallery.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }

}
?>

<!-- View Gallery  -->

    <div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">name</th>
                        <th scope="col">bottom_content</th>
                        <th scope="col">link</th>
                        <th scope="col">content_type</th>
                        <th scope="col">gallery_type</th>
                        <th scope="col">image</th>
                        <th scope="col">date</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM gallery";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $name = $row['name'];
      $bottom_content = $row['bottom_content'];
      $link = $row['link'];
      $content_type = $row['content_type'];
      $gallery_type = $row['gallery_type'];
      $image = $row['image'];
      $date = $row['date'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $name . '</td>
        <td>' . $bottom_content . '</td>
        <td><a href=' . $link . ' alt="link" target="_blank">link</a></td>
        <td>' . $content_type . '</td>
        <td>' . $gallery_type . '</td>
        <td><img src="../Images/Gallery/' . $image . '" alt="Employee Image" width="50"></td>
        <td>' . $date . '</td>
        <td>
        <button class="btn btn-primary mb-3"><a href="update_gallery.php?edit_id='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="javascript:void()" onClick="chkalert('.$id.')" class="text-light">Delete</a></button>
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
    <script type="text/javascript">
        function chkalert(id){
            sts = confirm('are you sure you want to delete it.');
            if(sts){
                document.location.href=`gallery.php?delete_id=${id}`
            }
        }
    </script>


<!-- Delete Gallery  -->

<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query
    $select_query = "SELECT image FROM gallery WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $image = $row['image'];

        $file_path = '../Images/Gallery/' . $image; 

        // Delete record from the database
        $delete_query = "DELETE FROM gallery WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if ($result_query) {
            // Delete the image file if it exists
            if (file_exists($file_path)) {
                if (unlink($file_path)) {
                    // Display success message and redirect
                    echo "<script>alert('Deleted successfully'); window.location.href = 'gallery.php';</script>";
                    exit(); // Exit to prevent further execution
                } else {
                    echo "<script>alert('Error deleting file');</script>";
                }
            } else {
                // If the file does not exist, still proceed to redirect
                echo "<script>alert('Deleted successfully'); window.location.href = 'gallery.php';</script>";
                exit(); // Exit to prevent further execution
            }
        } else {
            echo "<script>alert('Error deleting record');</script>";
        }
    } else {
        echo "<script>alert('Error fetching record');</script>";
    }
}
?>
<?php
include('includes/footer.php');

?>