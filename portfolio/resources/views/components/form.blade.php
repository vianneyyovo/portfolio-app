<div class="form-container">
    <h1>{{ $title }}</h1>
    <form action="{{ $action }}" method="{{ $method }}" enctype="{{ $enctype }}">
        @csrf
        {{ $slot }}
        <button type="submit">{{ $buttonText }}</button>
    </form>
</div>
