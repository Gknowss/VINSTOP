// navbar for page
document.addEventListener("DOMContentLoaded", function () {
  const navbarHTML = `
  
  <!-- this is the logo you are using -->
  <!-- add link to go to home page -->
  <a class="navbar-brand" href="#">logo here<img src="#" alt=""></a>
  
  <!-- Toggler/collapsible Button -->
  <!-- used when on phones and small devices -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
  </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <!-- the search bar in the nav -->
            </ul>
            <form class="form-inline" action="#">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="submit">Search</button>
            </form>
        </div>
  `;
  document.getElementById("navbar-placeholder").innerHTML = navbarHTML;
});

// footer
document.addEventListener("DOMContentLoaded", function () {
  const footerHTML = `
<footer>
        <!-- logo, same as at the top -->
        <a href="#">logo<img src="#" style="height: 5vw; border-radius: 10%;" alt=""></a>
        <!-- word links for page or other pages -->
        <a href="#">link1</a>|
        <a href="#">link2</a>|
        <a href="#">link3</a>|
        <a href="#">link4</a>|
        <a href="#">link5</a>
        <br>
        <!-- add your email at the href -->
        <a href="#"> <i class="far fa-envelope-open"></i>Email Here</a>
        <br>
        <!-- the icon links -->
        <a href="#" target="_blank"><i class="fab fa-github-square"></i></a>
        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <p>&copy; 2025 Vin Diesel Trucking</p>
    </footer>
  `;
  document.getElementById("footer-placeholder").innerHTML = footerHTML;
});
