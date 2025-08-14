<tr data-testimonial-id="{{ $testimonial->id }}">
    <td>{{ $testimonial->id }}</td>
    <td>{{ $testimonial->title }}</td>
    <td>{{ $testimonial->subtitle }}</td>
    <td>{{ $testimonial->testimonial }}</td>
    <td>{{ $testimonial->created_at->format('Y-m-d') }}</td>
    <td>
        <button type="button" class="btn btn-secondary btn-sm edit-testimonial"
            data-id="{{ $testimonial->id }}"
            data-title="{{ $testimonial->title }}"
            data-subtitle="{{ $testimonial->subtitle }}"
            data-testimonial="{{ $testimonial->testimonial }}"
        >Edit</button>
        <button type="button" class="btn btn-danger btn-sm remove-testimonial"
            data-id="{{ $testimonial->id }}"
        >Delete</button>
    </td>
</tr>
