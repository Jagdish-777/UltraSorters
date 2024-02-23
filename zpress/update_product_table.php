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
              <li class="breadcrumb-item active">Update Specifications</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<?php

$id = $_GET['edit_id'];
$fetch = "SELECT * FROM product_table WHERE id=$id";
$result = mysqli_query($conn, $fetch);
$row = mysqli_fetch_assoc($result);
$name = $row['product_name'];
$model = $row['model'];  
$number_of_chutes = $row['number_of_chutes'];
$number_of_cameras = $row['number_of_cameras'];
$channels = $row['channels'];
$input_capacity = $row['input_capacity'];
$power = $row['power'];
$air_in_cfm = $row['air_in_cfm'];
$compressor = $row['compressor'];
$size = $row['size'];

// Updating data into the database
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $new_name = $_POST['productName'];
    $new_model = $_POST['model'];
    $new_number_of_chutes = $_POST['numChutes'];
    $new_number_of_cameras = $_POST['numCameras'];
    $new_channels = $_POST['channels'];
    $new_input_capacity = $_POST['inputCapacity'];
    $new_power = $_POST['power'];
    $new_air_in_cfm = $_POST['air'];
    $new_compressor = $_POST['compressor'];
    $new_size = $_POST['size'];

    // Check if any changes have been made
    if ($name != $new_name || $model != $new_model || $number_of_chutes != $new_number_of_chutes || $number_of_cameras != $new_number_of_cameras ||
        $channels != $new_channels || $input_capacity != $new_input_capacity || $power != $new_power || $air_in_cfm != $new_air_in_cfm ||
        $compressor != $new_compressor || $size != $new_size) {
        
        // Update query
        $update = "UPDATE `product_table` SET `product_name`='$new_name', `model`='$new_model', `number_of_chutes`='$new_number_of_chutes',
            `number_of_cameras`='$new_number_of_cameras', `channels`='$new_channels', `input_capacity`='$new_input_capacity', `power`='$new_power',
            `air_in_cfm`='$new_air_in_cfm', `compressor`='$new_compressor', `size`='$new_size' WHERE id=$id";
        
        $result = mysqli_query($conn, $update);

        if($result){
            echo "<script>alert('Updated successfully.'); window.location.href='product_specification_table.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
        }
    } else {
        echo "<script>alert('No changes have been made.'); window.location.href='product_specification_table.php';</script>";
        exit();
    }
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Product Information Form</h2>

    <form action="" method="post">
        <!-- Product Name -->
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" id="productName" name="productName" value="<?php echo $name; ?>">
        </div>

        <!-- Model -->
        <div class="form-group">
            <label for="model">Model:</label>
            <input type="text" class="form-control" id="model" name="model" value="<?php echo $model; ?>">
        </div>

        <!-- Number of Chutes -->
        <div class="form-group">
            <label for="numChutes">Number of Chutes:</label>
            <input type="number" class="form-control" id="numChutes" name="numChutes" value="<?php echo $number_of_chutes; ?>">
        </div>

        <!-- Number of Cameras -->
        <div class="form-group">
            <label for="numCameras">Number of Cameras:</label>
            <input type="number" class="form-control" id="numCameras" name="numCameras" value="<?php echo $number_of_cameras; ?>">
        </div>

        <!-- Channels -->
        <div class="form-group">
            <label for="channels">Channels:</label>
            <input type="text" class="form-control" id="channels" name="channels" value="<?php echo $channels; ?>">
        </div>

        <!-- Input Capacity -->
        <div class="form-group">
            <label for="inputCapacity">Input Capacity:</label>
            <input type="text" class="form-control" id="inputCapacity" name="inputCapacity" value="<?php echo $input_capacity; ?>">
        </div>

        <!-- Power -->
        <div class="form-group">
            <label for="power">Power:</label>
            <input type="text" class="form-control" id="power" name="power" value="<?php echo $power; ?>">
        </div>

        <!-- Air In CFM -->
        <div class="form-group">
            <label for="airInCFM">Air In CFM:</label>
            <input type="text" class="form-control" id="airInCFM" name="air" value="<?php echo $air_in_cfm; ?>">
        </div>

        <!-- Compressor -->
        <div class="form-group">
            <label for="compressor">Compressor:</label>
            <input type="text" class="form-control" id="compressor" name="compressor" value="<?php echo $compressor; ?>">
        </div>

        <!-- Size -->
        <div class="form-group">
            <label for="size">Size:</label>
            <input type="text" class="form-control" id="size" name="size" value="<?php echo $size; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
include('includes/footer.php');

?>