@extends("layout")

<body>
    @section("content")

    <h1>in book</h1>
    <div class="container" style="margin-top: 100px;">
    <form action="/bookread" method="POST">
        <table class="table table-borderless">
        
            {{csrf_field()}}
            <tr>
                <td>booktitle</td>
                <td><input type="text" class="form-control" name="booktitle"></td>
            </tr>
            <tr>
                <td>author </td>
                <td><input type="text" class="form-control" name="author"></td>
            </tr>
            <tr>
                <td>description</td>
                <td><input type="text" class="form-control" name="description"></td>
            </tr>
            <tr>
                <td>distributer</td>
                <td><input type="text" class="form-control" name="distributer"></td>
            </tr>
            <tr>
                <td>price</td>
                <td><input type="text" class="form-control" name="price"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="form-control text-white bg-success" ></td>
            </tr>
           
        </table>
        </form>
    </div>
    @endsection
</body>