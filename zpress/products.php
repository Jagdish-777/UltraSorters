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
              <li class="breadcrumb-item active">Add Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container mt-5">
        <h2 class="mb-4">Add Product</h2>

        <form action="products.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category" required>
                    
                    <?php
                    $query = "SELECT * FROM product_category";
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $category_name = $row['cat_name'];
                        echo "<option value='$id'>$category_name</option>";
                    }
                ?>
                </select>
            </div>

            <div class="form-group">
                <label for="subcategory">Subcategory:</label>
                <select class="form-control" id="subcategory" name="subcategory" required>
                    <?php
                    $query = "SELECT * FROM product_sub_category";
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $subcategory_name = $row['sub_cat_name'];
                        echo "<option value='$id'>$subcategory_name</option>";
                    }
                ?>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Product Image:</label>
                <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
            </div>
            
            <div class="form-group">
                <label for="image">Product BgImage:</label>
                <input type="file" class="form-control-file" id="image" name="bgimage" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit_product">Add Product</button>
        </form>
    </div>
    <!-- Bootstrap JS and Popper.js -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <!-- CKEditor Script -->
    <script>
        ClassicEditor
            .create(document.querySelector('#description'), {
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedlist', 'outdent', 'indent', 'imageUpload', 'blockQuote', 'insertTable', 'mediaEmbed', 'undo', 'redo']
            })
            .catch(error => {
                console.error(error);
            });
    </script>
<!-- </body>

</html> -->

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $subcategory = $_POST['subcategory'];
    $image = $_FILES['image']['name'];
    $temp_image = $_FILES['image']['tmp_name'];

    $bgimage = $_FILES['bgimage']['name'];
    $temp_bgimage = $_FILES['bgimage']['tmp_name'];

    //move uploaded file
    move_uploaded_file($temp_image,"../Images/products/$image");
    move_uploaded_file($temp_bgimage, "./Images/products/$bgimage");

    //insert query
    $insert_query = "insert into products(product_name,product_description,product_category,product_sub_category,image,bgImage) 
    values('$name','$description',$category,$subcategory,'$image','$bgimage')";
    $result = mysqli_query($con, $insert_query);
    if ($result) {
        echo "<script>alert('inserted successfully.'); window.location.href = 'products.php';</script>";
        exit();
    } else {
        echo "<script>alert('Error in inserting'); window.location.href = 'products.php';</script>";
        exit();
    }
}
?>

<div class="container mt-5">
        <h2 class="mb-4">Display Products</h2>
        <div class="table-responsive">
            <table id="example" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Category</th>
                        <th scope="col">Subcategory</th>
                        <th scope="col">Image</th>
                        <th scope="col">Top Banner Image</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $select_query = "
                    SELECT 
                        p.id,
                        p.product_name,
                        p.product_description,
                        pc.cat_name AS category_name,
                        psc.sub_cat_name AS subcategory_name,
                        p.image,
                        p.bgImage
                    FROM products p
                    INNER JOIN product_category pc ON p.product_category = pc.id
                    INNER JOIN product_sub_category psc ON p.product_sub_category = psc.id
                    ";

                    $result_query = mysqli_query($con, $select_query);

                    if ($result_query) {
                        $serial_number = 1; // Initialize the serial number

                        foreach ($result_query as $row) {
                            $id = $row['id'];
                            $name = $row['product_name'];
                            $description = $row['product_description'];
                            $category = $row['category_name'];
                            $subcategory = $row['subcategory_name'];
                            $image = $row['image'];
                            $bgImage = $row['bgImage'];

                            echo '<tr>
                                <td>' . $serial_number++ . '</td>
                                <td>' . $name . '</td>
                                <td>' . $description . '</td>
                                <td>' . $category . '</td>
                                <td>' . $subcategory . '</td>
                                <td><img src="../Images/Products/' . $image . '" alt="product_image" width="50"></td>
                                <td><img src="../Images/Products/' . $bgImage . '" alt="product_image" width="50"></td>
                                <td>
                                    <button class="btn btn-primary"><a href="update_products.php?edit_id=' . $id . '" class="text-light">Edit</a></button>
                                    <button class="btn btn-danger"><a href="products.php?delete_id=' . $id . '" class="text-light">Delete</a></button>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- DataTables JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>


<?php
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    // Select query to fetch images associated with the product
    $select_query = "SELECT image, bgimage FROM products WHERE id=$id";
    $result_query = mysqli_query($con, $select_query);

    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $image = $row['image'];
        $bgimage = $row['bgimage'];

        // Construct file paths for both images
        $file_path1 = '../Images/products/' . $image;
        $file_path2 = '../Images/products/' . $bgimage;

        // Delete record from the database
        $delete_query = "DELETE FROM products WHERE id=$id";
        $result_query = mysqli_query($con, $delete_query);

        if ($result_query) {
            // Delete the image files if they exist
            if (file_exists($file_path1)) {
                unlink($file_path1);
            }
            if (file_exists($file_path2)) {
                unlink($file_path2);
            }

            echo "<script>alert('Deleted successfully'); window.location.href = 'products.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error deleting record'); window.location.href = 'products.php';</script>";
        }
    } else {
        echo "<script>alert('Error fetching images'); window.location.href = 'products.php';</script>";
    }
}
?>

<?php
include('includes/footer.php');

?>