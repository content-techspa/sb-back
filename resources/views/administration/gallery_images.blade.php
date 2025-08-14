@extends('administration.template.template')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page Heading and Action Buttons -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                        <div class="card-body pb-0 px-4">
                            <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                                <div class="col-lg-4">
                                    <h4 class="mb-0">Gallery Images for Category: <strong>{{ $category->name }}</strong></h4>
                                </div>
                                <div class="col-lg-4">
                                    <div class="search-box">
                                        <input type="text" class="form-control border-0" id="searchResultList"
                                            placeholder="Search for image id..." autocomplete="off">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <div class="col-lg-4 text-end">
                                    <!-- Upload Images Button -->
                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#uploadImagesModal">Upload Images</button>
                                    <!-- Bulk Delete Button -->
                                    <button type="button" id="bulk-delete-btn" class="btn btn-danger">Delete Selected</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Upload Images Modal -->
            <div class="modal fade" id="uploadImagesModal" tabindex="-1" aria-labelledby="uploadImagesModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadImagesModalLabel">Upload Images</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="upload-images-form"
                                action="{{ route('administration.galleryimage.upload', $category->id) }}" method="POST"
                                enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="images" class="form-label">Select Images</label>
                                    <input type="file" name="images[]" id="images" class="form-control" multiple
                                        accept="image/*" required>
                                </div>
                                <!-- Preview container for selected images -->
                                <div class="mb-3" id="preview-container"></div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Upload Images Modal -->

            <!-- Edit Image Modal -->
            <div class="modal fade" id="editImageModal" tabindex="-1" aria-labelledby="editImageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editImageModalLabel">Edit Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="edit-image-form" action="{{ route('administration.galleryimage.update') }}"
                                method="POST" novalidate>
                                @csrf
                                <input type="hidden" name="id" id="edit-image-id">
                                <div class="mb-3">
                                    <label for="edit-image-title" class="form-label">Title</label>
                                    <input type="text" name="title" id="edit-image-title" class="form-control"
                                        placeholder="Enter title">
                                </div>
                                <div class="mb-3">
                                    <img id="edit-image-preview" src="" alt="Image Preview" class="img-thumbnail"
                                        style="max-width: 200px;">
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-secondary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Edit Image Modal -->

            <!-- Delete Image Modal -->
            <div class="modal fade" id="deleteImageModal" tabindex="-1" aria-labelledby="deleteImageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteImageModalLabel">Delete Image</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="delete-image-form" action="{{ route('administration.galleryimage.delete') }}"
                                method="POST">
                                @csrf
                                <input type="hidden" name="id" id="delete-image-id">
                                <p>Are you sure you want to delete this image?</p>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Delete Image Modal -->

            <!-- Images Table -->
            <div class="row mt-n5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">
                                                <div class="form-check">
                                                    <input class="form-check-input select-all" type="checkbox" value=""
                                                        id="responsivetableCheck">
                                                    <label class="form-check-label" for="responsivetableCheck"></label>
                                                </div>
                                            </th>
                                            <th scope="col">#</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="images-table-body">
                                        @foreach ($images as $image)
                                            @include('administration.partials.gallery-image-row', [
                                                'image' => $image,
                                            ])
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                            <!-- end table responsive -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Images Table -->
        </div>
    </div>

    <!-- Include SweetAlert2 and jQuery (if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {
            // Handle "select all" checkbox
            $('.select-all').on('change', function() {
                $('.image-checkbox').prop('checked', $(this).prop('checked'));
            });
            // If any individual checkbox is unchecked, uncheck the select-all checkbox
            $(document).on('change', '.image-checkbox', function() {
                if (!$(this).prop('checked')) {
                    $('.select-all').prop('checked', false);
                }
            });

            // Preview selected images for upload
            $("#images").on("change", function() {
                $("#preview-container").html(''); // Clear any previous previews
                var files = this.files;
                if (files) {
                    $.each(files, function(index, file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $("#preview-container").append('<img src="' + e.target.result +
                                '" class="img-thumbnail m-1" style="max-width:100px;">');
                        }
                        reader.readAsDataURL(file);
                    });
                }
            });

            // AJAX for uploading images
            $("#upload-images-form").on("submit", function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        console.log("Uploading images...");
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Uploaded!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            });
                            // Append new rows for each uploaded image
                            $.each(response.images, function(index, image) {
                                var row = '<tr data-image-id="' + image.id + '">' +
                                    '<th scope="row">' +
                                    '<div class="form-check">' +
                                    '<input class="form-check-input image-checkbox" type="checkbox" value="' + image.id + '" id="imageCheck' + image.id + '">' +
                                    '<label class="form-check-label" for="imageCheck' + image.id + '"></label>' +
                                    '</div>' +
                                    '</th>' +
                                    '<td>' + image.id + '</td>' +
                                    '<td><img src="/storage/' + image.image_path + '" alt="Image" style="max-width:100px;"></td>' +
                                    '<td>' + new Date(image.created_at).toLocaleDateString() + '</td>' +
                                    '<td>' +
                                    '<a href="javascript:void(0);" class="btn btn-sm btn-primary edit-image" data-id="' +
                                    image.id + '" data-title="' + (image.title ? image.title : '') + '" data-image="/storage/' + image.image_path + '">Edit</a> ' +
                                    '<a href="javascript:void(0);" class="btn btn-sm btn-danger delete-image" data-id="' +
                                    image.id + '">Delete</a>' +
                                    '</td>' +
                                    '</tr>';
                                $("#images-table-body").append(row);
                            });
                            $("#upload-images-form")[0].reset();
                            $("#preview-container").html('');
                            $("#uploadImagesModal").modal('hide');
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            Swal.fire({
                                title: "Validation Error",
                                text: xhr.responseJSON.message,
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: "An error occurred while uploading images.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    }
                });
            });

            // Click event to open Edit Image modal
            $(document).on("click", ".edit-image", function() {
                var id = $(this).data("id");
                var title = $(this).data("title");
                var imageSrc = $(this).data("image");

                $("#edit-image-id").val(id);
                $("#edit-image-title").val(title);
                $("#edit-image-preview").attr("src", imageSrc);

                var editModal = new bootstrap.Modal(document.getElementById('editImageModal'));
                editModal.show();
            });

            // AJAX for updating image title
            $("#edit-image-form").on("submit", function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        console.log("Updating image...");
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Updated!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            });
                            // Update the title in the corresponding row
                            var row = $("#images-table-body").find("tr[data-image-id='" + response.data.id + "']");
                            // Assuming the title is displayed in the third cell (adjust index if necessary)
                            row.find("td:eq(1)").text(response.data.title);
                            $("#edit-image-form")[0].reset();
                            $("#editImageModal").modal('hide');
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Error!",
                            text: "An error occurred while updating the image.",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                });
            });

            // Click event to open Delete Image modal
            $(document).on("click", ".delete-image", function() {
                var id = $(this).data("id");
                $("#delete-image-id").val(id);
                var deleteModal = new bootstrap.Modal(document.getElementById('deleteImageModal'));
                deleteModal.show();
            });

            // AJAX for deleting a single image
            $("#delete-image-form").on("submit", function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: $(this).attr("action"),
                    type: "POST",
                    data: formData,
                    beforeSend: function() {
                        console.log("Deleting image...");
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: "Deleted!",
                                text: response.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            });
                            $("#images-table-body").find("tr[data-image-id='" + $("#delete-image-id").val() + "']").remove();
                            $("#delete-image-form")[0].reset();
                            $("#deleteImageModal").modal('hide');
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.message,
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: "Error!",
                            text: "An error occurred while deleting the image.",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    }
                });
            });

            // Bulk Delete functionality
            $("#bulk-delete-btn").on("click", function() {
                var selectedIds = [];
                $(".image-checkbox:checked").each(function() {
                    selectedIds.push($(this).val());
                });
                if (selectedIds.length === 0) {
                    Swal.fire({
                        title: 'No images selected',
                        text: 'Please select at least one image to delete.',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    });
                    return;
                }
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover these images!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete them!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('administration.galleryimage.bulk-delete') }}",
                            type: "POST",
                            data: { 
                                ids: selectedIds,
                                _token: "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire('Deleted!', response.message, 'success');
                                    // Remove rows with the selected ids
                                    $.each(selectedIds, function(index, id) {
                                        $("tr[data-image-id='" + id + "']").remove();
                                    });
                                } else {
                                    Swal.fire('Error!', response.message, 'error');
                                }
                            },
                            error: function(xhr) {
                                Swal.fire('Error!', 'An error occurred while deleting images.', 'error');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
