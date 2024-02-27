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
              <li class="breadcrumb-item active">View About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">

        <h1 class="mt-4 mb-4 text-center">About Us Form</h1>

        <form action="about_us.php" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5"
                    placeholder="Enter your content"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image Upload</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
            </div>

            <div class="form-group">
                <label for="mission">Mission</label>
                <textarea class="form-control" id="mission" name="mission" rows="3"
                    placeholder="Enter your mission"></textarea>
            </div>

            <div class="form-group">
                <label for="missionImage">Mission Image</label>
                <input type="file" class="form-control-file" id="missionImage" name="missionImage">
            </div>

            <div class="form-group">
                <label for="vision">Vision</label>
                <textarea class="form-control" id="vision" name="vision" rows="3"
                    placeholder="Enter your vision"></textarea>
            </div>

            <div class="form-group">
                <label for="visionImage">Vision Image</label>
                <input type="file" class="form-control-file" id="visionImage" name="visionImage">
            </div>

            <div class="form-group">
                <label for="personBehind">Person Behind</label>
                <textarea class="form-control" id="personBehind" name="personBehind" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="personBehindImage">Correspondent's Image</label>
                <input type="file" class="form-control-file" id="personBehindImage" name="personBehindImage">
            </div>

            <button type="submit" class="btn btn-primary" name="about_us">Submit</button>
        </form>

    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<!-- Inserting data into database -->

<?php
// include('./includes/connect.php');
if(isset($_POST['about_us'])){
    $content = $_POST['content'];
    $mission = $_POST['mission'];
    $vision = $_POST['vision'];
    $personBehind = $_POST['personBehind'];

    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    $missionImage = $_FILES['missionImage']['name'];
    $temp_missionImage = $_FILES['missionImage']['tmp_name'];

    $visionImage = $_FILES['visionImage']['name'];
    $temp_visionImage = $_FILES['visionImage']['tmp_name'];

    $personBehindImage = $_FILES['personBehindImage']['name'];
    $temp_personBehindImage = $_FILES['personBehindImage']['tmp_name'];


    //move uploaded file
    move_uploaded_file($temp_image,"../Images/Home/$image");
    move_uploaded_file($temp_missionImage,"../Images/Home/$missionImage");
    move_uploaded_file( $temp_visionImage,"../Images/Home/$visionImage");
    move_uploaded_file($temp_personBehindImage,"../Images/Home/$personBehindImage");



    // Query to insert data
    $insert_query = "insert into `aboutus`(content,image,our_mission,our_mission_image,our_vision,our_vision_image,person_behind,person_behind_image) 
    values('$content','$image','$mission','$missionImage','$vision','$visionImage','$personBehind','$personBehindImage')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
        echo "<script>alert('inserted successfully.'); window.location.href = 'about_us.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}

?>

<!-- View aboutus -->

    <div class="container mt-5">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Content</th>
                        <th scope="col">Image</th>
                        <th scope="col">Our Mission</th>
                        <th scope="col">Mission Image</th>
                        <th scope="col">Our_vision</th>
                        <th scope="col">vision Image</th>
                        <th scope="col">person_behind</th>
                        <th scope="col">person_behind_image</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM aboutus";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $content = $row['content'];
      $image = $row['image'];
      $our_mission = $row['our_mission'];
      $our_mission_image = $row['our_mission_image'];
      $our_vision = $row['our_vision'];
      $our_vision_image = $row['our_vision_image'];
      $personBehind = $row['person_behind'];
      $person_behind_image = $row['person_behind_image'];
      echo "$person_behind_image";


      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $content . '</td>
        <td><img src="../Images/Home/' . $image . '" alt="Image" width="50"></td>
        <td>' . $our_mission . '</td>
        <td><img src="../Images/Home/' . $our_mission_image . '" alt="Image" width="50"></td>
        <td>' . $our_vision . '</td>
        <td><img src="../Images/Home/' . $our_vision_image . '" alt="Image" width="50"></td>
        <td>' . $personBehind . '</td>
        <td><img src="../Images/Home/' . $person_behind_image . '" alt="Image" width="50"></td>
        <td>
        <button class="btn btn-primary"><a href="update_about_us.php?edit_id='.$id.'" class="text-light">Edit</a></button>
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
