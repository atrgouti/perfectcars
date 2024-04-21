@extends("layouts.layout")

@section("pageName")
Dashboard / Cars
@endsection

@section('main')
<div class="carsArea">
    <div class="filters">
        <button>All</button>
        <button>Avaliable</button>
        <button>On rent</button>
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
                <th>1</th>
                <th>{{$car->name}}</th>
                <th>{{$car->price}}</th>
                <th>{{$car->model}}</th>
                <th>{{$car->year}}</th>
                <th>{{$car->avaliable}}</th>
                <th><button>edit</button></th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection