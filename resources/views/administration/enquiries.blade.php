@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Heading and Enquiries Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Enquiries</h4>
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

        <!-- Enquiries Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Interested Program</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="enquiries-table-body">
                                @foreach($enquiries as $enquiry)
                                    @include('administration.partials.enquiry-row', ['enquiry' => $enquiry])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Delete Enquiry Modal -->
        <div class="modal fade" id="removeEnquiryModal" tabindex="-1" aria-labelledby="removeEnquiryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="removeEnquiryModalLabel">Delete Enquiry</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="removeEnquiry-btnClose" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="remove-enquiry-form" action="{{ route('administration.enquiries.destroy') }}" method="POST" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="remove-enquiry-id">
                            <p>Are you sure you want to delete this enquiry?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="removeEnquiryBtn">Delete Enquiry</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Enquiry Modal -->
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
    console.log("Enquiries view loaded.");

    // When a delete button is clicked, open the modal and set the enquiry ID.
    $(document).on("click", ".remove-enquiry", function(){
        var enquiryId = $(this).data("id");
        console.log("Clicked delete for enquiry ID:", enquiryId);
        $("#remove-enquiry-id").val(enquiryId);
        var modalEl = document.getElementById("removeEnquiryModal");
        if(modalEl){
            console.log("Modal element found. Initializing modal.");
            var myModal = new bootstrap.Modal(modalEl);
            myModal.show();
            console.log("Modal shown for enquiry ID:", enquiryId);
        } else {
            console.error("Modal element 'removeEnquiryModal' not found.");
        }
    });

    // Submit delete enquiry form via AJAX.
    $("#remove-enquiry-form").on("submit", function(e){
        e.preventDefault();
        var actionUrl = $(this).attr("action");
        console.log("Submitting delete enquiry form. Action URL:", actionUrl);
        var formData = $(this).serialize();
        console.log("Form data:", formData);
        $.ajax({
            url: actionUrl,
            type: "POST",
            data: formData,
            success: function(response){
                console.log("Response from delete enquiry request:", response);
                if(response.status === "success"){
                    Swal.fire("Deleted!", response.message, "success")
                        .then(() => {
                            console.log("Swal closed.");
                        });
                    // Remove the deleted row from the table.
                    $("#enquiries-table-body").find("tr[data-enquiry-id='" + response.enquiryId + "']").remove();
                    $("#remove-enquiry-form")[0].reset();
                    var modalInstance = bootstrap.Modal.getInstance(document.getElementById("removeEnquiryModal"));
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
                console.error("Error deleting enquiry:", xhr);
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

@endsection

@section('scripts')

@endsection
