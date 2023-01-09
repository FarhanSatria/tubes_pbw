<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clinz Laundrye</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="client/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="client/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="client/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        @include('client.spinner');
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        @include('client.sidebar');
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('client.navbar');
            <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            @include('client.sales-revenue');
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            @include('client.sales-chart');
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            @include('client.sales-start');
            <!-- Recent Sales End -->


            <!-- Widgets Start -->
            @include('client.widget');
            <!-- Widgets End -->


            <!-- Footer Start -->
            @include('client.footer');
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="client/lib/chart/chart.min.js"></script>
    <script src="client/lib/easing/easing.min.js"></script>
    <script src="client/lib/waypoints/waypoints.min.js"></script>
    <script src="client/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="client/lib/tempusdominus/js/moment.min.js"></script>
    <script src="client/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="client/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="client/js/main.js"></script>
</body>

</html>