<h1>{{ $service->name }}</h1>
<p>{{ $service->description }}</p>
<img src="{{ asset('storage/' . $service->image_path) }}" alt="{{ $service->name }}">