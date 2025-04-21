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
                                <h4 class="mb-0">News Management</h4>
                            </div>
                            <div class="col-lg-4">
                                <div class="search-box">
                                    <input type="text" class="form-control border-0" id="searchNews"
                                        placeholder="Search for news..." autocomplete="off">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <!-- Button to trigger Add News Modal -->
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#addNewsModal">Add News</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add News Modal -->
        <div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="addNewsModalLabel">Publish News</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="addNewsModalClose"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="news-form" action="{{ route('administration.news.store') }}" method="POST"
                            enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <div class="mb-3">
                                <label for="news-title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="news-title"
                                    placeholder="Enter news title" required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="mb-3">
                                <label for="short-description" class="form-label">Short Description</label>
                                <textarea name="short_description" id="short-description" class="form-control" placeholder="Enter short description" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Content</label>
                                <textarea name="content" id="content" class="form-control" placeholder="Enter news content" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="cover-image" class="form-label">Cover Image</label>
                                <input type="file" name="cover_image" id="cover-image" class="form-control"
                                    accept="image/png, image/gif, image/jpeg" required>
                                <div class="invalid-feedback">Please upload a cover image.</div>
                            </div>
                            <div class="mb-3">
                                <label for="pdf-file" class="form-label">PDF File</label>
                                <input type="file" name="pdf_file" id="pdf-file" class="form-control" accept="application/pdf"
                                    required>
                                <div class="invalid-feedback">Please upload a PDF file.</div>
                            </div>
                            <div class="mb-3">
                                <label for="meta-title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" id="meta-title" class="form-control"
                                    placeholder="Enter meta title">
                            </div>
                            <div class="mb-3">
                                <label for="meta-description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta-description" class="form-control" placeholder="Enter meta description" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="keywords" class="form-label">Keywords</label>
                                <input type="text" name="keywords" id="keywords" class="form-control"
                                    placeholder="Enter keywords separated by commas">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="addNewsBtn">Publish News</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Add News Modal -->

        <!-- Edit News Modal -->
        <div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="editNewsModalLabel">Edit News</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="editNewsModalClose"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="edit-news-form" action="{{ route('administration.news.update', ['news' => '__news_id__']) }}"
                            method="POST" enctype="multipart/form-data" autocomplete="off" class="needs-validation p-2"
                            novalidate>
                            @csrf
                            <input type="hidden" name="id" id="edit-news-id">
                            <div class="mb-3">
                                <label for="edit-news-title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="edit-news-title"
                                    placeholder="Enter news title" required>
                                <div class="invalid-feedback">Please enter a title.</div>
                            </div>
                            <div class="mb-3">
                                <label for="edit-short-description" class="form-label">Short Description</label>
                                <textarea name="short_description" id="edit-short-description" class="form-control" placeholder="Enter short description" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit-content" class="form-label">Content</label>
                                <textarea name="content" id="edit-content" class="form-control" placeholder="Enter news content" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit-cover-image" class="form-label">Cover Image</label>
                                <input type="file" name="cover_image" id="edit-cover-image" class="form-control"
                                    accept="image/png, image/gif, image/jpeg">
                                <div class="mt-2">
                                    <img id="current-cover-image" src="" alt="Cover Image" style="max-width:150px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="edit-pdf-file" class="form-label">PDF File</label>
                                <input type="file" name="pdf_file" id="edit-pdf-file" class="form-control"
                                    accept="application/pdf">
                                <div class="mt-2">
                                    <a id="current-pdf-file" href="#" target="_blank">View current PDF</a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="edit-meta-title" class="form-label">Meta Title</label>
                                <input type="text" name="meta_title" id="edit-meta-title" class="form-control"
                                    placeholder="Enter meta title">
                            </div>
                            <div class="mb-3">
                                <label for="edit-meta-description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="edit-meta-description" class="form-control" placeholder="Enter meta description" rows="2"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit-keywords" class="form-label">Keywords</label>
                                <input type="text" name="keywords" id="edit-keywords" class="form-control"
                                    placeholder="Enter keywords separated by commas">
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-secondary" id="updateNewsBtn">Update News</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit News Modal -->

        <!-- Delete News Modal -->
        <div class="modal fade" id="deleteNewsModal" tabindex="-1" aria-labelledby="deleteNewsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header p-4 pb-0 m-2">
                        <h1 class="modal-title fs-5 fw-bold" id="deleteNewsModalLabel">Delete News</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" id="deleteNewsModalClose"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0 p-4">
                        <form id="delete-news-form" action="{{ route('administration.news.destroy') }}" method="POST"
                            autocomplete="off" class="needs-validation p-2" novalidate>
                            @csrf
                            <input type="hidden" name="id" id="delete-news-id">
                            <p>Are you sure you want to delete this news item?</p>
                            <div class="text-end">
                                <button type="submit" class="btn btn-danger" id="deleteNewsBtn">Delete News</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete News Modal -->

        <!-- News Items Table -->
        <div class="row mt-n5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-borderless table-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Cover Image</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="news-table-body">
                                @foreach ($newsItems as $news)
                                    <tr data-news-id="{{ $news->id }}">
                                        <th scope="row">{{ $news->id }}</th>
                                        <td>{{ $news->title }}</td>
                                        <td>{{ $news->short_description }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $news->cover_image) }}" alt="Cover Image" style="width: 60px; height: auto;">
                                        </td>
                                        <td>{{ $news->created_at->format('d, M Y') }}</td>
                                        <td>
                                            <div class="hstack gap-3 fs-15">
                                                <a href="javascript:void(0);" class="link-primary edit-news"
                                                    data-id="{{ $news->id }}"
                                                    data-title="{{ $news->title }}"
                                                    data-short_description="{{ $news->short_description }}"
                                                    data-content="{{ $news->content }}"
                                                    data-cover_image="{{ asset('storage/' . $news->cover_image) }}"
                                                    data-pdf_file="{{ asset('storage/' . $news->pdf_file) }}"
                                                    data-meta_title="{{ $news->meta_title }}"
                                                    data-meta_description="{{ $news->meta_description }}"
                                                    data-keywords="{{ $news->keywords }}">
                                                    <i class="ri-settings-4-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="link-danger delete-news"
                                                    data-id="{{ $news->id }}">
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
        <!-- End News Items Table -->
    </div>
</div>

<!-- Include SweetAlert2 and jQuery if not already included -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // AJAX for publishing news
    $("#news-form").on("submit", function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                console.log("Publishing news...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Published!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    var news = response.data;
                    var row = '<tr data-news-id="' + news.id + '">' +
                        '<th scope="row">' + news.id + '</th>' +
                        '<td>' + news.title + '</td>' +
                        '<td>' + (news.short_description ? news.short_description : '') + '</td>' +
                        '<td><img src="/storage/' + news.cover_image + '" alt="Cover Image" style="width: 60px; height: auto;"></td>' +
                        '<td>' + new Date(news.created_at).toLocaleDateString() + '</td>' +
                        '<td>' +
                        '<div class="hstack gap-3 fs-15">' +
                        '<a href="javascript:void(0);" class="link-primary edit-news" ' +
                        'data-id="' + news.id + '" ' +
                        'data-title="' + news.title + '" ' +
                        'data-short_description="' + (news.short_description ? news.short_description : '') + '" ' +
                        'data-content="' + (news.content ? news.content : '') + '" ' +
                        'data-cover_image="/storage/' + news.cover_image + '" ' +
                        'data-pdf_file="/storage/' + news.pdf_file + '" ' +
                        'data-meta_title="' + (news.meta_title ? news.meta_title : '') + '" ' +
                        'data-meta_description="' + (news.meta_description ? news.meta_description : '') + '" ' +
                        'data-keywords="' + (news.keywords ? news.keywords : '') + '">' +
                        '<i class="ri-settings-4-line"></i>' +
                        '</a>' +
                        '<a href="javascript:void(0);" class="link-danger delete-news" data-id="' + news.id + '">' +
                        '<i class="ri-delete-bin-5-line"></i>' +
                        '</a>' +
                        '</div>' +
                        '</td>' +
                        '</tr>';
                    $("#news-table-body").append(row);
                    $("#news-form")[0].reset();
                    $("#addNewsModal").modal("hide");
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
                        text: "An error occurred while publishing news.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

    // Click event to open Edit News modal
    $(document).on("click", ".edit-news", function() {
        var id = $(this).data("id");
        var title = $(this).data("title");
        var short_description = $(this).data("short_description");
        var content = $(this).data("content");
        var cover_image = $(this).data("cover_image");
        var pdf_file = $(this).data("pdf_file");
        var meta_title = $(this).data("meta_title");
        var meta_description = $(this).data("meta_description");
        var keywords = $(this).data("keywords");

        $("#edit-news-id").val(id);
        $("#edit-news-title").val(title);
        $("#edit-short-description").val(short_description);
        $("#edit-content").val(content);
        $("#current-cover-image").attr("src", cover_image);
        $("#current-pdf-file").attr("href", pdf_file);
        $("#current-pdf-file").text("View current PDF");
        $("#edit-meta-title").val(meta_title);
        $("#edit-meta-description").val(meta_description);
        $("#edit-keywords").val(keywords);

        // Update the edit form action URL dynamically
        var updateUrl = "{{ route('administration.news.update', ['news' => ':id']) }}";
        updateUrl = updateUrl.replace(':id', id);
        $("#edit-news-form").attr("action", updateUrl);

        var editModal = new bootstrap.Modal(document.getElementById('editNewsModal'));
        editModal.show();
    });

    // AJAX for updating news
    $("#edit-news-form").on("submit", function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                console.log("Updating news...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Updated!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    var news = response.data;
                    var row = $("#news-table-body").find("tr[data-news-id='" + news.id + "']");
                    row.find("td:eq(0)").text(news.title);
                    row.find("td:eq(1)").text(news.short_description);
                    row.find("td:eq(2) img").attr("src", "/storage/" + news.cover_image);
                    row.find("td:eq(3)").text(new Date(news.created_at).toLocaleDateString());
                    $("#edit-news-form")[0].reset();
                    $("#editNewsModal").modal("hide");
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
                    text: "An error occurred while updating news.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    // Click event to open Delete News modal
    $(document).on("click", ".delete-news", function() {
        var id = $(this).data("id");
        $("#delete-news-id").val(id);
        var deleteModal = new bootstrap.Modal(document.getElementById('deleteNewsModal'));
        deleteModal.show();
    });

    // AJAX for deleting news
    $("#delete-news-form").on("submit", function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: $(this).attr("action"),
            type: "POST",
            data: formData,
            beforeSend: function() {
                console.log("Deleting news...");
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: "Deleted!",
                        text: response.message,
                        icon: "success",
                        confirmButtonText: "OK"
                    });
                    $("#news-table-body").find("tr[data-news-id='" + $("#delete-news-id").val() + "']").remove();
                    $("#delete-news-form")[0].reset();
                    $("#deleteNewsModal").modal("hide");
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
                    text: "An error occurred while deleting news.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>
@endsection
