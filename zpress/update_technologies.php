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
              <li class="breadcrumb-item active">Technology</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<?php

$id = $_GET['edit_id'];
$fetch = "SELECT * FROM technologies WHERE id=$id";
$result = mysqli_query($con, $fetch);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$description = $row['description'];
$existingImage = $row['image'];  

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $newName = $_POST['name'];
    $newDescription = $_POST['description'];
    $newImage = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Check if any changes were made
    if ($newDescription != $description || !empty($newImage)) {
        // Changes were made, proceed with the update

        // Check if a new image is uploaded
        if (!empty($newImage)) {
            // Move the new image
            move_uploaded_file($tempImage, "../Images/Technology/$newImage");

            // Delete the existing image
            if ($existingImage && file_exists("../Images/Technology/$existingImage") && $existingImage !== $newImage) {
                unlink("../Images/Technology/$existingImage");
            }
        } else {
            // If no new image uploaded, keep the existing image as the new image
            $newImage = $existingImage;
        }

        // Prepare update query
        $update_query = "UPDATE technologies SET name='$newName', description='$newDescription', image='$newImage' WHERE id=$id";

        // Execute update query
        $result = mysqli_query($con, $update_query);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href = 'technologies.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        // No changes were made
        echo "<script>alert('No changes made.'); window.location.href = 'technologies.php';</script>";
    }
}
?>






    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="mb-4">Technologies Form</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value = "<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"><?php echo $description; ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
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
include('includes/footer.php');

?>