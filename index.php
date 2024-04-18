<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. KONIMEX</title>
</head>
<body>
    <div class="wrapper">
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <button class="ham">
                      <div class="bar"></div>
                      <div class="bar"></div>
                      <div class="bar"></div>
                    </button>
                </div>
                <div class="bar-navigation">
                <?php
                  $items = array("Home", "Profile", "Visi dan Misi", "Produk Kami", "Kontak Kami", "About Us");
                  foreach ($items as $item) {
                      echo "<a href='#'>$item</a>";
                  }
                ?>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="profile">
                <img src="konimex.jpg" alt="Konimex">
                <h3>PT.KONIMEX</h3>
            </div>  
            <ul>
                <li>
                <?php
                  $items = array("Artikel", "Event", "Galery Foto", "Klien Kami");
                  foreach ($items as $item) {
                      echo "<a href='#'><span class='item'>$item</span></a>";
                  }
                ?>
                <div class="dropdown">
                  <a class="dropbtn">Login</a>
                  <div class="dropdown-content">
                      <a href="#SIGN-IN">Sign In</a>
                      <a href="#SIGN-UP">Sign Up</a>
                  </div>
                </div>
                </li>
            </ul>
        </div>
    </div>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
        });
    </script>
</body>
</html>
