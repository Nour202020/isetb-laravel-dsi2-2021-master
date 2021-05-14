<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>School management system</title>

    <style>
        

            /* The side navigation menu */
            .sidebar {
                margin: 0;
                padding: 0;
                width: 200px;
                background-color: #f1f1f1;
                position: fixed;
                height: 100%;
                overflow: auto;
                }
    
                /* Sidebar links */
                .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
                }
    
                /* Active/current link */
                .sidebar a.active {
                background-color: #e2b213;
                color: white;
                }
    
                /* Links on mouse-over */
                .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
                }
    
                /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
                div.content {
                margin-left: 200px;
                padding: 1px 16px;
                height: 1000px;
                }
    
                /* On screens that are less than 700px wide, make the sidebar into a topbar */
                @media screen and (max-width: 700px) {
                .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
                }
                .sidebar a {float: left;}
                div.content {margin-left: 0;}
                }
    
                /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
                @media screen and (max-width: 400px) {
                .sidebar a {
                    text-align: center;
                    float: none;
                }
                }
    </style>
</head>
<body>
@include("navbar")

<!-- The sidebar -->

@include("sidebar")


<div class="row header-container justify-content-center">
    <div class="header">
        <h1>School Management System</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Enter the informations of the new student</h5>
                        <form action="{{ url('/store') }}" method="get">
                            @csrf 
                            <div class="form-group">
                                <label>CIN</label>
                                <input name="cin" type="text" class="form-control"  placeholder="Enter cin">
                            </div> 
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" class="form-control"  placeholder="Enter the name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <input name="department" type="text" class="form-control"  placeholder="Enter the Department">
                            </div> 
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">
                <div class="card mb-3">
                    <img src="https://cdn.pixabay.com/photo/2015/05/19/14/55/educational-773651_960_720.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Update informations of student</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="get">
                            @csrf
                            <div class="form-group">
                                <label>CIN</label>
                                <input value="{{ $student->cin }}" name="cin" type="text" class="form-control"  placeholder="Enter cin">
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input value="{{ $student->name }}" name="name" type="text" class="form-control"  placeholder="Enter the name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <input value="{{ $student->department }}" name="department" type="text" class="form-control"  placeholder="Enter the Department">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>