<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar{
  display: flex;
  background-color:rgb(60, 124, 197);
  position: fixed;
  top:0;
  width: 100%;
  font-size: 20px;
}

.nav-right{
  text-align: right;
  float:right;
}

.nav-right li {
    display: inline;
    float: left;
    padding-left: 15px;
  }

  .nav-right li a {
    display: block;
    padding: 8px;
    text-decoration: none;
    color:white;
  }

  .nav-right  li ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
  }

  .nav-right li a:hover {
    background-color: rgb(31, 199, 106);
  }

  .nav-right .active {
    background-color: #04AA6D;
  }


html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  width: 300px;
  height: 400px;
  margin-left:580px;
  
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;

}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;

}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-right">
            <li><a href="home.php">Home</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="about1.php">About</a></li>
            <li><a href="logout.php">Logout</a></li>
           
        </div>
    </nav>

<div class="about-section">
  <h1>About Us </h1>
  <p>Book Zone provides easy interface to its customer for purchasing books online.</p>
  <p>For any query leave a comment in the Home page comment section. You can also send us email and call us 
      on Week days. 
      <br>Thankyou for your patience and hope you had a great shopping here.
  </p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <center><img src="https://raw.githubusercontent.com/himanshi-15/Book-Store/refs/heads/main/BookStore/images/p1.jfif" alt="Jane" style="width:100% height=300px"></center>
      <div class="container">
        <h2>Pradnya</h2>
        <p class="title">Frontend developer</p>
        <p>“Be yourself; everyone else is already taken.”</p>
        <p>pradnyak227@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>


  

    
    

</body>
</html>





