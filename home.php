

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/be1ba39dfe.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productstyle.css">
    <title>Book Zone</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href= "About.php">About</a></li>
            <li><a href= "admin.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </div>
    </nav>

    <div class="section-1">
        <div class="Section-1-text">
            <center><h1>Welcome to Book Zone</h1>
            <p>You can find out yours book here.</p>
            <a href="product.html" class="btn">Explore Here  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
           
        </center>
        </div>
    </div>
    <div class="section-2">
        <h2>Featured Products</h2>
        <!-- <a href="#"><img src="./images/img_2.jpg" alt=""> -->
        <div class="gallery">
            <div class="image-holder">
                <a href="#">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.WF_SOJu0KIqknulvBJ3C0AAAAA&pid=Api&P=0&h=180" alt="img-1">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://rukminim1.flixcart.com/image/416/416/book/9/8/0/the-alchemist-original-imadk282hypgngze.jpeg?q=70" alt="img-2">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51thwSMFWIL._SX337_BO1,204,203,200_.jpg" alt="img-3">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/51JkDEpHUQL._SX317_BO1,204,203,200_.jpg" alt="img-4">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41Ch2Z3BsVL._SX323_BO1,204,203,200_.jpg" alt="img-5">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41F8ATXoMOL._SX317_BO1,204,203,200_.jpg" alt="img-6">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://rukminim1.flixcart.com/image/416/416/jrmdvgw0/book/6/2/3/the-monk-who-sold-his-ferrari-original-imafddh7qpcgapgk.jpeg?q=70" alt="img-7">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41I11elZnpL._SX307_BO1,204,203,200_.jpg" alt="img-8">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/41rUxcHPy6L._SX324_BO1,204,203,200_.jpg" alt="img-9">
                </a>
            </div>
            <div class="image-holder">
                <a href="#">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/61I6rrig5TL._SX321_BO1,204,203,200_.jpg" alt="img-10">
                </a>
            </div>


        </div>

    </div>
    <!-- <div class="section-3">
        <h3>Products</h3>
        <br>
        <div class="view-card">
            <div class="card">
                <center><img src="./images/img_11.jpg" alt="Avatar"></center>
                <div class="container">
                  <center>
                    <h4><b>John Doe</b></h4> 
                    <p>Architect & Engineer</p>
                  </center> 
                </div>
            </div>
            <div class="card">
                <img src="./images/img_11.jpg" alt="Avatar">
                <div class="container">
                  <h4><b>John Doe</b></h4> 
                  <p>Architect & Engineer</p> 
                </div>
            </div>

        </div>

    </div>  -->

    <div class="section-4">
        <h2>Featured Brands</h2>
        <div class="brand">
            <img src="https://rafalreyzer.com/wp-content/uploads/2019/02/juggernaut-books.png" alt="">
        </div>
        <div class="brand">
            <img src="https://rafalreyzer.com/wp-content/uploads/2019/02/schand-logo.gif" alt="">
        </div>
        <div class="brand">
            <img src="https://rafalreyzer.com/wp-content/uploads/2019/02/24-by-7-publishing.png" alt="">
        </div>
        <div class="brand">
            <img src="https://rafalreyzer.com/wp-content/uploads/2019/02/apk-publishers-logo.png" alt="">
        </div>
        <div class="brand">
            <img src="https://rafalreyzer.com/wp-content/uploads/2019/02/fingerprint-publishing.jpg" alt="">
        </div>
    </div>

    <!-- section-5 contact us  -->
    <div class="section-5">
        
              <h2>Contact Us</h2>
              <p>leave us a message or suggestion:</p>

              <div class="column">
                <form action="contact.php" method="POST">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                  <label for="lname">Last Name</label>
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                  <label for="country">Country</label>
                  <select id="country" name="country">
                    <option value="india">India</option>
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                  </select>
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>

    </div>
</body>
</html>