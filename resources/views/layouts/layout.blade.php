<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/css/dashboard.css">
    <title>Document</title>
    <link rel="stylesheet" href="/css/layout.css">
</head>
<body>
    <main>
        <nav>
            <div class="logo">
                <img src="/photos/logo.png" alt="">
            </div>
            <ul>
                <li>
                    <img src="/photos/dashboardlogo.png" alt=""> Dashboard
                </li>
                <li>
                    <img src="/photos/carslogo.png" alt=""> Cars
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
            @yield("main")
        </div>
    </main>
</body>
</html>