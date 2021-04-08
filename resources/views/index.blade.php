@extends("layout")
<body>
    
@section("content")
 
    <div class="container" style="margin-top: 100px;">
        <div class="table">
            <form action="/facultyread" method="POST">
            {{csrf_field()}} <!-- csrf token for security purpose-->
            <table class="table table-borderless">
                <tr>
                    <td></td>
                    <td class="text-success h3"> Faculty</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="form-control"></td>
                </tr>
                <tr>
                    <td>Designation</td>
                    <td><input type="text" name="designation" class="form-control"></td>
                </tr>
                <tr>
                    <td>College</td>
                    <td><input type="text" name="college" class="form-control"></td>
                </tr>
                <tr>
                    <td>Contact no</td>
                    <td><input type="text" name="contactno" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn form-control text-white btn-success "></td>
                </tr>
            </table>
            </form>
        </div>
    </div>
@endsection
</body>
</html>