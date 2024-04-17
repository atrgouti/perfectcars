@extends("layouts.layout")

@section("main")
<header>
    <div class="headerSpacing">
        <h3>Dashboard</h3>
        <img src="/photos/adminImage.jpg" alt="">
    </div>
</header>
<div class="quickViewStatistics">
    <div class="box">
        <img src="/photos/todayspickups.png" alt="">
        <div>
            <p>0</p>
            <p>Today's Pickups</p>
        </div>
    </div>
    <div class="box">
        <img src="/photos/returnlogo.png" alt="">
        <div>
            <p>0</p>
            <p>Today's drop offs</p>
        </div>
    </div>
    <div class="box">
        <img src="/photos/onrepaire.png" alt="">
        <div>
            <p>0</p>
            <p>On repaire</p>
        </div>
    </div>
</div>
<div class="statistics">
    <div class="status-container">

    </div>
    <div class="status-container">
   
    </div>
</div>
@endsection