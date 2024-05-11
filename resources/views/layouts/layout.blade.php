<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFECT CARS</title>
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/cars.css">
    <link rel="stylesheet" href="/css/addnewcar.css">
    <link rel="stylesheet" href="/css/cardetails.css">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
</head>
<body>
    <main>
        <nav>
            <div class="logo">
                <img src="/photos/logo.png" alt="">
            </div>
            <ul>
                <li>
                <a href="/dashboard"><img src="/photos/dashboardlogo.png" alt=""> Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/cars"><img src="/photos/carslogo.png" alt=""> Cars</a>
                </li>
                <li>
                    <img src="/photos/customerslogo.png" alt=""> Customers
                </li>
                <li>
                    <img src="/photos/bookingslogo.png" alt=""> Bookings
                </li>
                <li>
                    <img src="/photos/logoutlogo.png" alt=""> Logout
                </li>
            </ul>
        </nav>
        <div class='maincontent'>
            <header>
                <div class="headerSpacing">
                    <h3>@yield("pageName")</h3>
                    <img src="/photos/adminImage.jpg" alt="">
                </div>
            </header>
            @yield("main")
        </div>
    </main>
    <!-- JavaScript for handling AJAX navigation -->
<script>
    $(document).ready(function() {
        // Intercept clicks on anchor links with 'ajax-link' class
        $('a.ajax-link').on('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior (page reload)

            var url = $(this).attr('href'); // Get the URL from the anchor's href attribute

            // Use AJAX to fetch content from the URL
            $.get(url, function(data) {
                // Update the content area with the fetched data
                $('#content').html(data);
            });
        });
    });
</script>
</body>
</html>