@extends("layouts.layout")

@section("pageName")
Dashboard / Cars / Add new car
@endsection

@section('main')
<div class="addnewcararea">
    <h2>Add Aew Vehicle</h2>
    
    <table>
        <form method="POST" action="/dashboard/cars/addnewcar" enctype="multipart/form-data">
            @csrf 
            <tr>
                <td style='padding: 0px 30px;'>
                    Name
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='name'>
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Model
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='model'>
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Year
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='year'> 
                </td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Price
                </td>
                <td>
                    <input style='padding: 10px 30px' type="text" name='price'>
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td><input type="file" name='image'></td>
            </tr>
            <tr>
                <td style='padding: 0px 30px;'>
                    Status
                </td>
                    <td>
                    <select name="avaliable" id="avaliable">
                        <option value="Available">Available</option>
                        <option value="On-rent">On rent</option>
                        <option value="Under-repair">Under repair</option>
                    </select>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type='submit'>Add new car</button>
                </td>
            </tr>
        </form>
    </table>
</div>
@endsection
