@extends("layout")
<body>
    
@section("content")
 
    <div class="container" style="margin-top: 100px;">
        <div class="table">
            <table class="table table-borderless">
                <tr>
                    <td>Name</td>
                    <td><input type="text"  class="form-control"></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>College</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input type="submit" class="btn "></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
</body>
</html>