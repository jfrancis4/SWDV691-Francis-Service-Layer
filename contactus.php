<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Set the title of the page to be Renda -->
    <title>P2P Rentals</title>
    <meta charset="utf-8">
     <!-- Link to the bootstrap stylesheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Link to stylesheet for social media links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link to the script.js file, which contains the logic to trigger the hamburger menu -->
    <script src="script.js" defer></script>
    <!-- Link to the mustache files, which are responsible for displaying all the photos on the homepage -->
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="mustache.js"></script>
    <script type="text/javascript" src="photos.js"></script>
</head>

<?php

                $user_id=$_GET['user_id'];
?>


<body>
    <div class="container">
        <!-- Header is contained within a row class which consists of three columns -->
        <div class="row" style="box-shadow: 10px 10px 5px rgb(48,48,48);">
            <div class="col-lg-2">
                <!-- In the first column of the header, place the renda logo and have it link back to the homepage -->
                <div role="img" aria-label="Image of Renda Logo, click it to go to the home page">
                <a href="home2.php?id=<?php echo $user_id ?>">
                        <img src="RendaLogo.png" width="158px" height="98px">
                    </a>
                </div>
            </div>
            <!-- In the second column of the header, place the search bar and the label -->
            <div class="col-lg-8" style="height: 98px; padding-top: 30px;">
                <form>
                    <label for="search" class="inputLabel">Search</label>
                    <input type="input" id="name" class="inputField" value="">
                </form>
            </div>
            <!-- In the third columnn of the header, place the logout button -->
            <div class="col-lg-2" style="height: 98px; padding-left: 50px;">
            <button class="button2"><a href="index.php">Logout</a></button>
            </div>

            <!-- Create the navbar which is placed right below the header -->
            <nav class="navbar">
                <!-- Show the navbar logo when the main logo is hidden -->
                <div class="logo"><img src="RendaLogoNav.PNG" style="max-width:30%; max-height:30%;"></div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <!-- Display the two navbar links -->
                <div class="navbar-links">
                    <ul>
                        <li><a href="#">Categories</a></li>
                        <li><a href="newposting.php?user_id=<?php echo $user_id ?>">New Posting</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Open up a row element for the content section -->
        <div class="row">
                <!-- Open up a postmain section, which consists of white background with shadow -->
                <div class="postmain">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Set the first heading as Contact Us -->
                            <h1 id="title">Contact Us</h1>
                        </div>
                    </div>

                    <!-- Set a table for the contact us form -->
                <form action="contact.php?renter_id=<?php echo $user_id ?>" method="POST" enctype="multipart/form-data">

                    
                <table>

                    <tr>
                            <!-- Align Rental duration text label right -->
                            <td align="left">
                                Your Email Address:&nbsp;&nbsp;
                                <br><br>
                            </td>
                            <!-- Align Rental duration input box left -->
                            <td align="left">
                                <input type="input" id="email" name="email" class="inputField" value="" style="width: 90px;">
                                <br><br>
                            </td>
                    </tr>

                    <tr>
                            <!-- Align Rental duration text label right -->
                            <td align="left">
                                Subject:&nbsp;&nbsp;
                                <br><br>
                            </td>
                            <!-- Align Rental duration input box left -->
                            <td align="left">
                                <input type="input" id="subject" name="subject" class="inputField" value="" style="width: 90px;">
                                <br><br>
                            </td>
                    </tr>

                    <tr>
                        <!-- Align the description text box left -->
                        <td align="left">
                                Message:&nbsp;&nbsp;
                                <br><br>
                            </td>
                        <td align="left"><br>
                            <!-- Set the text area for the contact us form -->
                            <br><textarea id="description" required="required" name="description" rows="10" cols="155"></textarea><br>
                        </td>
                    </tr>
                </table>
                    <!-- Add the form-buttons to the bottom of the table -->
                    <div class="form-buttons" style="text-align: right;">
                        
                        <!-- Set the Clear form button -->
                        <button class="button" type="reset" value="Clear">CLEAR FORM</button>
                            &nbsp;&nbsp;&nbsp;
                        <!-- Set the Send form button -->
                        <button class="button" type="submit" name="submit">SEND</button>
                        
                        
                    </div>
</form>

                    <div class="row">
                        <div class="col-lg-6">

                            <!-- Set the section title for FAQ -->
                            <h1 id="title">FAQ</h1>
                        </div>
                    </div>

                    <!-- Set the Questions and Answers -->
                    <h3>Question:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>
                    <h3>Answer:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>
                    <h3>Question:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>
                    <h3>Answer:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>
                    <h3>Question:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>
                    <h3>Answer:</h3>
                    <p> If you can imagine a furry humanoid seven feet tall, with the face of an intelligent gorilla and the braincase of a man, you'll have a rough idea of what they looked like -- except for their teeth. The canines would have fitted better in the face of a tiger, and showed at the corners of their wide, thin-lipped mouths, giving them an expression of ferocity.</p>

                    <p>Reference: https://randomwordgenerator.com/paragraph.php</p>

                </div>
            
        </div>
        

        <!-- define the target div location where the contents of the script get written into -->

        <div id="target"></div>


        <!-- Define the footer row, which consists of two columns -->
        <div class="row" style="margin-top: 20px;">
            <!-- Have the first column contain the copyright information -->
            <div class="col-lg-8">

                ??2021 P2P Rentals
            </div>

            <!-- Have the second column contain the social media links, about us and contact us links -->
            <div class="col-lg-4">
                <a href="#" class="fa fa-facebook" style="width: 60px; margin-top: 15px;"></a>
                <a href="#" class="fa fa-twitter" style="width: 80px;"></a>
                <button class="button2"><a href="aboutus.php?user_id=<?php echo $user_id ?>">About Us</a></button>
                <button class="button2"><a href="contactus.php?user_id=<?php echo $user_id ?>">Contact Us/FAQ</a></button>
                
            </div>
        <div>
    </div>
</body>
</html>