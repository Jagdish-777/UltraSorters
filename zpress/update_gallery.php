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
              <li class="breadcrumb-item active">Update Gallery</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<?php

$id = $_GET['edit_id'];
$fetch = "SELECT * FROM gallery WHERE id=$id";
$result = mysqli_query($con, $fetch);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$bottom_content = $row['bottom_content'];  
$link = $row['link'];
$content_type = $row['content_type'];
$gallery_type = $row['gallery_type'];
$existingImage = $row['image'];  // Setting image to the existing image

// Updating data into the database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $newName = $_POST['name'];
    $newBottomContent = $_POST['bottom_content'];
    $newLink = $_POST['link'];
    $newContentType = $_POST['content_type'];
    $newGalleryType = $_POST['gallery_type'];
    $newImage = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    // Check if any changes were made
    if ($newName != $name || $newBottomContent != $bottom_content || $newLink != $link || $newContentType != $content_type || $newGalleryType != $gallery_type || !empty($newImage)) {
        // Changes were made, proceed with the update
        if (!empty($newImage)) {
            // Move the new image
            move_uploaded_file($tempImage, "../Images/Gallery/$newImage");

            // Delete the existing image
            if ($existingImage && file_exists("../Images/Gallery/$existingImage")) {
                unlink("../Images/Gallery/$existingImage");
            }
        } else {
            // If no new image uploaded, keep the existing image as the new image
            $newImage = $existingImage;
        }

        // Update the database with the new image
        $updateQuery = "UPDATE `gallery` SET name='$newName', bottom_content='$newBottomContent', link='$newLink', content_type='$newContentType', gallery_type='$newGalleryType', image='$newImage' WHERE id=$id";

        $result = mysqli_query($con, $updateQuery);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href = 'gallery.php';</script>";
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        // No changes were made
        echo "<script>alert('No changes made.'); window.location.href = 'gallery.php';</script>";
    }
}
?>

    <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <h2 class="mb-4">Gallery</h2>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
            </div>

            <div class="form-group">
                <label for="bottom_content">Bottom Content:</label>
                <textarea class="form-control" id="bottom_content" name="bottom_content"
                    rows="4"><?php echo $bottom_content; ?></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link:</label>
                <input type="url" class="form-control" id="link" name="link" value="<?php echo $link; ?>">
            </div>

            <div class="form-group">
                <label for="content_type">Choose Content Type:</label>
                <select class="form-control" id="content_type" name="content_type">
                    <option value="choose" <?php if ($content_type=='choose' ) echo 'selected' ; ?>>choose content type
                    </option>
                    <option value="general" <?php if ($content_type=='general' ) echo 'selected' ; ?>>General</option>
                    <option value="custom" <?php if ($content_type=='custom' ) echo 'selected' ; ?>>Custom</option>
                    <option value="grain samples" <?php if ($content_type=='grain samples' ) echo 'selected' ; ?>>Grain
                        samples</option>
                    <option value="samples" <?php if ($content_type=='samples' ) echo 'selected' ; ?>>Samples</option>
                    <!-- Add more options if needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="gallery_type">Choose Gallery Type:</label>
                <select class="form-control" id="gallery_type" name="gallery_type">
                    <option value="text" <?php if ($gallery_type=='text' ) echo 'selected' ; ?>>choose content type</option>
                    <option value="photo" <?php if ($gallery_type=='photo' ) echo 'selected' ; ?>>Photo</option>
                    <option value="video" <?php if ($gallery_type=='video' ) echo 'selected' ; ?>>Video</option>
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

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
include('includes/footer.php');

?>