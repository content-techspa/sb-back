<tr data-image-id="{{ $image->id }}">
    <th scope="row">
        <div class="form-check">
            <input class="form-check-input image-checkbox" type="checkbox" value="{{ $image->id }}" id="imageCheck{{ $image->id }}">
            <label class="form-check-label" for="imageCheck{{ $image->id }}"></label>
        </div>
    </th>
    <td>{{ $image->id }}</td>
    <td>
        <div class="d-flex gap-2 align-items-center">
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="" class="avatar-xs rounded-circle" />
            </div>
        </div>
    </td>
    <td>{{ $image->created_at->format('d, M Y') }}</td>
    <td>
        <a href="javascript:void(0);" class="btn btn-sm btn-primary edit-image"
           data-id="{{ $image->id }}"
           data-title="{{ $image->title }}"
           data-image="{{ asset('storage/' . $image->image_path) }}">
            Edit
        </a>
        <a href="javascript:void(0);" class="btn btn-sm btn-danger delete-image" data-id="{{ $image->id }}">
            Delete
        </a>
    </td>
</tr>
