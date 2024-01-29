<nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
  <div class="container-fluid">
    <a href="../view/home.php" ><img alt="logo png" class="image" src="../assets/images/logo.png" style=" width:5rem;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fs-4" href="home.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4" href="about.php">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-4" href="index.php">Ürünler</a>
        </li>
      </ul>
    </div>
      
    <div class="container">
  <form class="d-flex justify-content-start">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success ml-0" type="submit">Arama</button>
  </form>
</div>
     
      <a href="../view/shopping-cart.php" class="position-relative">
      <span class="bi bi-cart " style="font-size: 2rem;"></span>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count" >0</span>
      </a>

     

      <div class="dropdown d-inline-block user-dropdown">
          <button type="button" class="btn header-item " id="page-header-user-dropdown"
             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="bi bi-person" style="font-size: 2rem;"></span>
           </button>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="cikis.php"><i class="ri-shut-down-line align-middle me-1 text-danger"></i>Çıkış</a>
            </div>
      </div>


  </div>
</nav>

