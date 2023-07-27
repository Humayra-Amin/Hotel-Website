@extends('employee.layouts.app')

@section('content')

<div class="card-container ">
    
<img id="file_upload" src="http://placehold.it/100" alt="your image" class="custom-upload-img" />
													<div class="custom-input-file-upload">
														<span class="custom-upload-label">Upload Image</span>
														<input type='file' name="image" onchange="readURL(this);" />
													</div>
												
                       

    <div class="details">
                <h2>Fardin Farabi Chowdhury</h2>
                <p>Position: Software Engineer</p>
                <p>Department: Computer Science Engineering</p>
                <p>Chittagong Independent University</p>
                <p>Email: fardin@example.com</p>
                <p>Phone: +123 456 7890</p>
            </div>

    </div>
</div>
@endsection