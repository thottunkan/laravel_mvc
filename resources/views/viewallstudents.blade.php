@extends("layout")

<body>
    @section('content') 

    <div class="container" style="margin-top: 100px;">
            <table class="table text-center">
               
                    <div class="row justify-content-end">
                    <div class="col-4">
                        <div class="">
                        <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="searchstudent" placeholder="Search Student" aria-label="Search Student" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-success input-group-text" id="basic-addon2">Search</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div><br>
                <th class="text-success text-center">Student Name</th>
                <th class="text-success text-center">Rollno</th>
                <th class="text-success text-center">Admission no</th>
                <th class="text-success text-center">Colllege</th>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->stud_name}}</td>
                    <td>{{$student->stud_rollno}}</td>
                    <td>{{$student->stud_admnno}}</td>
                    <td>{{$student->stud_college}}</td>
                </tr>
                @endforeach
            </table>
    </div>

    @endsection
</body>