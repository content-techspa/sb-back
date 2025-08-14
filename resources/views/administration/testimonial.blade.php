@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- Add Testimonial Modal -->
        <div class="modal fade" id="addTestimonialModal" tabindex="-1" aria-labelledby="addTestimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="addTestimonialModalLabel">Add Testimonial</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addTestimonial-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="testimonial-form" action="{{ route('administration.testimonial.store') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="testimonial-title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="testimonial-title" placeholder="Enter title" required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="mb-3">
                                <label for="testimonial-subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" name="subtitle" id="testimonial-subtitle" placeholder="Enter subtitle">
                            </div>
                            <div class="mb-3">
                                <label for="testimonial-text" class="form-label">Testimonial</label>
                                <textarea class="form-control" name="testimonial" id="testimonial-text" placeholder="Enter testimonial" required></textarea>
                                <div class="invalid-feedback">Please enter the testimonial text.</div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addNewTestimonial">Add Testimonial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Testimonial Modal -->

        <!-- Edit Testimonial Modal -->
        <div class="modal fade" id="updateTestimonialModal" tabindex="-1" aria-labelledby="updateTestimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="updateTestimonialModalLabel">Edit Testimonial</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="updateTestimonial-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="update-testimonial-form" action="{{ route('administration.testimonial.update') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="update-testimonial-id">
                            <div class="mb-3">
                                <label for="update-testimonial-title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="update-testimonial-title" placeholder="Enter title" required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="mb-3">
                                <label for="update-testimonial-subtitle" class="form-label">Subtitle</label>
                                <input type="text" class="form-control" name="subtitle" id="update-testimonial-subtitle" placeholder="Enter subtitle">
                            </div>
                            <div class="mb-3">
                                <label for="update-testimonial-text" class="form-label">Testimonial</label>
                                <textarea class="form-control" name="testimonial" id="update-testimonial-text" placeholder="Enter testimonial" required></textarea>
                                <div class="invalid-feedback">Please enter the testimonial text.</div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateTestimonialBtn">Update Testimonial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Testimonial Modal -->

        <!-- Delete Testimonial Modal -->
        <div class="modal fade" id="removeTestimonialModal" tabindex="-1" aria-labelledby="removeTestimonialModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeTestimonialModalLabel">Delete Testimonial</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeTestimonial-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="remove-testimonial-form" action="{{ route('administration.testimonial.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-testimonial-id">
                            <p>Are you sure you want to delete this testimonial?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeTestimonialBtn">Delete Testimonial</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Testimonial Modal -->

        <!-- Page Heading and Testimonials Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Testimonials</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchTestimonialList" placeholder="Search for testimonial title..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">Add Testimonial</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Subtitle</th>
                                    <th scope="col">Testimonial</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="testimonials-table-body">
                                @foreach($testimonials as $testimonial)
                                    @include('administration.partials.testimonial-row', ['testimonial' => $testimonial])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials Table -->

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
                    Design & Developed by Techspa Central
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
    /*** Add Testimonial ***/
    $("#testimonial-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending add testimonial AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "Testimonial added successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#testimonials-table-body").append(response.newRow);
                    $("#testimonial-form")[0].reset();
                    $("#addTestimonialModal").modal('hide');
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

    /*** Edit Testimonial ***/
    $(document).on("click", ".edit-testimonial", function(){
        var id = $(this).data("id");
        var title = $(this).data("title");
        var subtitle = $(this).data("subtitle");
        var testimonial = $(this).data("testimonial");

        $("#update-testimonial-id").val(id);
        $("#update-testimonial-title").val(title);
        $("#update-testimonial-subtitle").val(subtitle);
        $("#update-testimonial-text").val(testimonial);

        var updateModal = new bootstrap.Modal(document.getElementById('updateTestimonialModal'));
        updateModal.show();
    });

    $("#update-testimonial-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending update testimonial AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "Testimonial updated successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#testimonials-table-body").find("tr[data-testimonial-id='"+response.testimonialId+"']").replaceWith(response.updatedRow);
                    $("#update-testimonial-form")[0].reset();
                    $("#updateTestimonialModal").modal('hide');
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

    /*** Delete Testimonial ***/
    $(document).on("click", ".remove-testimonial", function(){
        var id = $(this).data("id");
        $("#remove-testimonial-id").val(id);
        var removeModal = new bootstrap.Modal(document.getElementById('removeTestimonialModal'));
        removeModal.show();
    });

    $("#remove-testimonial-form").on("submit", function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            beforeSend: function(){
                console.log("Sending delete testimonial AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Testimonial deleted successfully!",
                        icon: "success",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#testimonials-table-body").find("tr[data-testimonial-id='"+response.testimonialId+"']").remove();
                    $("#remove-testimonial-form")[0].reset();
                    $("#removeTestimonialModal").modal('hide');
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
        });
    });
});
</script>
@endsection
