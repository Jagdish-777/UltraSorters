<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" 
    rel="stylesheet"> -->
    <link rel="stylesheet" href="./contact.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Contact Us</title>
</head>
<body>
<div class="topTranslateBar">

<div class="address">
    <i class="fa-solid fa-location-dot"></i>
    <p>Code: 42902, Republic of Korea.</p>
</div>

<div class="phone">
    <i class="fa-solid fa-phone"></i>
    <p>0082-53-592-8257</p>
</div>

<div id="google_translate_element"></div>

</div>
<special-navbar></special-navbar>
<!-- top section  -->
<!-- <div class="top-bar-section">
        <img src="./images/Courses/background-courses.png" alt="No Image">
        <h1 class="top-bar-heading">
        </h1>
    </div> -->

    <section class="sect1">
        <div class="part1"><!----flex------>
            <div class="col1-part1"><!------flex------>
                <div class="heading">
                    <h1>Contact</h1>
                    <p>For Queries and Support,please Contact Us.</p>
                </div>
                <?php 
                include("./zpress/connections/dbconnect.php");
                $contact_query = "Select * from `basic_details`";
                $contact_res = mysqli_query($con,$contact_query);
                $row = mysqli_fetch_assoc($contact_res);

                ?>
                <!------division of icons ------>
                <div class="social-media-flex-3"><!---flex-->
                    <div class="contact-container">
                        <div class="phone-icon-container">
                          <i class="fa-solid fa-phone"></i>
                        </div>
                
                        <div class="contact-info">
                            <h6>Call us</h6>
                            <p><?= $row['mobile_number'] ?></p>
                        </div>
                    </div>
                    <div class="gmail-container">
                        <div class="gmail-icon-container">
                          <i class="fa-solid fa-envelope"></i>
                        </div>
                
                        <div class="contact-info">
                          <h6>Email us</h6>
                          <p><?= $row['email'] ?></p>
                        </div>
                    </div>
                    <div class="social-container">
                      <div class="follow-icon-container">
                        <i class="fa-solid fa-plus"></i>
                      </div>
                      <div class="contact-info">
                        <h6>Follow us</h6>
                        <div class="icons-row-flex">
                          <div class="flex-icon">
                            <a href="<?= $row['facebook_link'] ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a> <!-- Facebook -->
                          </div>
                          <div class="flex-icon">
                            <a href="https://www.instagram.com/comaas.info?igsh=MWpvbHBpOHVnem5hMA==" target="_blank"><i class="fa-brands fa-instagram"></i></a> <!-- Instagram -->
                          </div>
                          <div class="flex-icon">
                            <a href="<?= $row['twitter_link'] ?>" target="_blank"><i class="fa-brands fa-square-x-twitter"></i></a> <!-- Twitter -->
                          </div>
                          <div class="flex-icon">
                            <a href="<?= $row['youtube_link'] ?>" target="_blank"><i class="fa-brands fa-youtube"></i></a> <!-- YouTube -->
                          </div>
                        </div>
                      </div>
                    </div>                
                </div>
            </div>
            <div class="col2-part1 ">
    <div class="heading2">
        <h2>Enquiry Form</h2>
        <div class="contact-form">
            <form action="contact.php" method="post">
                <label for="name" class="required">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email" class="required">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject" class="required">Subject:</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message" class="required">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <!-- Submit Button -->
                <div class="submit-button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </section>
    <section class="sect2" id="map">
        <div class="maps"><!-----flex------>
            <div class="maps-window"><!---flex---->
              <div class="maps-window2"><!----flex---->
                    <div class="header-of-map">
                        <h2>Our Location</h2>
                    </div>
                    <div class="address-map-location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d487006.84764402045!2d78.422871!3d17.519873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91fae67be215%3A0x33842209a3568055!2sAditya%20Nagar%2C%20Kukatpally%2C%20Hyderabad%2C%20Telangana%2C%20India!5e0!3m2!1sen!2sus!4v1708689958588!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
              </div>
            </div>
        </div>
    </section>

    <special-footbar></special-footbar>

    <script src="https://kit.fontawesome.com/b19824e628.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr,te,ko,ar', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


    <script src="./components.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>


<?php
// Including database connection
include('./zpress/connections/dbconnect.php');

// Handling form submission
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validating form data
    if($name=='' || $email=='' || $subject=='' || $message==''){
        echo "<script>alert('please fill the details correctly')</script>";
    } else {
        // Inserting data into the database
        $insert_query = "INSERT INTO contact (name, email, company, description) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $insert_query);

        // Binding parameters
        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
        
        // Executing query
        $result_query = mysqli_stmt_execute($stmt);

        // Checking for successful submission
        if($result_query){
            echo "<script>alert('Submitted successfully.'); window.location.href = 'contact.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error submitting the form.'); window.location.href = 'contact.php';</script>";
            exit();
        }
    }
}
?>