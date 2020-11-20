<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laravel-news</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
<br><br>
<div class="container">
<form class="form-inline" action="/search">
    @csrf
    <label for="keyword">Kata kunci : </label>
    <input type="text" class="form-control" name="keyword">
    <button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
      <h2>Daftar Artikel</h2>
        @foreach($artikel as $a)
        <div class="row">
          <div class="col-lg-6">
            <img src="{{ $a->urlToImage}}" class="img-fluid" alt="">
          </div><break>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>{{ $a->title}}</h3>
            <p class="font-italic">{{ $a->url}}</p>
            <p>{{ $a->description}}</p>
          </div>
        </div>
        <br><br>
        @endforeach
      </div>
    </section><!-- End About Section -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>