<tr data-enquiry-id="{{ $enquiry->id }}">
    <th scope="row">{{ $enquiry->id }}</th>
    <td>{{ $enquiry->first_name }}</td>
    <td>{{ $enquiry->last_name }}</td>
    <td>{{ $enquiry->email }}</td>
    <td>{{ $enquiry->phone }}</td>
    <td>{{ $enquiry->interested_program }}</td>
    <td>{{ \Illuminate\Support\Str::limit($enquiry->message, 50) }}</td>
    <td>{{ $enquiry->created_at->format('d, M Y') }}</td>
    <td>
        <div class="hstack gap-3 fs-15">
            <!-- Delete Enquiry Button -->
            <a href="javascript:void(0);" class="link-danger remove-enquiry" data-id="{{ $enquiry->id }}">
                <i class="ri-delete-bin-5-line"></i>
            </a>
        </div>
    </td>
</tr>
