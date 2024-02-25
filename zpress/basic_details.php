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
              <li class="breadcrumb-item active">Basic Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5">
        <form enctype="multipart/form-data" method="post" action="basic_details.php">
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
                <small class="form-text text-muted">Note: Please upload a logo with dimensions 726 x 151 pixels.</small>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="mobileNumber">Mobile Number</label>
                <input type="tel" class="form-control" id="mobileNumber" name="mobileNumber" required>
            </div>

            <div class="form-group">
                <label for="apiEmail">API Email</label>
                <input type="email" class="form-control" id="apiEmail" name="apiEmail" required>
            </div>

            <div class="form-group">
                <label for="whatsappNumber">WhatsApp Number</label>
                <input type="tel" class="form-control" id="whatsappNumber" name="whatsappNumber" required>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="fbLink">Facebook Link</label>
                <input type="url" class="form-control" id="fbLink" name="fbLink">
            </div>

            <div class="form-group">
                <label for="twitterLink">Twitter Link</label>
                <input type="url" class="form-control" id="twitterLink" name="twitterLink">
            </div>

            <div class="form-group">
                <label for="youtubeLink">YouTube Link</label>
                <input type="url" class="form-control" id="youtubeLink" name="youtubeLink">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>



<?php
if(isset($_POST['submit'])){
    $logo = $_FILES['logo']['name'];
    $temp_logo = $_FILES['logo']['tmp_name'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $apiEmail = $_POST['apiEmail'];
    $whatsappNumber = $_POST['whatsappNumber'];
    $address = $_POST['address'];
    $fbLink = $_POST['fbLink'];
    $twitterLink = $_POST['twitterLink'];
    $youtubeLink = $_POST['youtubeLink'];

    //move uploaded file
    move_uploaded_file($temp_logo,"../Images/Logo/$logo");

    //insert into database
    $insert_query = "insert into `basic_details`(logo,email,mobile_number,api_email,whatsap_number,address,facebook_link,twitter_link,youtube_link)
    values('$logo','$email','$mobileNumber','$apiEmail','$whatsappNumber','$address','$fbLink','$twitterLink','$youtubeLink')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('inserted successfully.')</script>";
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }

}
?>


<!-- View Basic Details  -->

    <div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Api Email</th>
                        <th scope="col">Whatsapp_Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Fb Link</th>
                        <th scope="col">Twitter Link</th>
                        <th scope="col">Youtube Link</th>
                        <th scope="col">date</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM basic_details";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $logo = $row['logo'];
      $email = $row['email'];
      $mobile_number = $row['mobile_number'];
      $api_email = $row['api_email'];
      $whatsap_number = $row['whatsap_number'];
      $address = $row['address'];
      $facebook_link = $row['facebook_link'];
      $twitter_link = $row['twitter_link'];
      $youtube_link = $row['youtube_link'];
      $created_date = $row['created_date'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td><img src="../Images/Logo/' . $logo . '" alt="Employee Image" width="50"></td>
        <td>' . $email . '</td>
        <td>' . $mobile_number . '</td>
        <td>' . $api_email . '</td>
        <td>' . $whatsap_number . '</td>
        <td>' . $address . '</td>
        <td>' . $facebook_link . '</td>
        <td>' . $twitter_link . '</td>
        <td>' . $youtube_link . '</td>
        <td>' . $created_date . '</td>
        <td>
        <button class="btn btn-primary"><a href="update_basic_details.php?edit_id='.$id.'" class="text-light">Edit</a></button>
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
    <!-- <script>
        new DataTable('#example');
    </script> -->
    <?php
include('includes/footer.php');

?>