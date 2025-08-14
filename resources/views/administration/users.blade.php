@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="addUserModalLabel">Add User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addUser-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="user-form" action="{{ route('administration.users.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="user-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select user Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="image" id="user-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/users/user-dummy-img.jpg') }}" id="user-img" class="avatar-md rounded-circle" alt="User Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required />
                                    <div class="invalid-feedback">Please enter a name.</div>
                                </div>
                                <div>
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>
                                <div>
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="phoneNumber" placeholder="Enter your number" required />
                                    <div class="invalid-feedback">Please enter phone number.</div>
                                </div>
                                <div>
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter a password" required />
                                    <div class="invalid-feedback">Please enter a password (min 6 characters).</div>
                                </div>
                                <div>
                                    <label for="user_type" class="form-label">User Type</label>
                                    <select class="form-select" name="user_type" id="user_type" required>
                                        <option value="">Select User Type</option>
                                        <option value="super admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="student">Student</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a user type.</div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary" id="addNewUser">Add User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add User Modal -->

        <!-- Edit User Modal -->
        <div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="updateUserModalLabel">Edit User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="updateUser-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="update-user-form" action="{{ route('administration.users.update') }}" method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="update-userid-input">
                            <div class="text-center mb-3">
                                <div class="position-relative d-inline-block">
                                    <!-- File Input Trigger -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <label for="update-user-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select user Image">
                                            <div class="avatar-xs">
                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                    <i class="ri-image-fill"></i>
                                                </div>
                                            </div>
                                        </label>
                                        <input class="form-control d-none" name="image" id="update-user-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                    </div>
                                    <!-- Image Preview -->
                                    <div class="avatar-lg">
                                        <div class="avatar-title bg-light rounded-circle">
                                            <img src="{{ asset('backend/images/users/user-dummy-img.jpg') }}" id="update-user-img" class="avatar-md rounded-circle" alt="User Image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3">
                                <div>
                                    <label for="update-name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" id="update-name" placeholder="Enter your name" required />
                                    <div class="invalid-feedback">Please enter a name.</div>
                                </div>
                                <div>
                                    <label for="update-email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="update-email" placeholder="Enter your email" required />
                                    <div class="invalid-feedback">Please enter an email.</div>
                                </div>
                                <div>
                                    <label for="update-phoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" name="phone" id="update-phoneNumber" placeholder="Enter your number" required />
                                    <div class="invalid-feedback">Please enter phone number.</div>
                                </div>
                                <div>
                                    <label for="update-user_type" class="form-label">User Type</label>
                                    <select class="form-select" name="user_type" id="update-user_type" required>
                                        <option value="">Select User Type</option>
                                        <option value="super admin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                        <option value="student">Student</option>
                                    </select>
                                    <div class="invalid-feedback">Please select a user type.</div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary" id="updateUserBtn">Update User</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit User Modal -->

        <!-- Delete User Modal -->
        <div class="modal fade" id="removeUserModal" tabindex="-1" aria-labelledby="removeUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeUserModalLabel">Remove User</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeUser-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="remove-user-form" action="{{ route('administration.users.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-user-id">
                            <p>Are you sure you want to delete this user?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeUserBtn">Delete User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete User Modal -->

        <!-- Page Heading and Users Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Users</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchResultList" placeholder="Search for name or number..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <!-- Button to trigger Add User Modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">User Type</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody id="users-table-body">
                                @foreach($users as $user)
                                    @include('administration.partials.user-row', ['user' => $user])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Users Table -->

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
    /*** Add User ***/
    $("#user-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending add user AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "User added successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#users-table-body").append(response.newRow);
                    $("#user-form")[0].reset();
                    $("#addUserModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="">Why do I have this issue?</a>',
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
                        footer: '<a href="">Why do I have this issue?</a>',
                        showCloseButton: true,
                    });
                }
            }
        });
    });

    /*** Edit User ***/
    $(document).on("click", ".edit-user", function(){
        var id = $(this).data("id");
        var name = $(this).data("name");
        var email = $(this).data("email");
        var phone = $(this).data("phone");
        var user_type = $(this).data("user_type");
        var image = $(this).data("image");

        $("#update-userid-input").val(id);
        $("#update-name").val(name);
        $("#update-email").val(email);
        $("#update-phoneNumber").val(phone);
        $("#update-user_type").val(user_type);
        $("#update-user-img").attr("src", image);

        var updateModal = new bootstrap.Modal(document.getElementById('updateUserModal'));
        updateModal.show();
    });

    $("#update-user-form").on("submit", function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(){
                console.log("Sending update user AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Good job!",
                        text: "User updated successfully!",
                        icon: "success",
                        showCancelButton: true,
                        customClass: { 
                            confirmButton: "btn btn-primary w-xs me-2 mt-2", 
                            cancelButton: "btn btn-danger w-xs mt-2" 
                        },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#users-table-body").find("tr[data-user-id='"+response.userId+"']").replaceWith(response.updatedRow);
                    $("#update-user-form")[0].reset();
                    $("#updateUserModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="">Why do I have this issue?</a>',
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
                        footer: '<a href="">Why do I have this issue?</a>',
                        showCloseButton: true,
                    });
                }
            }
        });
    });

    /*** Delete User ***/
    $(document).on("click", ".remove-user", function(){
        var id = $(this).data("id");
        $("#remove-user-id").val(id);
        var removeModal = new bootstrap.Modal(document.getElementById('removeUserModal'));
        removeModal.show();
    });

    $("#remove-user-form").on("submit", function(e){
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            beforeSend: function(){
                console.log("Sending delete user AJAX request.");
            },
            success: function(response){
                if(response.status === "success"){
                    Swal.fire({
                        title: "Deleted!",
                        text: "User deleted successfully!",
                        icon: "success",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        showCloseButton: true,
                    });
                    $("#users-table-body").find("tr[data-user-id='"+response.userId+"']").remove();
                    $("#remove-user-form")[0].reset();
                    $("#removeUserModal").modal('hide');
                } else {
                    Swal.fire({
                        title: "Oops...",
                        text: "Something went wrong!",
                        icon: "error",
                        customClass: { confirmButton: "btn btn-primary w-xs mt-2" },
                        buttonsStyling: false,
                        footer: '<a href="">Why do I have this issue?</a>',
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
                    footer: '<a href="">Why do I have this issue?</a>',
                    showCloseButton: true,
                });
            }
        });
    });

    /*** Image Preview for Add and Update Modals ***/
    $("#user-image-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#user-img");
        var defaultImage = "{{ asset('backend/images/users/user-dummy-img.jpg') }}";
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

    $("#update-user-image-input").on("change", function(){
        var file = this.files[0];
        var $previewImg = $("#update-user-img");
        var defaultImage = "{{ asset('backend/images/users/user-dummy-img.jpg') }}";
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
