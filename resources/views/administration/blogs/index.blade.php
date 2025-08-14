@extends('administration.template.template')

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Page Heading & Actions -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
                    <div class="card-body pb-0 px-4">
                        <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
                            <div class="col-lg-4">
                                <h4 class="mb-0">Blog Management</h4>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control border-0" id="searchBlog"
                                       placeholder="Search for blogs..." autocomplete="off">
                            </div>
                            <div class="col-lg-4 text-end">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                        data-bs-target="#addBlogModal">Add Blog</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Blog Modal -->
        <div class="modal fade" id="addBlogModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Create Blog Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="blog-form" action="{{ route('administration.blogs.store') }}"
                              method="POST" enctype="multipart/form-data" autocomplete="off" novalidate>
                            @csrf

                            <!-- Title -->
                            <div class="mb-3">
                                <label for="blog-title" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="blog-title"
                                       placeholder="Enter blog title" required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>

                            <!-- Small Description -->
                            <div class="mb-3">
                                <label for="small-description" class="form-label">Small Description</label>
                                <textarea name="small_description" id="small-description"
                                          class="form-control" placeholder="Brief summary (max 1000 chars)" rows="2"></textarea>
                            </div>

                            <!-- Full Description (CKEditor) -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description"
                                          class="form-control ckeditor-classic"
                                          placeholder="Enter full blog content" rows="6"></textarea>
                            </div>

                            <!-- Category Select -->
                            <div class="mb-3">
                                <label for="category-id" class="form-label">Category<span class="text-danger">*</span></label>
                                <select name="category_id" id="category-id" class="form-select" required>
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please choose a category.</div>
                            </div>

                            <!-- Tags Multi-select -->
                            <div class="mb-3">
                                <label for="tag-ids" class="form-label">Tags</label>
                                <select name="tag_ids[]" id="tag-ids" class="form-select" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Featured Image Upload -->
                            <div class="mb-3">
                                <label for="featured-image" class="form-label">Featured Image<span class="text-danger">*</span></label>
                                <input type="file" name="featured_image" id="featured-image"
                                       class="form-control" accept="image/png, image/jpeg" required>
                                <div class="invalid-feedback">Please upload a featured image.</div>
                            </div>

                            <!-- SEO Meta Fields -->
                            <div class="mb-3">
                                <label for="page-title" class="form-label">Page Title</label>
                                <input type="text" name="page_title" id="page-title"
                                       class="form-control" placeholder="Enter SEO page title">
                            </div>
                            <div class="mb-3">
                                <label for="page-keyword" class="form-label">Page Keyword</label>
                                <textarea name="page_keyword" id="page-keyword"
                                          class="form-control" rows="2"
                                          placeholder="Enter SEO keywords separated by commas"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="page-description" class="form-label">Page Description</label>
                                <textarea name="page_description" id="page-description"
                                          class="form-control" rows="2"
                                          placeholder="Enter SEO page description"></textarea>
                            </div>

                            <!-- Allow Comments & Visibility -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Allow Comments</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="allow_comments"
                                               id="allow-comments" checked>
                                        <label class="form-check-label" for="allow-comments">Yes</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="visibility" class="form-label">Visibility<span class="text-danger">*</span></label>
                                    <select name="visibility" id="visibility" class="form-select" required>
                                        <option value="1" selected>Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                    <div class="invalid-feedback">Please select visibility.</div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addBlogBtn">Publish Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add Blog Modal -->

        <!-- Edit Blog Modal -->
        <div class="modal fade" id="editBlogModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Edit Blog Post</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="edit-blog-form" action="#" method="POST"
                              enctype="multipart/form-data" autocomplete="off" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="edit-blog-id">

                            <!-- Title -->
                            <div class="mb-3">
                                <label for="edit-blog-title" class="form-label">Title<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" id="edit-blog-title"
                                       required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>

                            <!-- Small Description -->
                            <div class="mb-3">
                                <label for="edit-small-description" class="form-label">Small Description</label>
                                <textarea name="small_description" id="edit-small-description"
                                          class="form-control" rows="2"></textarea>
                            </div>

                            <!-- Full Description (CKEditor) -->
                            <div class="mb-3">
                                <label for="edit-description" class="form-label">Description</label>
                                <textarea name="description" id="edit-description"
                                          class="form-control ckeditor-classic"
                                          rows="6"></textarea>
                            </div>

                            <!-- Category Select -->
                            <div class="mb-3">
                                <label for="edit-category-id" class="form-label">Category<span class="text-danger">*</span></label>
                                <select name="category_id" id="edit-category-id" class="form-select" required>
                                    <option value="" disabled>Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">Please choose a category.</div>
                            </div>

                            <!-- Tags Multi-select -->
                            <div class="mb-3">
                                <label for="edit-tag-ids" class="form-label">Tags</label>
                                <select name="tag_ids[]" id="edit-tag-ids" class="form-select" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Featured Image Upload -->
                            <div class="mb-3">
                                <label for="edit-featured-image" class="form-label">Featured Image</label>
                                <input type="file" name="featured_image" id="edit-featured-image"
                                       class="form-control" accept="image/png, image/jpeg">
                                <div class="mt-2">
                                    <img id="current-featured-image" src="" alt="Current Image"
                                         style="max-width:150px;">
                                </div>
                            </div>

                            <!-- SEO Meta Fields -->
                            <div class="mb-3">
                                <label for="edit-page-title" class="form-label">Page Title</label>
                                <input type="text" name="page_title" id="edit-page-title"
                                       class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="edit-page-keyword" class="form-label">Page Keyword</label>
                                <textarea name="page_keyword" id="edit-page-keyword"
                                          class="form-control" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit-page-description" class="form-label">Page Description</label>
                                <textarea name="page_description" id="edit-page-description"
                                          class="form-control" rows="2"></textarea>
                            </div>

                            <!-- Allow Comments & Visibility -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label mb-2">Allow Comments</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" name="allow_comments"
                                               id="edit-allow-comments">
                                        <label class="form-check-label" for="edit-allow-comments">Yes</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="edit-visibility" class="form-label">Visibility<span class="text-danger">*</span></label>
                                    <select name="visibility" id="edit-visibility" class="form-select" required>
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                    <div class="invalid-feedback">Please select visibility.</div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateBlogBtn">Update Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Blog Modal -->

        <!-- Delete Blog Modal -->
        <div class="modal fade" id="deleteBlogModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold">Delete Blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="delete-blog-form" action="{{ route('administration.blogs.destroy') }}"
                              method="POST" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="delete-blog-id">
                            <p>Are you sure you want to delete this blog post?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="deleteBlogBtn">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Blog Modal -->

        <!-- Blog Items Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Tags</th>
                                    <th scope="col">Small Desc</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="blog-table-body">
                                @foreach ($blogs as $blog)
                                    <tr data-blog-id="{{ $blog->id }}">
                                        <th scope="row">{{ $blog->id }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name ?? '-' }}</td>
                                        <td>
                                            @foreach($blog->tags as $t)
                                              <span class="badge bg-secondary">{{ $t->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>{{ Str::limit($blog->small_description, 50) }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $blog->featured_image) }}"
                                                 alt="Image" style="width: 60px; height: auto;">
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($blog->created_at)->format('d, M Y') }}</td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary edit-blog"
                                                   data-id="{{ $blog->id }}"
                                                   data-title="{{ $blog->title }}"
                                                   data-small_description="{{ $blog->small_description }}"
                                                   data-description="{{ $blog->description }}"
                                                   data-category_id="{{ $blog->category_id }}"
                                                   data-tag_ids="{{ $blog->tags->pluck('id')->implode(',') }}"
                                                   data-featured_image="{{ asset('storage/' . $blog->featured_image) }}"
                                                   data-page_title="{{ $blog->page_title }}"
                                                   data-page_keyword="{{ $blog->page_keyword }}"
                                                   data-page_description="{{ $blog->page_description }}"
                                                   data-allow_comments="{{ $blog->allow_comments }}"
                                                   data-visibility="{{ $blog->visibility }}">
                                                    <i class="ri-settings-4-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="link-danger delete-blog"
                                                   data-id="{{ $blog->id }}">
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
        <!-- End Blog Items Table -->
    </div>
