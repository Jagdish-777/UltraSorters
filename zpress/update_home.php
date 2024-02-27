<?php
include('./includes/connect.php');

$id = $_GET['edit_id'];
$fetch = "select * from home where id=$id";
$result = mysqli_query($conn,$fetch);
$row = mysqli_fetch_assoc($result);
$existingImage1 = $row['bgImage'];
$existingImage2 = $row['image'];
$content = $row['content'];

//updating data into server
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $newContent = $_POST['content'];

    $newImage1 = handleFileUpload('bgimage', $existingImage1);
    $newImage2 = handleFileUpload('image', $existingImage2);

    if($newImage1 != $existingImage1 || $newImage2 != $existingImage2 || $newContent != $content){
        // Update database with new image filenames
        $update_query = "UPDATE home SET bgImage=?, image=?, content=? WHERE id=?";
        $stmt = mysqli_prepare($conn, $update_query);
        mysqli_stmt_bind_param($stmt, "sssi", $newImage1, $newImage2, $newContent, $id);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo "<script>alert('Updated successfully.'); window.location.href='home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error: Failed to update data.');</script>";
        }
    }else{
        echo "<script>alert('No changes have been made.'); window.location.href = 'home.php';</script>";
        exit();
    }
}

// Function to handle file upload
function handleFileUpload($fieldName, $existingImage) {
    if (!empty($_FILES[$fieldName]['name'])) {
        $newImage = $_FILES[$fieldName]['name'];
        $tempImage = $_FILES[$fieldName]['tmp_name'];

        // Move the uploaded image
        move_uploaded_file($tempImage, "./includes/images/$newImage");

        // Delete the existing image
        if ($existingImage && file_exists("./includes/images/$existingImage")) {
            unlink("./includes/images/$existingImage");
        }
        return $newImage;
    } else {
        // If no new image uploaded, retain the existing image
        return $existingImage;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css">

</head>

<body>
    <div class="container">
        <h2 class="mt-5">Home page</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="bgimage">Banner Image:</label>
                <input type="file" class="form-control-file" id="bgimage" name="bgimage">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>