@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- Edit Slider Modal -->
        <div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="editSliderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="editSliderModalLabel">Edit Slider</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="editSlider-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="edit-slider-form" action="{{ route('administration.slider.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="slider-id">

                            <div class="mb-3">
                                <label for="slider-title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="slider-title" placeholder="Enter slider title" required>
                                <div class="invalid-feedback">Please enter the slider title.</div>
                            </div>

                            <div class="mb-3">
                                <label for="slider-description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="slider-description" placeholder="Enter slider description"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="slider-button-text" class="form-label">Button Text</label>
                                <input type="text" class="form-control" name="button_text" id="slider-button-text" placeholder="Enter button text">
                            </div>

                            <div class="mb-3">
                                <label for="slider-button-link" class="form-label">Button Link</label>
                                <input type="text" class="form-control" name="button_link" id="slider-button-link" placeholder="Enter button link">
                            </div>

                            <div class="mb-3">
                                <label for="slider-image" class="form-label">Image</label>
                                <div class="mb-2">
                                    <img src="{{ asset('storage/sliders/default.jpg') }}" id="slider-preview-img" class="img-fluid" alt="Slider Image">
                                </div>
                                <input class="form-control" type="file" name="image" id="slider-image" accept="image/png, image/jpeg">
                            </div>

                            <div class="mb-3">
                                <label for="slider-image-alt" class="form-label">Image Alt Text</label>
                                <input type="text" class="form-control" name="image_alt" id="slider-image-alt" placeholder="Enter image alt text">
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateSliderBtn">Update Slider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Slider Modal -->

        <!-- Page Heading and Sliders Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Sliders</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchSlider" placeholder="Search for slider title..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <!-- No Add button needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sliders Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="sliders-table-body">
                                @foreach($sliders as $slider)
                                @include('administration.partials.slider-row', ['slider' => $slider])
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Antai Fintech Global.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Techspa Central
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Include SweetAlert2 CDN if not already included -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- AJAX and jQuery Scripts -->
<script>
$(document).ready(function(){
    // Open Edit Slider Modal and fill form with data
    $(document).on("click", ".edit-slider", function(){
        var id = $(this).data("id");
        var title = $(this).data("title");
        var description = $(this).data("description");
        var buttonText = $(this).data("button_text");
        var buttonLink = $(this).data("button_link");
        var image = $(this).data("image");
        var imageAlt = $(this).data("image_alt");

        $("#slider-id").val(id);
        $("#slider-title").val(title);
        $("#slider-description").val(description);
        $("#slider-button-text").val(buttonText);
        $("#slider-button-link").val(buttonLink);
        $("#slider-preview-img").attr("src", image);
        $("#slider-image-alt").val(imageAlt);

        var editModal = new bootstrap.Modal(document.getElementById('editSliderModal'));
        editModal.show();
    });

    // Image preview for slider image
    $("#slider-image").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#slider-preview-img");
        var defaultImage = "{{ asset('storage/sliders/default.jpg') }}";
        if(file){
            var reader = new FileReader();
            reader.onload = function(e){
                $previewImg.attr("src", e.target.result);
            };
            reader.onerror = function(e){
                console.error("Error reading file:", e);
            };
            reader.readAsDataURL(file);
        } else {
            $previewImg.attr("src", defaultImage);
        }
    });

    // (Optional) Submit edit slider form via AJAX
    $("#edit-slider-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending edit slider AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "Slider updated successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    // Update the slider row in the table if needed
                    $("#sliders-table-body").find("tr[data-slider-id='"+response.sliderId+"']").replaceWith(response.updatedRow);
                    $("#edit-slider-form")[0].reset();
                    $("#editSliderModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="#">Why do I have this issue?</a>',
                        showCloseButton: true,
                    });
                }
            },
            error: function(xhr){
                if(xhr.status === 422){
                    var errors = xhr.responseJSON.errors;
                    var errorMessages = "";
                    $.each(errors, function(key, value){
                        errorMessages += value[0] + "\n";
                    });
                    Swal.fire({
                        title: "Validation Error",
                        text: errorMessages,
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="#">Why do I have this issue?</a>',
                        showCloseButton: true,
                    });
                }
            }
        });
    });
});
</script>
@endsection
