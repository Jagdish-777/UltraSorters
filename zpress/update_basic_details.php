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
              <li class="breadcrumb-item active">Update Basic Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<?php


$id = $_GET['edit_id'];
$fetch = "select * from basic_details where id=$id";
$result = mysqli_query($con, $fetch);
$row = mysqli_fetch_assoc($result);
$existingLogo = $row['logo'];
$email = $row['email'];
$mobile_number = $row['mobile_number'];
$api_email = $row['api_email'];
$whatsap_number = $row['whatsap_number'];
$address = $row['address'];
$facebook_link = $row['facebook_link'];
$twitter_link = $row['twitter_link'];
$youtube_link = $row['youtube_link'];
$created_date = $row['created_date'];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Fetch form data
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $apiEmail = $_POST['apiEmail'];
    $whatsappNumber = $_POST['whatsappNumber'];
    $address = $_POST['address'];
    $fbLink = $_POST['fbLink'];
    $twitterLink = $_POST['twitterLink'];
    $youtubeLink = $_POST['youtubeLink'];

    // Check if any changes are made
    if (
        $email !== $row['email'] ||
        $mobileNumber !== $row['mobile_number'] ||
        $apiEmail !== $row['api_email'] ||
        $whatsappNumber !== $row['whatsap_number'] ||
        $address !== $row['address'] ||
        $fbLink !== $row['facebook_link'] ||
        $twitterLink !== $row['twitter_link'] ||
        $youtubeLink !== $row['youtube_link']
    ) {
        // Changes detected, proceed with update
        $newImage = handleFileUpload('logo', $existingLogo);
        $update_query = "update basic_details set logo='$newLogo', email='$email', mobile_number=$mobileNumber, api_email='$apiEmail',
        whatsap_number=$whatsappNumber, address='$address', facebook_link='$fbLink', twitter_link='$twitterLink', youtube_link='$youtubeLink' where id=$id";

        $result = mysqli_query($con, $update_query);
        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href = 'basic_details.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        // No changes detected
        echo "<script>alert('No changes have been made.'); window.location.href = 'basic_details.php';</script>";
        exit();
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingLogo) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newLogo = $_FILES[$fieldName]['name'];
        $tempLogo = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempLogo, "../Images/Logo/$newLogo");

        // Delete the existing image
        if ($existingLogo && file_exists("../Images/Logo/$existingLogo")) {
            unlink("../Images/Logo//$existingLogo");
        }
        return $newLogo;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingLogo;
    }
}
?>

<div class="container mt-5">
    <form enctype="multipart/form-data" method="post" action="">
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
            <small class="form-text text-muted">Note: Please upload a logo with dimensions 726 x 151 pixels.</small>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>

        <div class="form-group">
            <label for="mobileNumber">Mobile Number</label>
            <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" value="<?php echo $mobile_number; ?>">
        </div>

        <div class="form-group">
            <label for="apiEmail">API Email</label>
            <input type="email" class="form-control" id="apiEmail" name="apiEmail" value="<?php echo $api_email; ?>">
        </div>

        <div class="form-group">
            <label for="whatsappNumber">WhatsApp Number</label>
            <input type="tel" class="form-control" id="whatsappNumber" name="whatsappNumber" value="<?php echo $whatsap_number; ?>">
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3"><?php echo $address; ?></textarea>
        </div>

        <div class="form-group">
            <label for="fbLink">Facebook Link</label>
            <input type="url" class="form-control" id="fbLink" name="fbLink" value="<?php echo $facebook_link; ?>">
        </div>

        <div class="form-group">
            <label for="twitterLink">Twitter Link</label>
            <input type="url" class="form-control" id="twitterLink" name="twitterLink" value="<?php echo $twitter_link; ?>">
        </div>

        <div class="form-group">
            <label for="youtubeLink">YouTube Link</label>
            <input type="url" class="form-control" id="youtubeLink" name="youtubeLink" value="<?php echo $youtube_link; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<?php
include('includes/footer.php');

?>