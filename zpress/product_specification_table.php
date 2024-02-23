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
              <li class="breadcrumb-item active">Product Specification Table</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5">
        <h2 class="mb-4">Product Information Form</h2>

        <form action="product_specification_table.php" method="post">
            <!-- Product Name -->
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" class="form-control" id="productName" name="productName" required>
            </div>

            <!-- Model -->
            <div class="form-group">
                <label for="model">Model:</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <!-- Number of Chutes -->
            <div class="form-group">
                <label for="numChutes">Number of Chutes:</label>
                <input type="number" class="form-control" id="numChutes" name="numChutes">
            </div>

            <!-- Number of Cameras -->
            <div class="form-group">
                <label for="numCameras">Number of Cameras:</label>
                <input type="number" class="form-control" id="numCameras" name="numCameras">
            </div>

            <!-- Channels -->
            <div class="form-group">
                <label for="channels">Channels:</label>
                <input type="text" class="form-control" id="channels" name="channels" required>
            </div>

            <!-- Input Capacity -->
            <div class="form-group">
                <label for="inputCapacity">Input Capacity:</label>
                <input type="text" class="form-control" id="inputCapacity" name="inputCapacity" required>
            </div>

            <!-- Power -->
            <div class="form-group">
                <label for="power">Power:</label>
                <input type="text" class="form-control" id="power" name="power" required>
            </div>

            <!-- Air In CFM -->
            <div class="form-group">
                <label for="airInCFM">Air In CFM:</label>
                <input type="text" class="form-control" id="airInCFM" name="air" >
            </div>

            <!-- Compressor -->
            <div class="form-group">
                <label for="compressor">Compressor:</label>
                <input type="text" class="form-control" id="compressor" name="compressor" required>
            </div>

            <!-- Size -->
            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" class="form-control" id="size" name="size" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <?php
if(isset($_POST['submit'])){
    $productName = $_POST['productName'];
    $model = $_POST['model'];
    $numChutes = $_POST['numChutes'];
    $numCameras = $_POST['numCameras'];
    $channels = $_POST['channels'];
    $inputCapacity = $_POST['inputCapacity'];
    $power = $_POST['power'];
    $air = $_POST['air'];
    $compressor = $_POST['compressor'];
    $size = $_POST['size'];

    //insert query
    $insert_query = "insert into product_table(product_name,model,number_of_chutes,number_of_cameras,channels,input_capacity,power,air_in_cfm,compressor,size)
    values('$productName','$model','$numChutes','$numCameras','$channels','$inputCapacity','$power','$air','$compressor','$size')";

    $result_query = mysqli_query($con,$insert_query);
    if($result_query){
        echo "<script>alert('inserted successfully.'); window.location.href='product_specification_table.php';</script>";
        exit();
    }else{
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }
}
?>


    <!-- view product_specification_table -->

    <div class="container mt-7">
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Product_name</th>
                        <th scope="col">No.of Chutes</th>
                        <th scope="col">No.of Cameras</th>
                        <th scope="col">channels</th>
                        <th scope="col">input_capacity</th>
                        <th scope="col">power</th>
                        <th scope="col">air_in_cfm</th>
                        <th scope="col">compressor</th>
                        <th scope="col">size</th>
                        <th scope="col">date</th>
                        <th scope="col">operations</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
  $select_query = "SELECT * FROM product_table";
  $result_query = mysqli_query($con, $select_query);
  if ($result_query) {
    $serial_number = 1; // Initialize the serial number
    while ($row = mysqli_fetch_assoc($result_query)) {
      $id = $row['id'];
      $name = $row['product_name'];
      $no_of_chutes = $row['number_of_chutes'];
      $no_of_cameras = $row['number_of_cameras'];
      $channels = $row['channels'];
      $input_capacity = $row['input_capacity'];
      $power = $row['power'];
      $air_in_cfm = $row['air_in_cfm'];
      $compressor = $row['compressor'];
      $size = $row['size'];
      $date = $row['date'];

      
      echo '<tr>
        <td>' . $serial_number . '</td>
        <td>' . $name . '</td>
        <td>' . $no_of_chutes . '</td>
        <td>' . $no_of_cameras . '</td>
        <td>' . $channels . '</td>
        <td>' . $input_capacity . '</td>
        <td>' . $power . '</td>
        <td>' . $air_in_cfm . '</td>
        <td>' . $compressor . '</td>
        <td>' . $size . '</td>
        <td>' . $date . '</td>
        <td>
        <button class="btn btn-primary mb-2"><a href="update_product_table.php?edit_id='.$id.'" class="text-light">Edit</a></button>
        <button class="btn btn-danger"><a href="product_specification_table.php?delete_id='.$id.'" class="text-light">Delete</a></button>
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



<!-- Delete product_specification_table -->

<?php
if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];

    $delete_query = "delete from product_table where id=$id";
    $result_query = mysqli_query($con,$delete_query);
    if($result_query){
        echo "<script>alert('Deleted successfully'); window.location.href = 'product_specification_table.php';</script>";
    }else{
        die(mysqli_error($con));
    }
}
?>
<?php
include('includes/footer.php');

?>