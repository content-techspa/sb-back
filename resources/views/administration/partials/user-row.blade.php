<tr data-user-id="{{ $user->id }}">
    <th scope="row">{{ $user->id }}</th>
    <td>{{ $user->name }}</td>
    <td>{{ ucfirst($user->user_type) }}</td>
    <td>{{ $user->created_at->format('d, M Y') }}</td>
    <td>
        <span class="badge text-success bg-success-subtle">Active</span>
    </td>
    <td>
        <div class="hstack gap-3 fs-15">
            <!-- Edit button with data attributes -->
            <a href="javascript:void(0);" class="link-primary edit-user"
               data-id="{{ $user->id }}"
               data-name="{{ $user->name }}"
               data-email="{{ $user->email }}"
               data-phone="{{ $user->phone }}"
               data-user_type="{{ $user->user_type }}"
               data-image="{{ $user->image ? asset($user->image) : asset('assets/images/users/user-dummy-img.jpg') }}">
                <i class="ri-settings-4-line"></i>
            </a>
            <!-- Delete button -->
            <a href="javascript:void(0);" class="link-danger remove-user" data-id="{{ $user->id }}">
                <i class="ri-delete-bin-5-line"></i>
            </a>
        </div>
    </td>
</tr>
