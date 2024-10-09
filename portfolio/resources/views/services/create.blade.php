<form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Service Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="image">Service Image</label>
        <input type="file" name="image" id="image" required>
    </div>
    <button type="submit">Submit</button>
</form>
