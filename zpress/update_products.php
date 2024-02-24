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
              <li class="breadcrumb-item active">Update Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
include('./connections/dbconnect.php');

$id = $_GET['edit_id'];
$fetch = "select * from products where id=$id";
$result = mysqli_query($con,$fetch);
$row = mysqli_fetch_assoc($result);
$name = $row['product_name'];
$description = $row['product_description'];
$category = $row['product_category'];
$sub_category = $row['product_sub_category'];
$existingImage1 = $row['image'];
$existingImage2 = $row['bgImage'];

//updating data into server
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $newName = $_POST['name'];
    $newDescription = $_POST['description'];
    $newCategory = $_POST['category'];
    $newSub_category = $_POST['subcategory'];

    $newImage1 = handleFileUpload('image', $existingImage1);
    $newImage2 = handleFileUpload('bgimage', $existingImage2);

    if($newName!=$name || $newDescription!=$description || $newCategory!=$category || $newSub_category!=$sub_category || $newImage1!=$existingImage1 || $newImage2!=$existingImage2){
        // Update database with new image filenames
        $update_query = "UPDATE products SET product_name=?, product_description=?, product_category=?, product_sub_category=?, image=?, bgImage=? WHERE id=?";
        $stmt = mysqli_prepare($con, $update_query);
        mysqli_stmt_bind_param($stmt, "ssssssi", $newName, $newDescription, $newCategory, $newSub_category, $newImage1, $newImage2, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='products.php';</script>";
            exit();
            
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
            exit();
        }
    }else{
        echo "<script>alert('no changes has been made'); window.location.href = 'products.php';</script>";
        exit();
    }

    
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "../Images/products/$newImage");

        // Delete the existing image
        if ($existingImage && file_exists("../Images/products/$existingImage")) {
            unlink("../Images/products/$existingImage");
        }
        return $newImage;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingImage;
    }
}
?>


<div class="container mt-5">
    <h2 class="mb-4">Update Product</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4"><?php echo $description; ?></textarea>
        </div>

        <div class="form-group">
            <label for="category">Category:</label>
            <select class="form-control" id="category" name="category">
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
            <select class="form-control" id="subcategory" name="subcategory">
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
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
        </div>

        <div class="form-group">
            <label for="image">Product BgImage:</label>
            <input type="file" class="form-control-file" id="image" name="bgimage" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary" name="submit_product">Update Product</button>
    </form>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

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
<?php
include('includes/footer.php');

?>