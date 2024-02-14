<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <special-navbar></special-navbar>
    <div class="slider-container">
        <img class="slid-img" src="./Images/Home/home1.jpg" alt="No Image">
        <img class="slid-img" src="./Images/Home/DSC_0708.jpg" alt="">
        <img class="slid-img" src="./Images/Home/person.png" alt="">
        <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
        <a class="next" onclick="moveSlide(1)">&#10095;</a>
    </div>




    <script src="components.js"></script>
    <script src="./js/app.js"></script>
    <script>
        var index_value = 1;

        function slideShow() {
            var x = 0;
            setTimeout(slideShow, 2500); // Call slideShow function recursively every 2500 milliseconds
            const slide_img = document.querySelectorAll(".slid-img");

            for (x = 0; x < slide_img.length; x++) {
                slide_img[x].style.display = "none";
            }






































































            
            index_value++;
            if (index_value > slide_img.length) {
                index_value = 1;
            }
            if (index_value < 1) {
                index_value = slide_img.length;
            }
            
            slide_img[index_value - 1].style.display = "block";
        }
        

        // Start the slideshow when the page loads
        slideShow();

        // Function to move slide left or right
        function moveSlide(n) {
            index_value += n;
            slideShow();
        }
    </script>
</body>
</html>