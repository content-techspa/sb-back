<tr data-category-id="{{ $category->id }}">
    <th scope="row">{{ $category->id }}</th>
    <td>{{ $category->name }}</td>
    <td>
        <img src="{{ asset('storage/' . $category->cover_image) }}" alt="Cover Image" style="width: 60px; height: auto;">
    </td>
    <td>{{ $category->created_at->format('d, M Y') }}</td>
    <td>
        <div class="hstack gap-3 fs-15">
            <!-- Edit Category Button -->
            <a href="javascript:void(0);" class="link-primary edit-category"
               data-id="{{ $category->id }}"
               data-name="{{ $category->name }}"
               data-cover_image="{{ asset('storage/' . $category->cover_image) }}">
                <i class="ri-settings-4-line"></i>
            </a>
            <!-- Upload Images Link -->
            <a href="{{ route('administration.galleryimage.index', $category->id) }}" class="link-info" title="Upload Images">
                <i class="ri-upload-cloud-line"></i>
            </a>
            <!-- Delete Category Button -->
            <a href="javascript:void(0);" class="link-danger remove-category" data-id="{{ $category->id }}">
                <i class="ri-delete-bin-5-line"></i>
            </a>
        </div>
    </td>
</tr>
