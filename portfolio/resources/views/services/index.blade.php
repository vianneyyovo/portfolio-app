@foreach ($services as $service)
    <div>
        <h3>{{ $service->name }}</h3>
        <p>{{ $service->description }}</p>
        <img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->name }}">
        <a href="{{ route('services.edit', $service->id) }}">Edit</a>
        <form action="{{ route('services.destroy', $service->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
