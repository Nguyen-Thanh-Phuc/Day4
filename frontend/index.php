<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demoshop - Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="moon-stars-fill" viewBox="0 0 16 16">
    <path d="M6 .278a.768.768 0 0 1 .08.858 ..."></path>
  </symbol>
  <symbol id="sun-fill" viewBox="0 0 16 16">
    <path d="M8 12a4 4 0 1 0 0-8 ..."></path>
  </symbol>
  <symbol id="circle-half" viewBox="0 0 16 16">
    <path d="M8 15A7 7 0 1 0 8 1v14z ..."></path>
  </symbol>
  <symbol id="check2" viewBox="0 0 16 16">
    <path d="M13.854 3.646a.5.5 ..."></path>
  </symbol>
</svg>

<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
  <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
    id="bd-theme" type="button" data-bs-toggle="dropdown" aria-expanded="false"
    aria-label="Toggle theme">
    <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
    <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
    <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#sun-fill"></use></svg>
      Light
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button></li>
    <li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#moon-stars-fill"></use></svg>
      Dark
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button></li>
    <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
      <svg class="bi me-2 opacity-50" aria-hidden="true"><use href="#circle-half"></use></svg>
      Auto
      <svg class="bi ms-auto d-none" aria-hidden="true"><use href="#check2"></use></svg>
    </button></li>
  </ul>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Demoshop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="uploads/slider/slider1.png" class="d-block w-100" alt="Slider 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome to Demoshop</h5>
        <p>High-quality products, best prices.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="uploads/slider/slider2.png" class="d-block w-100" alt="Slider 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Shop Now</h5>
        <p>Explore our latest collections.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<footer class="container mt-5 text-center text-muted">
  <hr>
  <p>© <?= date('Y') ?> Demoshop. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
