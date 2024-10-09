
<x-form 
    title="Create Blog" 
    action="{{ route('blogs.store') }}" 
    method="POST" 
    enctype="multipart/form-data" 
    buttonText="Create"
>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea name="content" required></textarea>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" name="image">
    </div>
</x-form>

