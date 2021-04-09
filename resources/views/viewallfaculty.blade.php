@extends('layout');

<body>
    @section('content')

    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-end">
            <div class="col-4">
                <div class="">
                <div class="input-group mb-3">
                            <form action="/searchfacuty" method="POST">
                            {{csrf_field()}}
                            
                            <div class="input-group-append">
                                <table>
                                    <tr>
                                        <td><input type="text" class="form-control" name="searchfaculty" placeholder="Search Faculty" aria-label="Search Faculties" aria-describedby="basic-addon2"></td>
                                        <td><input type="submit" class="btn btn-success input-group-text" id="basic-addon2" value = "Search"></td>
                                    </tr>
                                </table>
                                
                                
                            </div>
                            </form>
                        </div>
                </div>
            </div>
        </div><br>
        <table class="table  text-center">
        <tr class="justify-content-end">
                    <td></td>
                    <td>
                        <!-- <div class="input-group mb-3">
                            <input type="text" class="form-control" name="searchfacuty" placeholder="Search Faculty" aria-label="Search Faculties" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success input-group-text" id="basic-addon2">Search</button>
                            </div>
                        </div> -->
                    </td>
                </tr> 
            <th class="text-success text-center">Name</th>
            <th class="text-success text-center">Designation</th>
            <th class="text-success text-center">College</th>
            <th class="text-success text-center"> Contact no</th>

            @foreach($faculties as $faculty)
                <tr class="text-cemter">
                    <td>{{ $faculty->fname}}</td>
                    <td>{{$faculty->designation}}</td>
                    <td>{{$faculty->college}}</td>
                    <td>{{$faculty->contactno}}</td>
                </tr>
            @endforeach
        </table>
    
    </div>

    @endsection
</body>