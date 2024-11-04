<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<!--  -->
<body>
    <!-- Page Heading -->
    
        <header>
        <!-- Navbar -->
    <nav class="navbar">

<div class="navbar-left">
  <img style="margin-bottom: 11px;padding-right: 21px;" src="{{ asset ('images/logo.png')}}" alt="Kharadaar Logo" class="logo">
  <span class="brand-name">KHAREDAAR</span>
  <img src="{{ asset ('images/logo.png')}}" alt="Kharadaar Logo" class="logo2">
</div>

<div class="navbar-search">
  <input type="text" placeholder="Search..." class="search-bar">
  
</div>

<div class="navbar-buttons">
  <button onclick="location.href='{{ url('/') }}'">Home</button>


  <div class="dropdown">
    <button>Products</button>
    <div class="dropdown-content">
      <a href="{{ route('men')}}">Men</a>
      <a href="{{ route('women')}}">Women</a>
    </div>
  </div>




  <button onclick="location.href='{{ url('/aboutus') }}'">About Us</button>
  <button onclick="location.href='{{ url('/contactus') }}'">Contact Us</button>
  <button style="margin-right: 35px;" onclick="location.href='{{ url('/register') }}'">Log-in / Sign-up</button>
</div>
</nav>

        </header>
   

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    
    <footer class="footer">
            <div class="footer-content">
              <!-- Brand & Description -->
              <div class="footer-section brand">
                <h3>KHAREDAAR</h3>
                <p>Your go-to platform for quality clothing. Discover the latest trends, exclusive promotions, and a
                  user-friendly shopping experience.</p>
              </div>
      
              <!-- Quick Links -->
              <div class="footer-section links">
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="home.html">Home</a></li>
                  <li><a href="men.html">Products</a></li>
                  <li><a href="aboutus.html">About Us</a></li>
                  <li><a href="contactus.html">Contact Us</a></li>
                  <li><a href="login.html">Log-in / Sign-up</a></li>
                </ul>
              </div>
      
              <!-- Contact Information -->
              <div class="footer-section contact">
                <h4>Contact Us</h4>
                <p>Email: support@kharedaar.com</p>
                <p>Phone: +92 312-2933-785</p>
                <p>Address: b1999, street 12 ,defence, karachi, pakistan</p>
              </div>
      
              <!-- Social Media Links -->
              <div class="footer-section social">
                <h4>Follow Us</h4><br>
                <div class="social-icons">
                  <a href="https://www.facebook.com/"><img src="{{ asset ('images/fb.png')}}" alt="Facebook"></a>
                  <a href="https://www.x.com/"><img src="{{ asset ('images/x.png')}}" alt="X"></a>
                  <a href="https://www.instagram.com/"><img src="{{ asset ('images/insta.png')}}" alt="Instagram"></a>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <p>&copy; 2023 KHAREDAAR. All Rights Reserved.</p>
            </div>
          </footer>
 

</body>

</html>