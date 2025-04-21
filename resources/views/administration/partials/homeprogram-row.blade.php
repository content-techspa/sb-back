<tr data-homeprogram-id="{{ $program->id }}">
    <th scope="row">{{ $program->id }}</th>
    <td>
        <img src="{{ asset('storage/' . $program->thumbnail) }}" alt="Thumbnail" style="width: 60px; height: auto;">
    </td>
    <td>{{ $program->name }}</td>
    <td>{{ \Illuminate\Support\Str::limit($program->description, 50) }}</td>
    <td>{{ $program->rating }}</td>
    <td>{{ $program->totalReviews }}</td>
    <td>{{ $program->created_at->format('d, M Y') }}</td>
    <td>
        <div class="hstack gap-3 fs-15">
            <!-- Edit Program Button -->
            <a href="javascript:void(0);" class="link-primary edit-homeprogram"
               data-id="{{ $program->id }}"
               data-name="{{ $program->name }}"
               data-description="{{ $program->description }}"
               data-rating="{{ $program->rating }}"
               data-totalreviews="{{ $program->totalReviews }}"
               data-thumbnail="{{ asset('storage/' . $program->thumbnail) }}">
                <i class="ri-settings-4-line"></i>
            </a>
            <!-- Delete Program Button -->
            <a href="javascript:void(0);" class="link-danger remove-homeprogram" data-id="{{ $program->id }}">
                <i class="ri-delete-bin-5-line"></i>
            </a>
        </div>
    </td>
</tr>
