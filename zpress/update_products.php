<?php
include('./includes/connect.php');

$id = $_GET['edit_id'];
$fetch = "select * from products where id=$id";
$result = mysqli_query($conn,$fetch);
$row = mysqli_fetch_assoc($result);
$name = $row['product_name'];
$description = $row['product_description'];
$category = $row['product_category'];
$sub_category = $row['product_sub_category'];
$existingImage = $row['image'];

//updating data into server
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $sub_category = $_POST['subcategory'];

    //check if new image is uploaded or not
    if(!empty($_FILES['image']['name'])){
        $newImage = $_FILES['image']['name'];
        $tempImage = $_FILES['image']['tmp_name'];

        // Move the new image
        move_uploaded_file($tempImage, "./includes/images/$newImage");

        //delete the existing image
        if($existingImage && file_exists("./includes/images/$existingImage")){
            unlink("./includes/images/$existingImage");
        }
        //update new image into database
        $update = "update products set product_name='$name',product_description='$description',
        product_category='$category',product_sub_category='$sub_category',image='$newImage' where id=$id";

    }else{
        // No new image uploaded, keep the existing image
        $update = "update products set product_name='$name',product_description='$description',
        product_category='$category',product_sub_category='$sub_category',image='$existingImage' where id=$id";
    }

    $result = mysqli_query($conn, $update);

    if ($result) {
        echo "<script>alert('Updated successfully.'); window.location.href = 'display_products.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Product</title>
    <!-- Bootstrap CSS (optional, you can use your own styling) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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
                    include('./includes/connect.php');
                    $query = "SELECT * FROM product_category";
                    $result = mysqli_query($conn, $query);

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
                    $result = mysqli_query($conn, $query);

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
</body>
</html>