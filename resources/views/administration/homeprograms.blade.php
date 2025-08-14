@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Add Home Program Modal -->
        <div class="modal fade" id="addHomeProgramModal" tabindex="-1" aria-labelledby="addHomeProgramModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="addHomeProgramModalLabel">Add Home Program</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addHomeProgram-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="homeprogram-form" action="{{ route('administration.homeprogram.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <div class="mb-3 text-center">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger for Thumbnail -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="thumbnail-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Thumbnail">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="thumbnail" id="thumbnail-input" type="file" accept="image/png, image/gif, image/jpeg, image/webp">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/homeprogram/default-thumbnail.png') }}" id="thumbnail-img" class="avatar-md rounded-circle" alt="Thumbnail" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Program Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter program name" required>
                                <div class="invalid-feedback">Please enter a program name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" placeholder="Enter program description"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="rating" class="form-label">Rating</label>
                                    <input type="number" step="0.1" class="form-control" name="rating" id="rating" placeholder="Enter rating (0-5)" required>
                                    <div class="invalid-feedback">Please enter a valid rating.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="totalReviews" class="form-label">Total Reviews</label>
                                    <input type="number" class="form-control" name="totalReviews" id="totalReviews" placeholder="Enter total reviews" required>
                                    <div class="invalid-feedback">Please enter the number of reviews.</div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addHomeProgramBtn">Add Program</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Home Program Modal -->

        <!-- Edit Home Program Modal -->
        <div class="modal fade" id="updateHomeProgramModal" tabindex="-1" aria-labelledby="updateHomeProgramModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="updateHomeProgramModalLabel">Edit Home Program</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="updateHomeProgram-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="update-homeprogram-form" action="{{ route('administration.homeprogram.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="update-homeprogram-id">
                            <div class="mb-3 text-center">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger for Thumbnail -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="update-thumbnail-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Thumbnail">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="thumbnail" id="update-thumbnail-input" type="file" accept="image/png, image/gif, image/jpeg, image/webp">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/homeprogram/default-thumbnail.png') }}" id="update-thumbnail-img" class="avatar-md rounded-circle" alt="Thumbnail" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="update-name" class="form-label">Program Name</label>
                                <input type="text" class="form-control" name="name" id="update-name" placeholder="Enter program name" required>
                                <div class="invalid-feedback">Please enter a program name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="update-description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="update-description" placeholder="Enter program description"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="update-rating" class="form-label">Rating</label>
                                    <input type="number" step="0.1" class="form-control" name="rating" id="update-rating" placeholder="Enter rating (0-5)" required>
                                    <div class="invalid-feedback">Please enter a valid rating.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="update-totalReviews" class="form-label">Total Reviews</label>
                                    <input type="number" class="form-control" name="totalReviews" id="update-totalReviews" placeholder="Enter total reviews" required>
                                    <div class="invalid-feedback">Please enter the number of reviews.</div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateHomeProgramBtn">Update Program</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Home Program Modal -->

        <!-- Delete Home Program Modal -->
        <div class="modal fade" id="removeHomeProgramModal" tabindex="-1" aria-labelledby="removeHomeProgramModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeHomeProgramModalLabel">Delete Home Program</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeHomeProgram-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="remove-homeprogram-form" action="{{ route('administration.homeprogram.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-homeprogram-id">
                            <p>Are you sure you want to delete this home program?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeHomeProgramBtn">Delete Program</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Home Program Modal -->

        <!-- Page Heading and Home Programs Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Home-Programs</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchResultList" placeholder="Search for home-programs..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addHomeProgramModal">
                                    Add Program
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Programs Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Reviews</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="homeprograms-table-body">
                                @foreach($programs as $program)
                                    @include('administration.partials.homeprogram-row', ['program' => $program])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Home Programs Table -->

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function(){
    console.log("Home Programs view loaded.");

    // Add Home Program: (Similar structure to your other add modals)
    $("#homeprogram-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        console.log("Adding home program. Form data:", formData);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending add home program AJAX request.");
            },
            success: function(response){
                console.log("Response from add home program:", response);
                if(response.status === "success"){
                    Swal.fire("Added!", response.message, "success");
                    $("#homeprograms-table-body").append(response.newRow);
                    $("#homeprogram-form")[0].reset();
                    $("#addHomeProgramModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                }
            },
            error: function(xhr){
                console.error("Error adding home program:", xhr);
                Swal.fire({
                    title: "Oops...",
                    text: "An error occurred.",
                    icon: "error",
                    customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            }
        });
    });

    // Edit Home Program Modal Trigger
    $(document).on("click", ".edit-homeprogram", function(){
        var id = $(this).data("id");
        var name = $(this).data("name");
        var description = $(this).data("description");
        var rating = $(this).data("rating");
        var totalReviews = $(this).data("totalreviews");
        var thumbnail = $(this).data("thumbnail");

        $("#update-homeprogram-id").val(id);
        $("#update-name").val(name);
        $("#update-description").val(description);
        $("#update-rating").val(rating);
        $("#update-totalReviews").val(totalReviews);
        $("#update-thumbnail-img").attr("src", thumbnail);

        var updateModal = new bootstrap.Modal(document.getElementById('updateHomeProgramModal'));
        updateModal.show();
    });

    // Update Home Program
    $("#update-homeprogram-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        console.log("Updating home program. Form data:", formData);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending update home program AJAX request.");
            },
            success: function(response){
                console.log("Response from update home program:", response);
                if(response.status === "success"){
                    Swal.fire("Updated!", response.message, "success");
                    $("#homeprograms-table-body").find("tr[data-homeprogram-id='" + response.programId + "']").replaceWith(response.updatedRow);
                    $("#update-homeprogram-form")[0].reset();
                    $("#updateHomeProgramModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Update failed!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                }
            },
            error: function(xhr){
                console.error("Error updating home program:", xhr);
                Swal.fire({
                    title: "Oops...",
                    text: "An error occurred.",
                    icon: "error",
                    customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            }
        });
    });

    // Delete Home Program Modal Trigger
    $(document).on("click", ".remove-homeprogram", function(){
        var id = $(this).data("id");
        console.log("Clicked delete for home program ID:", id);
        $("#remove-homeprogram-id").val(id);
        var modalEl = document.getElementById("removeHomeProgramModal");
        if(modalEl){
            console.log("Modal element found. Initializing modal.");
            var myModal = new bootstrap.Modal(modalEl);
            myModal.show();
            console.log("Modal shown for home program ID:", id);
        } else {
            console.error("Modal element 'removeHomeProgramModal' not found.");
        }
    });

    // Delete Home Program via AJAX
    $("#remove-homeprogram-form").on("submit", function(e){
        e.preventDefault();
        var actionUrl = $(this).attr("action");
        console.log("Submitting delete home program form. Action URL:", actionUrl);
        var formData = $(this).serialize();
        console.log("Form data:", formData);
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: formData,
            success: function(response){
                console.log("Response from delete home program:", response);
                if(response.status === "success"){
                    Swal.fire("Deleted!", response.message, "success")
                        .then(() => {
                            console.log("Swal closed.");
                        });
                    $("#homeprograms-table-body").find("tr[data-homeprogram-id='" + response.programId + "']").remove();
                    $("#remove-homeprogram-form")[0].reset();
                    var modalInstance = bootstrap.Modal.getInstance(document.getElementById("removeHomeProgramModal"));
                    if(modalInstance){
                        modalInstance.hide();
                        console.log("Modal hidden after deletion.");
                    } else {
                        console.warn("Modal instance not found.");
                    }
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Deletion failed!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="#">Why do I have this issue?</a>',
                        showCloseButton: true,
                    });
                }
            },
            error: function(xhr){
                console.error("Error deleting home program:", xhr);
                Swal.fire({
                    title: "Oops...",
                    text: "An error occurred.",
                    icon: "error",
                    customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                    buttonsStyling: false,
                    showCloseButton: true,
                });
            }
        });
    });

    // Image Preview for Add Modal
    $("#thumbnail-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#thumbnail-img");
        var defaultImage = "{{ asset('backend/images/homeprogram/default-thumbnail.png') }}";
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

    // Image Preview for Update Modal
    $("#update-thumbnail-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#update-thumbnail-img");
        var defaultImage = "{{ asset('backend/images/homeprogram/default-thumbnail.png') }}";
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
});
</script>
@endsection

