@extends('administration.template.template')

@section('content')
<div class="page-content">
  <div class="container-fluid">

    <!-- Heading & Add -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card mt-n4 mx-n4 border-0 bg-primary-subtle">
          <div class="card-body px-4">
            <div class="row justify-content-between g-3 mb-4 pt-3">
              <h4 class="col-lg-4">City Management</h4>
              <div class="col-lg-4 text-end">
                <button class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#addCityModal">Add City</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add City Modal -->
    <div class="modal fade" id="addCityModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create City</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="city-form" action="{{ route('administration.cities.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label class="form-label">City Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">State</label>
                <select name="state_id" class="form-select" required>
                  <option value="">Choose state…</option>
                  @foreach($states as $st)
                    <option value="{{ $st->id }}">
                      {{ $st->country->name }} → {{ $st->name }}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="text-end">
                <button class="btn btn-secondary">Create</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit City Modal -->
    <div class="modal fade" id="editCityModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit City</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="edit-city-form" action="#" method="POST">
              @csrf
              <input type="hidden" id="edit-city-id" name="id">
              <div class="mb-3">
                <label class="form-label">City Name</label>
                <input type="text" name="name" id="edit-city-name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">State</label>
                <select name="state_id" id="edit-state-id" class="form-select" required>
                  <option value="">Choose state…</option>
                  @foreach($states as $st)
                    <option value="{{ $st->id }}">
                      {{ $st->country->name }} → {{ $st->name }}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="text-end">
                <button class="btn btn-secondary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete City Modal -->
    <div class="modal fade" id="deleteCityModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete City</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="delete-city-form" action="{{ route('administration.cities.destroy') }}" method="POST">
              @csrf
              <input type="hidden" id="delete-city-id" name="id">
              <p>Really delete this city?</p>
              <div class="text-end">
                <button class="btn btn-danger">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- City Table -->
    <div class="row mt-4">
      <div class="col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>State</th>
              <th>Country</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="city-table-body">
            @foreach($cities as $city)
              <tr data-city-id="{{ $city->id }}">
                <td>{{ $city->id }}</td>
                <td>{{ $city->name }}</td>
                <td>{{ $city->state->name }}</td>
                <td>{{ $city->state->country->name }}</td>
                <td>
                  <a href="javascript:void(0);" class="edit-city"
                     data-id="{{ $city->id }}"
                     data-name="{{ $city->name }}"
                     data-state_id="{{ $city->state_id }}">
                    <i class="ri-settings-4-line"></i>
                  </a>
                  <a href="javascript:void(0);" class="delete-city" data-id="{{ $city->id }}">
                    <i class="ri-delete-bin-5-line text-danger"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>

{{-- CSRF for AJAX --}}
<script>
$.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});
</script>

<script>
$(function(){
  // Create City
  $('#city-form').submit(function(e){
    e.preventDefault();
    $.post($(this).attr('action'), $(this).serialize(), function(res){
      if(res.success){
        let c = res.data;
        let row = `
          <tr data-city-id="${c.id}">
            <td>${c.id}</td>
            <td>${c.name}</td>
            <td>${c.state.name}</td>
            <td>${c.state.country.name}</td>
            <td>
              <a href="javascript:void(0);" class="edit-city"
                 data-id="${c.id}"
                 data-name="${c.name}"
                 data-state_id="${c.state_id}">
                <i class="ri-settings-4-line"></i>
              </a>
              <a href="javascript:void(0);" class="delete-city" data-id="${c.id}">
                <i class="ri-delete-bin-5-line text-danger"></i>
              </a>
            </td>
          </tr>`;
        $('#city-table-body').prepend(row);
        $('#city-form')[0].reset();
        $('#addCityModal').modal('hide');
      } else {
        Swal.fire('Error', res.message, 'error');
      }
    }, 'json').fail(function(xhr){
      Swal.fire('Error', xhr.responseText, 'error');
    });
  });

  // Open Edit City Modal
  $(document).on('click','.edit-city',function(){
    let id   = $(this).data('id'),
        name = $(this).data('name'),
        stid = $(this).data('state_id');
    $('#edit-city-id').val(id);
    $('#edit-city-name').val(name);
    $('#edit-state-id').val(stid);
    $('#edit-city-form').attr('action',
      "{{ route('administration.cities.update',['city'=>':id']) }}"
        .replace(':id', id)
    );
    new bootstrap.Modal($('#editCityModal')).show();
  });

  // Update City
  $('#edit-city-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    $.post(form.attr('action'), form.serialize(), function(res){
      if(res.success){
        let c = res.data;
        let row = $(`#city-table-body tr[data-city-id='${c.id}']`);
        row.find('td:nth-child(2)').text(c.name);
        row.find('td:nth-child(3)').text(c.state.name);
        row.find('td:nth-child(4)').text(c.state.country.name);
        $('#editCityModal').modal('hide');
      } else {
        Swal.fire('Error', res.message, 'error');
      }
    }, 'json').fail(function(xhr){
      Swal.fire('Error', xhr.responseText, 'error');
    });
  });

  // Open Delete City Modal
  $(document).on('click','.delete-city',function(){
    let id = $(this).data('id');
    $('#delete-city-id').val(id);
    new bootstrap.Modal($('#deleteCityModal')).show();
  });

  // Delete City
  $('#delete-city-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    $.post(form.attr('action'), form.serialize(), function(res){
      if(res.success){
        $(`#city-table-body tr[data-city-id='${res.data.id}']`).remove();
        $('#deleteCityModal').modal('hide');
      } else {
        Swal.fire('Error', res.message, 'error');
      }
    }, 'json').fail(function(xhr){
      Swal.fire('Error', xhr.responseText, 'error');
    });
  });
});
</script>
@endsection
