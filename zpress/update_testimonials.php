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


<?php
$id = $_GET['edit_id'];
$fetch = "select * from testimonials where id=$id";
$result = mysqli_query($con,$fetch);
$row = mysqli_fetch_assoc($result);
$client_name = $row['client_name'];
$client_comment = $row['client_comment'];
$client_profession = $row['client_profession'];
$existingImage = $row['client_image'];

//updating data into server
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $client_name = $_POST['client_name'];
    $client_comment = $_POST['client_comments'];
    $client_profession = $_POST['client_profession'];

    //check if new image is uploaded or not
    if(!empty($_FILES['client_image']['name'])){
        $newImage = $_FILES['client_image']['name'];
        $tempImage = $_FILES['client_image']['tmp_name'];

        // Move the new image
        move_uploaded_file($tempImage, "../Images/Testimonials/$newImage");

        //delete the existing image
        if($existingImage && file_exists("../Images/Testimonials/$existingImage") && $existingImage !== $newImage){
            unlink("../Images/Testimonials/$existingImage");
        }
        //update new image into database
        $update = "update testimonials set client_name='$client_name', client_comment='$client_comment', client_profession='$client_profession',
        client_image='$newImage' where id=$id";

    }else{
        // No new image uploaded, keep the existing image
        $update = "update testimonials set client_name='$client_name', client_comment='$client_comment', client_profession='$client_profession',
        client_image='$existingImage' where id=$id";
    }

    $result = mysqli_query($con, $update);

    if ($result) {
        echo "<script>alert('Updated successfully.')</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>


<!-- update form -->

<div class="container mt-5">
    <h2 class="mb-4">Client Feedback Update Form</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="client_name">Client Name:</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="<?php echo $client_name; ?>">
        </div>

        <div class="form-group">
            <label for="client_comments">Client Comments:</label>
            <textarea class="form-control" id="client_comments" name="client_comments" rows="4"><?php echo $client_comment; ?></textarea>
        </div>

        <div class="form-group">
            <label for="client_profession">Client Profession:</label>
            <input type="text" class="form-control" id="client_profession" name="client_profession" value="<?php echo $client_profession; ?>">
        </div>

        <div class="form-group">
            <label for="client_image">Upload Client Image:</label>
            <input type="file" class="form-control-file" id="client_image" name="client_image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary" name="submit_feedback">Submit Feedback</button>
    </form>
</div>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html> -->

<?php
include('includes/footer.php');

?>