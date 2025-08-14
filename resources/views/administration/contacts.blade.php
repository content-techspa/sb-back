@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Heading and Contacts Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Contact</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchResultList" placeholder="Search for contact..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            {{-- <div class="col-lg-4 text-end">
                                <!-- Button to trigger Add Gallery Category Modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Category</button>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacts Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="contacts-table-body">
                                @foreach($contacts as $contact)
                                    @include('administration.partials.contact-row', ['contact' => $contact])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Delete Contact Modal -->
        <div class="modal fade" id="removeContactModal" tabindex="-1" aria-labelledby="removeContactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeContactModalLabel">Delete Contact</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeContact-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <!-- Note: The form ID and hidden input use consistent naming -->
                        <form id="remove-contact-form" action="{{ route('administration.contacts.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-contact-id">
                            <p>Are you sure you want to delete this contact?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeContactBtn">Delete Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Contact Modal -->
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
<script>
    $(document).ready(function(){
        console.log("Contacts view loaded.");
    
        // When a delete button is clicked, open the modal and set the contact ID.
        $(document).on("click", ".remove-contact", function(){
            var contactId = $(this).data("id");
            console.log("Clicked delete for contact ID:", contactId);
            $("#remove-contact-id").val(contactId);
            var modalEl = document.getElementById("removeContactModal");
            if(modalEl){
                console.log("Modal element found. Initializing modal.");
                var myModal = new bootstrap.Modal(modalEl);
                myModal.show();
                console.log("Modal shown for contact ID:", contactId);
            } else {
                console.error("Modal element 'removeContactModal' not found.");
            }
        });
    
        // Submit delete form via AJAX.
        // Submit delete form via AJAX.
        $("#remove-contact-form").on("submit", function(e){
    e.preventDefault();
    var actionUrl = $(this).attr("action");
    console.log("Submitting delete form. Action URL:", actionUrl);
    var formData = $(this).serialize();
    console.log("Form data:", formData);
    $.ajax({
        url: actionUrl,
        type: "POST",
        data: formData,
        success: function(response){
            console.log("Response from delete request:", response);
            if(response.status === "success"){
                console.log("Attempting to fire Swal...");
                Swal.fire("Deleted!", response.message, "success")
                    .then(() => {
                        console.log("Swal closed.");
                    });
                // Remove the deleted row from the table.
                $("#contacts-table-body").find("tr[data-contact-id='" + response.contactId + "']").remove();
                $("#remove-contact-form")[0].reset();
                var modalInstance = bootstrap.Modal.getInstance(document.getElementById("removeContactModal"));
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
            console.error("Error deleting contact:", xhr);
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


    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('scripts')

@endsection
