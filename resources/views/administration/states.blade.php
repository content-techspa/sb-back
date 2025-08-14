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
              <h4 class="col-lg-4">State Management</h4>
              <div class="col-lg-4 text-end">
                <button class="btn btn-secondary" data-bs-toggle="modal"
                        data-bs-target="#addStateModal">Add State</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add State Modal -->
    <div class="modal fade" id="addStateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Create State</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="state-form" action="{{ route('administration.states.store') }}" method="POST" novalidate>
              @csrf
              <div class="mb-3">
                <label class="form-label">State Name</label>
                <input type="text" name="name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Country</label>
                <select name="country_id" class="form-select" required>
                  <option value="">Choose one…</option>
                  @foreach($countries as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
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

    <!-- Edit State Modal -->
    <div class="modal fade" id="editStateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit State</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="edit-state-form" action="#" method="POST" novalidate>
              @csrf
              <input type="hidden" id="edit-state-id" name="id">
              <div class="mb-3">
                <label class="form-label">State Name</label>
                <input type="text" name="name" id="edit-state-name" class="form-control" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Country</label>
                <select name="country_id" id="edit-country-id" class="form-select" required>
                  <option value="">Choose one…</option>
                  @foreach($countries as $c)
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
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

    <!-- Delete State Modal -->
    <div class="modal fade" id="deleteStateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete State</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form id="delete-state-form" action="{{ route('administration.states.destroy') }}" method="POST">
              @csrf
              <input type="hidden" id="delete-state-id" name="id">
              <p>Really delete this state?</p>
              <div class="text-end">
                <button class="btn btn-danger">Delete</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="row mt-4">
      <div class="col-lg-12">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th><th>Name</th><th>Country</th><th>Actions</th>
            </tr>
          </thead>
          <tbody id="state-table-body">
            @foreach($states as $st)
              <tr data-state-id="{{ $st->id }}">
                <td>{{ $st->id }}</td>
                <td>{{ $st->name }}</td>
                <td>{{ $st->country->name }}</td>
                <td>
                  <a href="javascript:void(0);" class="edit-state" 
                     data-id="{{ $st->id }}"
                     data-name="{{ $st->name }}"
                     data-country_id="{{ $st->country_id }}">
                    <i class="ri-settings-4-line"></i>
                  </a>
                  <a href="javascript:void(0);" class="delete-state" data-id="{{ $st->id }}">
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

{{-- CSRF setup for all AJAX --}}
<script>
$.ajaxSetup({
  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
});
</script>

<script>
$(function(){
  // Create
  $('#state-form').submit(function(e){
    e.preventDefault();
    $.post($(this).attr('action'), $(this).serialize(), function(res){
      if(res.success){
        let s = res.data;
        let row = `
          <tr data-state-id="${s.id}">
            <td>${s.id}</td>
            <td>${s.name}</td>
            <td>${s.country.name}</td>
            <td>
              <a href="javascript:void(0);" class="edit-state"
                 data-id="${s.id}"
                 data-name="${s.name}"
                 data-country_id="${s.country_id}">
                <i class="ri-settings-4-line"></i>
              </a>
              <a href="javascript:void(0);" class="delete-state" data-id="${s.id}">
                <i class="ri-delete-bin-5-line text-danger"></i>
              </a>
            </td>
          </tr>`;
        $('#state-table-body').prepend(row);
        $('#state-form')[0].reset();
        $('#addStateModal').modal('hide');
      } else {
        alert(res.message);
      }
    }, 'json').fail(function(xhr){
      alert('Error: '+xhr.responseText);
    });
  });

  // Open Edit
  $(document).on('click','.edit-state',function(){
    let id      = $(this).data('id'),
        name    = $(this).data('name'),
        country = $(this).data('country_id');
    $('#edit-state-id').val(id);
    $('#edit-state-name').val(name);
    $('#edit-country-id').val(country);
    $('#edit-state-form').attr('action',
      "{{ route('administration.states.update', ['state'=>':id']) }}"
        .replace(':id', id)
    );
    new bootstrap.Modal($('#editStateModal')).show();
  });

  // Update
  $('#edit-state-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    $.post(form.attr('action'), form.serialize(), function(res){
      if(res.success){
        let s = res.data;
        let row = $(`#state-table-body tr[data-state-id='${s.id}']`);
        row.find('td:nth-child(2)').text(s.name);
        row.find('td:nth-child(3)').text(s.country.name);
        form[0].reset();
        $('#editStateModal').modal('hide');
      } else {
        alert(res.message);
      }
    },'json').fail(function(xhr){
      alert('Error: '+xhr.responseText);
    });
  });

  // Open Delete
  $(document).on('click','.delete-state',function(){
    let id = $(this).data('id');
    $('#delete-state-id').val(id);
    new bootstrap.Modal($('#deleteStateModal')).show();
  });

  // Destroy
  $('#delete-state-form').submit(function(e){
    e.preventDefault();
    let form = $(this);
    $.post(form.attr('action'), form.serialize(), function(res){
      if(res.success){
        $(`#state-table-body tr[data-state-id='${res.data.id}']`).remove();
        $('#deleteStateModal').modal('hide');
      } else {
        alert(res.message);
      }
    },'json').fail(function(xhr){
      alert('Error: '+xhr.responseText);
    });
  });
});
</script>
@endsection