</div>

<!-- Include SweetAlert2 and jQuery if not already included -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // --- Create Blog AJAX ---
    $("#blog-form").on("submit", function(e) {
        e.preventDefault();

        let formData = new FormData(this);
        // Force allow_comments to be 0 or 1
        let allowComments = $('#allow-comments').is(':checked') ? 1 : 0;
        formData.set('allow_comments', allowComments);

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                console.log("Creating blog...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Success!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });

                    let blog = response.data;
                    let tagsHtml = "";
                    blog.tags.forEach(tag => {
                        tagsHtml += `<span class="badge bg-secondary me-1">${tag.name}</span>`;
                    });

                    let row = `
                    <tr data-blog-id="${blog.id}">
                        <th scope="row">${blog.id}</th>
                        <td>${blog.title}</td>
                        <td>${blog.category ? blog.category.name : '-'}</td>
                        <td>${tagsHtml}</td>
                        <td>${blog.small_description ? blog.small_description.substring(0,50) : ''}</td>
                        <td><img src="/storage/${blog.featured_image}" style="width:60px;"/></td>
                        <td>${new Date(blog.created_at).toLocaleDateString()}</td>
                        <td>
                          <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary edit-blog"
                               data-id="${blog.id}"
                               data-title="${blog.title}"
                               data-small_description="${blog.small_description || ''}"
                               data-description="${blog.description || ''}"
                               data-category_id="${blog.category_id}"
                               data-tag_ids="${blog.tags.map(t => t.id).join(',')}"
                               data-featured_image="/storage/${blog.featured_image}"
                               data-page_title="${blog.page_title|| ''}"
                               data-page_keyword="${blog.page_keyword|| ''}"
                               data-page_description="${blog.page_description|| ''}"
                               data-allow_comments="${blog.allow_comments}"
                               data-visibility="${blog.visibility}">
                              <i class="ri-settings-4-line"></i>
                            </a>
                            <a href="javascript:void(0);" class="link-danger delete-blog" data-id="${blog.id}">
                              <i class="ri-delete-bin-5-line"></i>
                            </a>
                          </div>
                        </td>
                    </tr>`;
                    $("#blog-table-body").prepend(row);
                    $("#blog-form")[0].reset();
                    $("#addBlogModal").modal("hide");
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
                        text: "An error occurred while creating blog.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

    // --- Open Edit Blog Modal & populate fields ---
    $(document).on("click", ".edit-blog", function() {
        let id                = $(this).data("id");
        let title             = $(this).data("title");
        let small_description = $(this).data("small_description");
        let description       = $(this).data("description");
        let categoryId        = $(this).data("category_id");
        let tagIds            = $(this).data("tag_ids").toString().split(',');
        let featuredImage     = $(this).data("featured_image");
        let pageTitle         = $(this).data("page_title");
        let pageKeyword       = $(this).data("page_keyword");
        let pageDescription   = $(this).data("page_description");
        let allowComments     = $(this).data("allow_comments");
        let visibility        = $(this).data("visibility");

        $("#edit-blog-id").val(id);
        $("#edit-blog-title").val(title);
        $("#edit-small-description").val(small_description);
        $("#edit-description").val(description);
        $("#edit-category-id").val(categoryId);

        // Select tags
        $("#edit-tag-ids").val(tagIds).trigger('change');

        // Show current image
        $("#current-featured-image").attr("src", featuredImage);

        $("#edit-page-title").val(pageTitle);
        $("#edit-page-keyword").val(pageKeyword);
        $("#edit-page-description").val(pageDescription);
        $("#edit-allow-comments").prop('checked', allowComments == 1);
        $("#edit-visibility").val(visibility);

        // Update form action
        let updateUrl = "{{ route('administration.blogs.update', ['blog' => ':id']) }}";
        updateUrl = updateUrl.replace(':id', id);
        $("#edit-blog-form").attr("action", updateUrl);

        // Show Modal
        let editModal = new bootstrap.Modal(document.getElementById('editBlogModal'));
        editModal.show();
    });

    // --- Update Blog AJAX ---
    $("#edit-blog-form").on("submit", function(e) {
        e.preventDefault();

        let formData = new FormData(this);
        // Force allow_comments to be 0 or 1
        let allowComments = $('#edit-allow-comments').is(':checked') ? 1 : 0;
        formData.set('allow_comments', allowComments);

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                console.log("Updating blog...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Updated!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });

                    let blog = response.data;
                    let row  = $(`#blog-table-body`).find(`tr[data-blog-id='${blog.id}']`);

                    // Update table cells
                    row.find("td:nth-child(2)").text(blog.title);
                    row.find("td:nth-child(3)").text(blog.category ? blog.category.name : '-');

                    // Rebuild tags
                    let tagsHtml = "";
                    blog.tags.forEach(tag => {
                        tagsHtml += `<span class="badge bg-secondary me-1">${tag.name}</span>`;
                    });
                    row.find("td:nth-child(4)").html(tagsHtml);

                    row.find("td:nth-child(5)").text(blog.small_description ? blog.small_description.substring(0,50) : '');
                    row.find("td:nth-child(6) img").attr("src", `/storage/${blog.featured_image}`);
                    row.find("td:nth-child(7)").text(new Date(blog.created_at).toLocaleDateString());

                    $("#edit-blog-form")[0].reset();
                    $("#editBlogModal").modal("hide");
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
                    text: "An error occurred while updating blog.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    // --- Open Delete Blog Modal ---
    $(document).on("click", ".delete-blog", function() {
        let id = $(this).data("id");
        $("#delete-blog-id").val(id);
        let deleteModal = new bootstrap.Modal(document.getElementById('deleteBlogModal'));
        deleteModal.show();
    });

    // --- Delete Blog AJAX ---
    $("#delete-blog-form").on("submit", function(e) {
        e.preventDefault();
        let formData = $(this).serialize();

        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            beforeSend: function() {
                console.log("Deleting blog...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Deleted!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    $(`#blog-table-body`).find(`tr[data-blog-id='${$("#delete-blog-id").val()}']`).remove();
                    $("#delete-blog-form")[0].reset();
                    $("#deleteBlogModal").modal("hide");
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
                    text: "An error occurred while deleting blog.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>

{{-- CKEditor library --}}
<script src="{{ asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
{{-- Inline initializer: only one editor per textarea --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.ckeditor-classic').forEach(function(textarea) {
        ClassicEditor
            .create(textarea)
            .then(editor => {
                editor.ui.view.editable.element.style.height = '200px';
            })
            .catch(error => {
                console.error(error);
            });
    });
});
</script>

@endsection
