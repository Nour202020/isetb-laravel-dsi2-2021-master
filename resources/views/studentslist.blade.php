
<div class="card mb-3">
    <img src="https://scontent.ftun12-1.fna.fbcdn.net/v/t1.6435-9/41659949_2022160441176467_595683187674316800_n.jpg?_nc_cat=105&ccb=1-3&_nc_sid=e3f864&_nc_ohc=9JvuPtRJnyIAX_zGXOy&_nc_ht=scontent.ftun12-1.fna&oh=7e95b848d8da37f293df568eed5fa6b0&oe=60B9B0E8" class="card-img-top" alt="ISET Bizerte">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">First name</th>
                <th scope="col">Second Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ url('/destroy/'.$student->id) }}" class="btn btn-sm btn-danger">remove</a>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>






