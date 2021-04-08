@extends("layout")
<body>
    
@section("content")
    <div class="container" style="margin-top: 100px; ">
    <h1 class="text-success">Add Bus</h1>
    <form action="/busread" method="POST">
    {{csrf_field()}}
    <table class="table table-borderless">
        <tr>
            <td>Bus no</td>
            <td><input type="text" class="form-control" name="busno"></td>
        </tr>
        <tr>
            <td>Route</td>
            <td><input type="text" class="form-control" name="route"></td>
        </tr>
        <tr>
            <td>Driver Name</td>
            <td><input type="text" class="form-control" name="driver"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" class="btn bg-success text-white form-control"></td>
        </tr>
        
    </table>
    </form>

    </div>
    
@endsection
</body>