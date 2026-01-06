@extends("layouts.admin_layout")
@section("admin-content")
<div class="container">
    <h4 class="text-center">Add New Course / Material</h4>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route("admin.postAddCource") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Enter course title" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control" placeholder="Enter a brief description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-semibold">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*" required>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn custom-dark-btn px-4">Add Course</button>
                    <a href="#" class="btn btn-outline-secondary px-4 ms-2">Cancel</a>
                </div>

              
            </form>
        </div>
    </div>
</div>

@endsection
