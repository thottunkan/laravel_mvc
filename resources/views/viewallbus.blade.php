@extends("layout")

<body>
    @section('content') 
            <div class="container" style="margin-top: 100px;">

            <div class="row justify-content-end">
            <div class="col-4">
                <div class="">
                <div class="input-group mb-3">
                            <form action="/searchBus" method="POST">
                            {{csrf_field()}}
                            
                            <div class="input-group-append">
                                <table>
                                    <tr>
                                        <td><input type="text" class="form-control" name="searchbus" placeholder="Search Bus" aria-label="Search Bus" aria-describedby="basic-addon2"></td>
                                        <td><input type="submit" class="btn btn-success input-group-text" id="basic-addon2" value = "Search"></td>
                                    </tr>
                                </table>
                                
                                
                            </div>
                            </form>
                        </div>
                </div>
            </div>
        </div><br>

                <table class="table">
                <th class="text-success">Bus name</th>
                <th class="text-success">Route</th>
                <th class="text-success">Driver</th>
                @foreach( $listbus as $bus)
                        <tr>
                            <td>{{$bus->busno}}</td>
                            <td>{{$bus->route}}</td>
                            <td>{{$bus->driver}}</td>
                        </tr>
                 @endforeach
                </table>
            </div>
    @endsection
</body>