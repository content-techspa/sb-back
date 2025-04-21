@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- Add Gallery Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="addCategoryModalLabel">Add Gallery Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addCategory-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="category-form" action="{{ route('administration.gallerycategory.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger for Cover Image -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Cover Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="cover_image" id="cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/gallery/default-cover.jpg') }}" id="cover-img" class="avatar-md rounded-circle" alt="Cover Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label for="name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter category name" required />
                                    <div class="invalid-feedback">Please enter a category name.</div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary" id="addNewCategory">Add Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Gallery Category Modal -->

        <!-- Edit Gallery Category Modal -->
        <div class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="updateCategoryModalLabel">Edit Gallery Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="updateCategory-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="update-category-form" action="{{ route('administration.gallerycategory.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="update-categoryid-input">
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger for Cover Image -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="update-cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Cover Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="cover_image" id="update-cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/gallery/default-cover.jpg') }}" id="update-cover-img" class="avatar-md rounded-circle" alt="Cover Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label for="update-name" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name" id="update-name" placeholder="Enter category name" required />
                                    <div class="invalid-feedback">Please enter a category name.</div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary" id="updateCategoryBtn">Update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Gallery Category Modal -->

        <!-- Delete Gallery Category Modal -->
        <div class="modal fade" id="removeCategoryModal" tabindex="-1" aria-labelledby="removeCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeCategoryModalLabel">Delete Gallery Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeCategory-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="remove-category-form" action="{{ route('administration.gallerycategory.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-category-id">
                            <p>Are you sure you want to delete this gallery category?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeCategoryBtn">Delete Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Gallery Category Modal -->

        <!-- Page Heading and Categories Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Gallery Categories</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchResultList" placeholder="Search for category name..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <!-- Button to trigger Add Gallery Category Modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Cover Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="categories-table-body">
                                @foreach($categories as $category)
                                    @include('administration.partials.gallery-category-row', ['category' => $category])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Categories Table -->

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
    /*** Add Category ***/
    $("#category-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending add category AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "Gallery category added successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#categories-table-body").append(response.newRow);
                    $("#category-form")[0].reset();
                    $("#addCategoryModal").modal('hide');
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

    /*** Edit Category ***/
    $(document).on("click", ".edit-category", function(){
        var id = $(this).data("id");
        var name = $(this).data("name");
        var cover_image = $(this).data("cover_image");

        $("#update-categoryid-input").val(id);
        $("#update-name").val(name);
        $("#update-cover-img").attr("src", cover_image);

        var updateModal = new bootstrap.Modal(document.getElementById('updateCategoryModal'));
        updateModal.show();
    });

    $("#update-category-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending update category AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "Gallery category updated successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#categories-table-body").find("tr[data-category-id='"+response.categoryId+"']").replaceWith(response.updatedRow);
                    $("#update-category-form")[0].reset();
                    $("#updateCategoryModal").modal('hide');
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

    /*** Delete Category ***/
    $(document).on("click", ".remove-category", function(){
        var id = $(this).data("id");
        $("#remove-category-id").val(id);
        var removeModal = new bootstrap.Modal(document.getElementById('removeCategoryModal'));
        removeModal.show();
    });

    $("#remove-category-form").on("submit", function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            beforeSend: function(){
                console.log("Sending delete category AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Gallery category deleted successfully!",
                        icon: "success",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#categories-table-body").find("tr[data-category-id='"+response.categoryId+"']").remove();
                    $("#remove-category-form")[0].reset();
                    $("#removeCategoryModal").modal('hide');
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

    /*** Image Preview for Add and Update Modals ***/
    $("#cover-image-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#cover-img");
        var defaultImage = "{{ asset('backend/images/gallery/default-cover.jpg') }}";
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

    $("#update-cover-image-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#update-cover-img");
        var defaultImage = "{{ asset('backend/images/gallery/default-cover.jpg') }}";
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
