@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Heading & Action -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Blog Tag Management</h4>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 text-end">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#addTagModal">Add Tag</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Tag Modal -->
        <div class="modal fade" id="addTagModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Create Tag</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="tag-form" action="{{ route('administration.blog_tags.store') }}"
                              method="POST" autocomplete="off" novalidate>
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="tag-name" class="form-label">Tag Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="tag-name"
                                       placeholder="Enter tag name" required>
                                <div class="invalid-feedback">Please enter a tag name.</div>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="tag-description" class="form-label">Description</label>
                                <input type="text" name="description" id="tag-description"
                                       class="form-control" placeholder="Enter short description (max 191 chars)">
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="tag-status" class="form-label">Status<span class="text-danger">*</span></label>
                                <select name="status" id="tag-status" class="form-select" required>
                                    <option value="1" selected>Enable</option>
                                    <option value="2">Disable</option>
                                </select>
                                <div class="invalid-feedback">Please select status.</div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addTagBtn">Create Tag</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Tag Modal -->

        <!-- Edit Tag Modal -->
        <div class="modal fade" id="editTagModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Edit Tag</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="edit-tag-form" action="#" method="POST" autocomplete="off" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="edit-tag-id">

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="edit-tag-name" class="form-label">Tag Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="edit-tag-name" required>
                                <div class="invalid-feedback">Please enter a tag name.</div>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="edit-tag-description" class="form-label">Description</label>
                                <input type="text" name="description" id="edit-tag-description"
                                       class="form-control" placeholder="">
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="edit-tag-status" class="form-label">Status<span class="text-danger">*</span></label>
                                <select name="status" id="edit-tag-status" class="form-select" required>
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                </select>
                                <div class="invalid-feedback">Please select status.</div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateTagBtn">Update Tag</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Tag Modal -->

        <!-- Delete Tag Modal -->
        <div class="modal fade" id="deleteTagModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Delete Tag</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="delete-tag-form" action="{{ route('administration.blog_tags.destroy') }}"
                              method="POST" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="delete-tag-id">
                            <p>Are you sure you want to delete this tag?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="deleteTagBtn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Tag Modal -->

        <!-- Tag Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tag-table-body">
                                @foreach ($tags as $tag)
                                    <tr data-tag-id="{{ $tag->id }}">
                                        <th scope="row">{{ $tag->id }}</th>
                                        <td>{{ $tag->name }}</td>
                                        <td>{{ $tag->slug }}</td>
                                        <td>{{ Str::limit($tag->description, 50) }}</td>
                                        <td>{{ $tag->status == 1 ? 'Enable' : 'Disable' }}</td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary edit-tag"
                                                   data-id="{{ $tag->id }}"
                                                   data-name="{{ $tag->name }}"
                                                   data-description="{{ $tag->description }}"
                                                   data-status="{{ $tag->status }}">
                                                    <i class="ri-settings-4-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="link-danger delete-tag"
                                                   data-id="{{ $tag->id }}">
                                                    <i class="ri-delete-bin-5-line"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tag Table -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // --- Create Tag AJAX ---
    $("#tag-form").on("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });

                    let tag = response.data;
                    let row = `
                    <tr data-tag-id="${tag.id}">
                        <th scope="row">${tag.id}</th>
                        <td>${tag.name}</td>
                        <td>${tag.slug}</td>
                        <td>${tag.description ? tag.description.substring(0,50) : ''}</td>
                        <td>${tag.status == 1 ? 'Enable' : 'Disable'}</td>
                        <td>
                          <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary edit-tag"
                               data-id="${tag.id}"
                               data-name="${tag.name}"
                               data-description="${tag.description || ''}"
                               data-status="${tag.status}">
                              <i class="ri-settings-4-line"></i>
                            </a>
                            <a href="javascript:void(0);" class="link-danger delete-tag" data-id="${tag.id}">
                              <i class="ri-delete-bin-5-line"></i>
                            </a>
                          </div>
                        </td>
                    </tr>`;
                    $("#tag-table-body").prepend(row);
                    $("#tag-form")[0].reset();
                    $("#addTagModal").modal("hide");
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
                        text: "An error occurred while creating tag.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

    // --- Open Edit Tag Modal ---
    $(document).on("click", ".edit-tag", function() {
        let id          = $(this).data("id");
        let name        = $(this).data("name");
        let description = $(this).data("description");
        let status      = $(this).data("status");

        $("#edit-tag-id").val(id);
        $("#edit-tag-name").val(name);
        $("#edit-tag-description").val(description);
        $("#edit-tag-status").val(status);

        let updateUrl = "{{ route('administration.blog_tags.update', ['tag' => ':id']) }}";
        updateUrl = updateUrl.replace(':id', id);
        $("#edit-tag-form").attr("action", updateUrl);

        let modal = new bootstrap.Modal(document.getElementById('editTagModal'));
        modal.show();
    });

    // --- Update Tag AJAX ---
    $("#edit-tag-form").on("submit", function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Updated!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });

                    let tag = response.data;
                    let row = $(`#tag-table-body`).find(`tr[data-tag-id='${tag.id}']`);
                    row.find("td:nth-child(1)").text(tag.name);
                    row.find("td:nth-child(2)").text(tag.slug);
                    row.find("td:nth-child(3)").text(tag.description ? tag.description.substring(0,50) : '');
                    row.find("td:nth-child(4)").text(tag.status == 1 ? 'Enable' : 'Disable');

                    $("#edit-tag-form")[0].reset();
                    $("#editTagModal").modal("hide");
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
                    text: "An error occurred while updating tag.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    // --- Open Delete Tag Modal ---
    $(document).on("click", ".delete-tag", function() {
        let id = $(this).data("id");
        $("#delete-tag-id").val(id);
        let modal = new bootstrap.Modal(document.getElementById('deleteTagModal'));
        modal.show();
    });

    // --- Delete Tag AJAX ---
    $("#delete-tag-form").on("submit", function(e) {
        e.preventDefault();
        let formData = $(this).serialize();

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Deleted!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    $(`#tag-table-body`).find(`tr[data-tag-id='${$("#delete-tag-id").val()}']`).remove();
                    $("#delete-tag-form")[0].reset();
                    $("#deleteTagModal").modal("hide");
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
                    text: "An error occurred while deleting tag.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>
@endsection
