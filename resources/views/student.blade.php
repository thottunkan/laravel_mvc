<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @extends("layout")
    @section("content")
        <div class="container mr-auto" style="margin-top: 100px;">
        
            <table class="table table-borderless">
                <tr>
                    <td></td>
                    <td>
                        <h1 class="text-success">Student portal</h1>
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                    
                        <input type="text " class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>Rollno</td>
                    <td><input type="text " class="form-control"></td>
                </tr>
                <tr>
                    <td>Admission no</td>
                    <td><input type="text " class="form-control"></td>
                </tr>
                <tr>
                    <td>College</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-success form-control "></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    @endsection
</body>
</html>