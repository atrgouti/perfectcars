@extends("layouts.layout")

@section("pageName")
Dashboard / Cars / {{$car1->name}} - Details
@endsection

@section('main')
    <section class='cardetails'>
        <table>
            <tr>
                <td>Name:</td>
                <td>{{$car1->name}}</td>
            </tr>
            <tr>
                <td>Model:</td>
                <td>{{$car1->model}}</td>
            </tr>
            <tr>
                <td>Year:</td>
                <td>{{$car1->model}}</td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>{{$car1->price}} MAD</td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>{{$car1->avaliable}}</td>
            </tr>
        </table>
        <img src="/carsImages/{{$car1->image}}" alt="">
    </section>
@endsection