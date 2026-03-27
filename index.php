
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('config/db.php'); 

include('lang.php');

// SAFE CHECK (IMPORTANT)
if(isset($translations[$lang]['title'])){
    $title = $translations[$lang]['title'];
} else {
    $title = "Welcome to DM Exports";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DM Exports</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand">DM Exports</a>

        <div class="ms-auto">
            <a href="?lang=en" class="btn btn-outline-light btn-sm">EN</a>
            <a href="?lang=hi" class="btn btn-outline-warning btn-sm">HI</a>
        </div>
    </div>
</nav>

<section class="hero text-white text-center d-flex align-items-center">
    <div class="container">
        <h1 class="display-4 fw-bold">
            Global Exporters of Premium Jaggery
        </h1>
        <p class="lead">Delivering Quality from India to the World</p>

        <a href="#inquiry" class="btn btn-primary me-2">Get Quote</a>
        <a href="products.php" class="btn btn-warning">View Products</a>
    </div>
</section>

<a href="https://wa.me/919876543210" target="_blank"
style="position:fixed;bottom:20px;right:20px;">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" width="60">
</a>
 
<h2 class="text-center mt-3"><?php echo $title; ?></h2>

<<div class="container mt-5" id="inquiry">
    <div class="card shadow p-4">
        <h2 class="text-center">Send Inquiry</h2>

        <form action="save_inquiry.php" method="POST">
            <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email Address" required>
            <input type="text" name="country" class="form-control mb-2" placeholder="Country">
            <textarea name="message" class="form-control mb-2" placeholder="Your Requirement"></textarea>
            <button class="btn btn-dark w-100">Submit Inquiry</button>
        </form>
    </div>
</div>  

<div class="container text-center mt-5">
    <h2>Why Choose Us</h2>

    <div class="row mt-4">
        <div class="col-md-3">✅ 100% Natural</div>
        <div class="col-md-3">🌍 Global Export</div>
        <div class="col-md-3">📦 Bulk Supply</div>
        <div class="col-md-3">🏅 Certified Products</div>
    </div>
</div>

<div data-aos="fade-up">
    Premium Export Quality
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>

</body>
</html>