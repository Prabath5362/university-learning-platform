@extends("layouts.user_layout")

@section("user-content")

<div class="container-fluid mt-4">

    <h4 class="mb-4 mt-7 text-center">Available Courses</h4>

    <div class="row mb-4">
        <div class="col-md-6 offset-md-3">
            <form method="GET" action="" class="d-flex">
                <input
                    type="text"
                    name="search"
                    class="form-control me-2"
                    placeholder="Search materials..."
                >
                <button type="submit" class="btn btn-secondary">Search</button>
            </form>
        </div>
    </div>

    @php
        $materials = [
            [
                "title" => "Introduction to programming in python",
                "desc" => "This course introduces Python programming from scratch. Students will learn syntax, variables, control structures, functions, lists, dictionaries, and basic file handling. Ideal for beginners and automation-focused learners.",
                "img" => "./images/python.png"
            ],

            [
                "title"=> "Computer Networking Essentials",
                "desc" => "Learn the fundamentals of computer networks, including OSI and TCP/IP models, IP addressing, subnetting, routing, switching, and basic network security concepts.",
                "img" => "./images/network.png"
            ],

            [
                "title" => "Java Programming & Object-Oriented Design",
                "desc" => "This course covers Java programming with a strong focus on object-oriented principles such as classes, inheritance, polymorphism, interfaces, and exception handling. Suitable for building desktop and backend applications.",
                "img" => "./images/java.png"
            ],

            [
                "title" => "Database Management Systems",
                "desc" => "Understand how databases work and how to manage them efficiently. This course includes relational database concepts, ER diagrams, SQL queries, normalization, and hands-on practice with MySQL.",
                "img" => "./images/database.png"
            ],

            [
                "title" => "Web Development Technologies",
                "desc" => "Learn how to design and develop dynamic websites using HTML, CSS, JavaScript, and Bootstrap. This course also introduces backend concepts and basic web security principles.",
                "img" => "./images/web.png"
            ]

        ];
    @endphp

    <div class="row">
        @foreach ($materials as $material)
            <div class="col-md-4 mb-4">
            <div class="card bg-white border text-dark shadow-sm h-100 card-hover">
                <img src="{{ asset($material["img"]) }}" class="card-img-top" alt="Course Image" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-center fs-6">{{ $material["title"]}}</h5>
                    <p class="card-text fs-6">
                        {{ $material["desc"] }}
                    </p>
                    <div class="text-center">
                        <a href= {{ "#" }} class="btn btn-outline-secondary btn-sm">See more</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





@endsection
