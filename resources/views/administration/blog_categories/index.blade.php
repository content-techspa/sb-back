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
                                <h4 class="mb-0">Blog Category Management</h4>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4 text-end">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#addCategoryModal">Add Category</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Create Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="category-form" action="{{ route('administration.blog_categories.store') }}"
                              method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="category-name" class="form-label">Category Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="category-name"
                                       placeholder="Enter category name" required>
                                <div class="invalid-feedback">Please enter a category name.</div>
                            </div>

                            <!-- Parent Category (optional) -->
                            <div class="mb-3">
                                <label for="category-parent" class="form-label">Parent Category</label>
                                <select name="parent" id="category-parent" class="form-select">
                                    <option value="0" selected>No Parent (Top Level)</option>
                                    @foreach(App\Models\BlogCategory::where('parent', 0)->get() as $parentCat)
                                        <option value="{{ $parentCat->id }}">{{ $parentCat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="category-description" class="form-label">Description</label>
                                <textarea name="description" id="category-description" class="form-control"
                                          rows="3" placeholder="Enter category description"></textarea>
                            </div>

                            <!-- Visible Status -->
                            <div class="mb-3">
                                <label for="visible-status" class="form-label">Visible Status<span class="text-danger">*</span></label>
                                <select name="visible_status" id="visible-status" class="form-select" required>
                                    <option value="1" selected>Enable</option>
                                    <option value="2">Disable</option>
                                </select>
                                <div class="invalid-feedback">Please choose visibility.</div>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="category-image" class="form-label">Image</label>
                                <input type="file" name="image" id="category-image"
                                       class="form-control" accept="image/png, image/jpeg">
                            </div>

                            <!-- (Removed Link input; it's auto-generated) -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addCategoryBtn">Create Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Category Modal -->

        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Edit Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="edit-category-form" action="#" method="POST"
                              enctype="multipart/form-data" autocomplete="off" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="edit-category-id">

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="edit-category-name" class="form-label">Category Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="edit-category-name" required>
                                <div class="invalid-feedback">Please enter a category name.</div>
                            </div>

                            <!-- Parent Category -->
                            <div class="mb-3">
                                <label for="edit-category-parent" class="form-label">Parent Category</label>
                                <select name="parent" id="edit-category-parent" class="form-select">
                                    <option value="0">No Parent (Top Level)</option>
                                    @foreach(App\Models\BlogCategory::where('parent', 0)->get() as $parentCat)
                                        <option value="{{ $parentCat->id }}">{{ $parentCat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="edit-category-description" class="form-label">Description</label>
                                <textarea name="description" id="edit-category-description" class="form-control"
                                          rows="3"></textarea>
                            </div>

                            <!-- Visible Status -->
                            <div class="mb-3">
                                <label for="edit-visible-status" class="form-label">Visible Status<span class="text-danger">*</span></label>
                                <select name="visible_status" id="edit-visible-status" class="form-select" required>
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                </select>
                                <div class="invalid-feedback">Please choose visibility.</div>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">
                                <label for="edit-category-image" class="form-label">Image</label>
                                <input type="file" name="image" id="edit-category-image"
                                       class="form-control" accept="image/png, image/jpeg">
                                <div class="mt-2">
                                    <img id="current-category-image" src="" alt="Current Category Image"
                                         style="max-width:150px;">
                                </div>
                            </div>

                            <!-- (Removed Link input; it's auto-generated) -->

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateCategoryBtn">Update Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Category Modal -->

        <!-- Delete Category Modal -->
        <div class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Delete Category</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="delete-category-form" action="{{ route('administration.blog_categories.destroy') }}"
                              method="POST" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="delete-category-id">
                            <p>Are you sure you want to delete this category?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="deleteCategoryBtn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Category Modal -->

        <!-- Category Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Parent</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="category-table-body">
                                @foreach ($categories as $cat)
                                    <tr data-category-id="{{ $cat->id }}">
                                        <th scope="row">{{ $cat->id }}</th>
                                        <td>{{ $cat->name }}</td>
                                        <td>
                                            @if($cat->parent && $cat->parentCategory)
                                                {{ $cat->parentCategory->name }}
                                            @else
                                                —
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($cat->description, 50) }}</td>
                                        <td>{{ $cat->visible_status == 1 ? 'Enable' : 'Disable' }}</td>
                                        <td>
                                            @if($cat->image)
                                                <img src="{{ asset('storage/' . $cat->image) }}"
                                                     style="width: 60px;" alt="Category Image">
                                            @else
                                                —
                                            @endif
                                        </td>
                                        <td>{{ $cat->link ?? '—' }}</td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary edit-category"
                                                   data-id="{{ $cat->id }}"
                                                   data-name="{{ $cat->name }}"
                                                   data-parent="{{ $cat->parent }}"
                                                   data-description="{{ $cat->description }}"
                                                   data-visible_status="{{ $cat->visible_status }}"
                                                   data-image="{{ $cat->image ? asset('storage/' . $cat->image) : '' }}">
                                                    <i class="ri-settings-4-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="link-danger delete-category"
                                                   data-id="{{ $cat->id }}">
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
        <!-- End Category Table -->
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // --- Create Category AJAX ---
    $("#category-form").on("submit", function(e) {
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

                    let cat = response.data;
                    let parentName = cat.parent > 0
                        ? $("select#category-parent option[value='" + cat.parent + "']").text()
                        : '—';
                    let imgHtml = cat.image ? `<img src="/storage/${cat.image}" style="width:60px;"/>` : '—';
                    let linkText = cat.link ? cat.link : '—';

                    let row = `
                    <tr data-category-id="${cat.id}">
                        <th scope="row">${cat.id}</th>
                        <td>${cat.name}</td>
                        <td>${parentName}</td>
                        <td>${cat.description ? cat.description.substring(0,50) : ''}</td>
                        <td>${cat.visible_status == 1 ? 'Enable' : 'Disable'}</td>
                        <td>${imgHtml}</td>
                        <td>${linkText}</td>
                        <td>
                          <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary edit-category"
                               data-id="${cat.id}"
                               data-name="${cat.name}"
                               data-parent="${cat.parent}"
                               data-description="${cat.description || ''}"
                               data-visible_status="${cat.visible_status}"
                               data-image="${cat.image ? '/storage/' + cat.image : ''}">
                              <i class="ri-settings-4-line"></i>
                            </a>
                            <a href="javascript:void(0);" class="link-danger delete-category" data-id="${cat.id}">
                              <i class="ri-delete-bin-5-line"></i>
                            </a>
                          </div>
                        </td>
                    </tr>`;
                    $("#category-table-body").prepend(row);
                    $("#category-form")[0].reset();
                    $("#addCategoryModal").modal("hide");
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
                        text: "An error occurred while creating category.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

    // --- Open Edit Category Modal ---
    $(document).on("click", ".edit-category", function() {
        let id            = $(this).data("id");
        let name          = $(this).data("name");
        let parent        = $(this).data("parent");
        let description   = $(this).data("description");
        let visibleStatus = $(this).data("visible_status");
        let imageUrl      = $(this).data("image");
        // (no link here)

        $("#edit-category-id").val(id);
        $("#edit-category-name").val(name);
        $("#edit-category-parent").val(parent);
        $("#edit-category-description").val(description);
        $("#edit-visible-status").val(visibleStatus);
        $("#current-category-image").attr("src", imageUrl);
        // (no edit-category-link)

        let updateUrl = "{{ route('administration.blog_categories.update', ['category' => ':id']) }}";
        updateUrl = updateUrl.replace(':id', id);
        $("#edit-category-form").attr("action", updateUrl);

        let modal = new bootstrap.Modal(document.getElementById('editCategoryModal'));
        modal.show();
    });

    // --- Update Category AJAX ---
    $("#edit-category-form").on("submit", function(e) {
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

                    let cat = response.data;
                    let row = $(`#category-table-body`).find(`tr[data-category-id='${cat.id}']`);

                    let parentName = cat.parent > 0
                        ? $("select#category-parent option[value='" + cat.parent + "']").text()
                        : '—';
                    let imgHtml = cat.image ? `<img src="/storage/${cat.image}" style="width:60px;"/>` : '—';
                    let linkText = cat.link ? cat.link : '—';

                    row.find("td:nth-child(2)").text(cat.name);
                    row.find("td:nth-child(3)").text(parentName);
                    row.find("td:nth-child(4)").text(cat.description ? cat.description.substring(0,50) : '');
                    row.find("td:nth-child(5)").text(cat.visible_status == 1 ? 'Enable' : 'Disable');
                    row.find("td:nth-child(6)").html(imgHtml);
                    row.find("td:nth-child(7)").text(linkText);

                    $("#edit-category-form")[0].reset();
                    $("#editCategoryModal").modal("hide");
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
                    text: "An error occurred while updating category.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    // --- Open Delete Category Modal ---
    $(document).on("click", ".delete-category", function() {
        let id = $(this).data("id");
        $("#delete-category-id").val(id);
        let modal = new bootstrap.Modal(document.getElementById('deleteCategoryModal'));
        modal.show();
    });

    // --- Delete Category AJAX ---
    $("#delete-category-form").on("submit", function(e) {
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
                    $(`#category-table-body`).find(`tr[data-category-id='${$("#delete-category-id").val()}']`).remove();
                    $("#delete-category-form")[0].reset();
                    $("#deleteCategoryModal").modal("hide");
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
                    text: "An error occurred while deleting category.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>
@endsection
