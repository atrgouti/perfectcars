@extends("layouts.layout")

@section("pageName")
Dashboard / Cars
@endsection

@section('main')
<div class="carsArea">
    <div class="filters">
        <div>
            <button>All</button>
            <button>Avaliable</button>
            <button>On rent</button>
        </div>
        <div>
            <a href="/dashboard/cars/addnewcar"><button class='addnewvehiclebtn'>Add New Vehicle</button></a>
        </div>
    </div>
    <table border='1'>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Type</th>
                <th>Year</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carsdata as $car)
            <tr>
                <th>{{$car->id}}</th>
                <th>{{$car->name}}</th>
                <th>{{$car->price}}</th>
                <th>{{$car->model}}</th>
                <th>{{$car->year}}</th>
                <th>{{$car->avaliable}}</th>
                <th style="padding: 20px; ">
                    <form method="POST" action="/dashboard/cars/{{ $car->id }}">
                        @csrf
                        @method("DELETE")
                        <button style="margin: 5px; padding: 10px 20px; background-color: #8B0000; text-decoration: none; color: white; border-radius: 10px; border: none; cursor: pointer;" Type='submit'>delete</button>
                    </form>
                    <form method="GET" action="/dashboard/cars/{{ $car->id }}">
                        @csrf
                        <button style="margin: 5px; padding: 10px 20px; background-color: #8B0000; text-decoration: none; color: white; border-radius: 10px; border: none; cursor: pointer;" type="submit">Show</button>          
                    </form>
                    <form method="GET" action="/dashboard/{{ $car->id }}/update">
                        @csrf
                        <button style="margin: 5px; padding: 10px 20px; background-color: #8B0000; text-decoration: none; color: white; border-radius: 10px; border: none; cursor: pointer;" type="submit">Update</button>          
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection