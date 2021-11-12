<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Sales</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
   


</head>
<body>

<!--Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Business Sales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= url('/') ?>">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= url('/category') ?>">Categories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= url('/unit') ?>">Units</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= url('/merchandice') ?>">Merchandices</a>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    @yield('content')
</div>

  {{-- section --}}
  <div class="container mt-4">
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">More Information</h5>
              <a href="#" class="btn btn-primary">Click Here</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">More Information</h5>
              <a href="#" class="btn btn-primary">Click Here</a>
            </div>
          </div>
        </div>
      </div>
</div>

{{-- section --}}

  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted mt-5">
<!-- Section: Social media -->
<section
class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
>


<!-- Right -->
<div>
<a href="" class="me-4 text-reset">
  <i class="fab fa-facebook-f"></i>
</a>
<a href="" class="me-4 text-reset">
  <i class="fab fa-twitter"></i>
</a>
<a href="" class="me-4 text-reset">
  <i class="fab fa-google"></i>
</a>
<a href="" class="me-4 text-reset">
  <i class="fab fa-instagram"></i>
</a>
<a href="" class="me-4 text-reset">
  <i class="fab fa-linkedin"></i>
</a>
<a href="" class="me-4 text-reset">
  <i class="fab fa-github"></i>
</a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->


<!-- Copyright -->
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
© 2021 Copyright:
<a class="text-reset fw-bold" href="https://mdbootstrap.com/">Bussines A Company</a>
</div>
<!-- Copyright -->
</footer>
</body>
</html>