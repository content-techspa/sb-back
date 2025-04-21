<tr data-contact-id="{{ $contact->id }}">
    <th scope="row">{{ $contact->id }}</th>
    <td>{{ $contact->name }}</td>
    <td>{{ $contact->email }}</td>
    <td>{{ $contact->phone }}</td>
    <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
    <td>{{ $contact->created_at->format('d, M Y') }}</td>
    <td>
        <div class="hstack gap-3 fs-15">
            <!-- Delete Contact Button -->
            <a href="javascript:void(0);" class="link-danger remove-contact" data-id="{{ $contact->id }}">
                <i class="ri-delete-bin-5-line"></i>
            </a>
        </div>
    </td>
</tr>
