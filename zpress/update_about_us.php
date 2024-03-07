<?php
include('./connections/dbconnect.php');

$id = $_GET['edit_id'];
$fetch = "SELECT * FROM aboutus WHERE id=?";
$stmt = mysqli_prepare($con, $fetch);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

$content = $row['content'];
$existingImage1 = $row['image'];

$our_mission = $row['our_mission'];
$existingImage2 = $row['our_mission_image'];

$our_vision = $row['our_vision'];
$existingImage3 = $row['our_vision_image'];

$person_behind = $row['person_behind'];
$existingImage4 = $row['person_behind_image'];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $newContent = $_POST['content'];
    $newMission = $_POST['mission'];
    $newVision = $_POST['vision'];
    $newPersonBehind = $_POST['personBehind'];

    // Check if there are any changes
    if ($newContent === $content &&
        $newMission === $our_mission &&
        $newVision === $our_vision &&
        $newPersonBehind === $person_behind &&
        empty($_FILES['image']['name']) &&
        empty($_FILES['missionImage']['name']) &&
        empty($_FILES['visionImage']['name']) &&
        empty($_FILES['personBehindImage']['name'])) {
        // No changes were made
        echo "<script>alert('No changes were made.');</script>";
    } else {
        // Handle image uploads
        $newImage1 = handleFileUpload('image', $existingImage1);
        $newImage2 = handleFileUpload('missionImage', $existingImage2);
        $newImage3 = handleFileUpload('visionImage', $existingImage3);
        $newImage4 = handleFileUpload('personBehindImage', $existingImage4);

        // Update database with new image filenames
        $update_query = "UPDATE aboutus SET content=?, image=?, our_mission=?, our_mission_image=?, our_vision=?, our_vision_image=?, person_behind=?, person_behind_image=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "ssssssssi", $newContent, $newImage1, $newMission, $newImage2, $newVision, $newImage3, $newPersonBehind, $newImage4, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='about_us.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
        }
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "../Images/Home/$newImage");

        // Delete the existing image
        if ($existingImage && file_exists("../Images/Home/$existingImage") && $existingImage !== $newImage ) {
            unlink("../Images/Home/$existingImage");
        }
        return $newImage;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingImage;
    }
}
?>



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
              <li class="breadcrumb-item active">Update About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">

        <h1 class="mt-4 mb-4 text-center">About Us Form</h1>

        <form action="" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"
                    placeholder="Enter your content"><?php echo $content; ?></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image Upload</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <label for="mission">Mission</label>
                <textarea class="form-control" id="mission" name="mission" rows="3"
                    placeholder="Enter your mission"><?php echo $our_mission; ?></textarea>
            </div>

            <div class="form-group">
                <label for="missionImage">Mission Image</label>
                <input type="file" class="form-control-file" id="missionImage" name="missionImage">
            </div>

            <div class="form-group">
                <label for="vision">Vision</label>
                <textarea class="form-control" id="vision" name="vision" rows="3"
                    placeholder="Enter your vision"><?php echo $our_vision; ?></textarea>
            </div>

            <div class="form-group">
                <label for="visionImage">Vision Image</label>
                <input type="file" class="form-control-file" id="visionImage" name="visionImage">
            </div>

            <div class="form-group">
                <label for="personBehind">Person Behind</label>
                <textarea class="form-control" id="personBehind" name="personBehind" rows="3"><?php echo $person_behind; ?></textarea>
            </div>
            <div class="form-group">
                <label for="personBehindImage">Person Behind Image</label>
                <input type="file" class="form-control-file" id="personBehindImage" name="personBehindImage">
            </div>

            <button type="submit" class="btn btn-primary" name="about_us">Submit</button>
        </form>

    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php
include('includes/footer.php');

?>
