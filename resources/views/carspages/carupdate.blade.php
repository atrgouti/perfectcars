@extends("layouts.layout")

@section("pageName")
Dashboard / Cars / Update car
@endsection

@section('main')
<div class="addnewcararea">
    <h2>Update Vehicle</h2>
    <table>
        <form method="POST" action="{{ url('/dashboard/'. $car3->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
            <tr>
                <td style='padding: 0px 30px;'>
                    Name
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='name' value='{{$car3->name}}'>
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Model
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='model' value='{{$car3->model}}'>
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Year
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='year' value='{{$car3->year}}'> 
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Price
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='price' value='{{$car3->price}}'>
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name='image' value='{{$car3->image}}'></td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Status
                </td>
                    <td>
                    <select name="avaliable" id="avaliable" value='{{$car3->avaliable}}'>
                        <option value="Available">Available</option>
                        <option value="On-rent">On rent</option>
                        <option value="Under-repair">Under repair</option>
                    </select>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type='submit'>Update car</button>
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection 