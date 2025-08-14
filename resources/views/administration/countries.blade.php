@extends('administration.template.template')

@section('content')
<div class="page-content">
  <div class="container-fluid">

    <!-- Heading & Add Button -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-n4 mx-n4 border-0 rounded-0 bg-primary-subtle">
          <div class="card-body pb-0 px-4">
            <div class="row justify-content-between align-items-center g-3 mb-5 pb-1 pt-3">
              <div class="col-lg-4">
                <h4 class="mb-0">Country Management</h4>
              </div>
              <div class="col-lg-4 text-end">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#addCountryModal">Add Country</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add Country Modal -->
    <div class="modal fade" id="addCountryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header p-4 pb-0 m-2">
            <h1 class="modal-title fs-5 fw-bold">Create Country</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
          </div>
          <div class="modal-body pt-0 p-4">
            <form id="country-form" action="{{ route('administration.countries.store') }}"
                  method="POST" autocomplete="off" novalidate>
              @csrf
              <div class="mb-3">
                <label for="country-name" class="form-label">Country Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="country-name"
                       placeholder="Enter country name" required>
                <div class="invalid-feedback">Please enter a name.</div>
              </div>
              <div class="mb-3">
                <label for="iso-code" class="form-label">ISO Code</label>
                <input type="text" class="form-control" name="iso_code" id="iso-code"
                       placeholder="Enter optional ISO code (e.g. US, CA)">
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-secondary" id="addCountryBtn">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Add Country Modal -->

    <!-- Edit Country Modal -->
    <div class="modal fade" id="editCountryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header p-4 pb-0 m-2">
            <h1 class="modal-title fs-5 fw-bold">Edit Country</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
          </div>
          <div class="modal-body pt-0 p-4">
            <form id="edit-country-form" action="#" method="POST" autocomplete="off" novalidate>
              @csrf
              <input type="hidden" name="id" id="edit-country-id">
              <div class="mb-3">
                <label for="edit-country-name" class="form-label">Country Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="edit-country-name" required>
                <div class="invalid-feedback">Please enter a name.</div>
              </div>
              <div class="mb-3">
                <label for="edit-iso-code" class="form-label">ISO Code</label>
                <input type="text" class="form-control" name="iso_code" id="edit-iso-code">
              </div>
              <div class="text-end">
                <button type="submit" class="btn btn-secondary" id="updateCountryBtn">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Country Modal -->

    <!-- Delete Country Modal -->
    <div class="modal fade" id="deleteCountryModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header p-4 pb-0 m-2">
            <h1 class="modal-title fs-5 fw-bold">Delete Country</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
          </div>
          <div class="modal-body pt-0 p-4">
            <form id="delete-country-form" action="{{ route('administration.countries.destroy') }}"
                  method="POST" novalidate>
              @csrf
              <input type="hidden" name="id" id="delete-country-id">
              <p>Are you sure you want to delete this country?</p>
              <div class="text-end">
                <button type="submit" class="btn btn-danger" id="deleteCountryBtn">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Delete Country Modal -->

    <!-- Country Table -->
    <div class="row mt-n5">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <table class="table table-borderless table-nowrap">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">ISO Code</th>
                  <th scope="col">States Count</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody id="country-table-body">
                @foreach ($countries as $country)
                  <tr data-country-id="{{ $country->id }}">
                    <th scope="row">{{ $country->id }}</th>
                    <td>{{ $country->name }}</td>
                    <td>{{ $country->iso_code ?? '—' }}</td>
                    <td>{{ $country->states_count }}</td>
                    <td>
                      <div class="hstack gap-3 fs-15">
                        <a href="javascript:void(0);" class="link-primary edit-country"
                           data-id="{{ $country->id }}"
                           data-name="{{ $country->name }}"
                           data-iso_code="{{ $country->iso_code }}">
                          <i class="ri-settings-4-line"></i>
                        </a>
                        <a href="javascript:void(0);" class="link-danger delete-country"
                           data-id="{{ $country->id }}">
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
    <!-- End Country Table -->

  </div>
</div>

<!-- Include SweetAlert2 and jQuery if not already included -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    // --- Create Country AJAX ---
    $("#country-form").on("submit", function(e) {
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

                    let country = response.data;
                    let row = `
                      <tr data-country-id="${country.id}">
                        <th scope="row">${country.id}</th>
                        <td>${country.name}</td>
                        <td>${country.iso_code || '—'}</td>
                        <td>0</td>
                        <td>
                          <div class="hstack gap-3 fs-15">
                            <a href="javascript:void(0);" class="link-primary edit-country"
                               data-id="${country.id}"
                               data-name="${country.name}"
                               data-iso_code="${country.iso_code || ''}">
                              <i class="ri-settings-4-line"></i>
                            </a>
                            <a href="javascript:void(0);" class="link-danger delete-country" data-id="${country.id}">
                              <i class="ri-delete-bin-5-line"></i>
                            </a>
                          </div>
                        </td>
                      </tr>`;
                    $("#country-table-body").prepend(row);
                    $("#country-form")[0].reset();
                    $("#addCountryModal").modal("hide");
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
                        text: "An error occurred while creating country.",
                        icon: "error",
                        confirmButtonText: "OK"
                    });
                }
            }
        });
    });

    // --- Open Edit Country Modal & populate fields ---
    $(document).on("click", ".edit-country", function() {
        let id       = $(this).data("id");
        let name     = $(this).data("name");
        let iso_code = $(this).data("iso_code");

        $("#edit-country-id").val(id);
        $("#edit-country-name").val(name);
        $("#edit-iso-code").val(iso_code);

        let updateUrl = "{{ route('administration.countries.update', ['country' => ':id']) }}";
        updateUrl = updateUrl.replace(':id', id);
        $("#edit-country-form").attr("action", updateUrl);

        let modal = new bootstrap.Modal(document.getElementById('editCountryModal'));
        modal.show();
    });

    // --- Update Country AJAX ---
    $("#edit-country-form").on("submit", function(e) {
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

                    let country = response.data;
                    let row = $(`#country-table-body`).find(`tr[data-country-id='${country.id}']`);
                    row.find("td:nth-child(1)").text(country.name);
                    row.find("td:nth-child(2)").text(country.iso_code || '—');

                    $("#edit-country-form")[0].reset();
                    $("#editCountryModal").modal("hide");
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
                    text: "An error occurred while updating country.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });

    // --- Open Delete Country Modal ---
    $(document).on("click", ".delete-country", function() {
        let id = $(this).data("id");
        $("#delete-country-id").val(id);
        let modal = new bootstrap.Modal(document.getElementById('deleteCountryModal'));
        modal.show();
    });

    // --- Delete Country AJAX ---
    $("#delete-country-form").on("submit", function(e) {
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
                    $(`#country-table-body`).find(`tr[data-country-id='${ $("#delete-country-id").val() }']`).remove();
                    $("#delete-country-form")[0].reset();
                    $("#deleteCountryModal").modal("hide");
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
                    text: "An error occurred while deleting country.",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }
        });
    });
});
</script>
@endsection
