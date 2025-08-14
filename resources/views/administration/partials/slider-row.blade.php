<tr data-slider-id="{{ $slider->id }}">
    <td>{{ $slider->id }}</td>
    <td style="max-width: 100px; white-space: normal;">{!! $slider->title !!}</td>
    <td style="max-width: 150px; white-space: normal;">{!! $slider->description !!}</td>
    <td>
        <img src="{{ asset('storage/' . $slider->image) }}" alt="Slider Image" class="img-thumbnail" style="max-width: 100px;">
    </td>
    <td>
        <button type="button" class="btn btn-secondary btn-sm edit-slider"
            data-id="{{ $slider->id }}"
            data-title="{{ $slider->title }}"
            data-description="{{ $slider->description }}"
            data-button_text="{{ $slider->button_text }}"
            data-button_link="{{ $slider->button_link }}"
            data-image="{{ asset('storage/' . $slider->image) }}"
            data-image_alt="{{ $slider->image_alt }}"
        >Edit</button>
    </td>
</tr>
