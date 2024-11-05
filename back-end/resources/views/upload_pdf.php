<!-- resources/views/pdf-upload.blade.php -->
<form action="{{ route('pdf.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="pdf">PDF Yükle:</label>
    <input type="file" name="pdf" id="pdf" accept="application/pdf" required>
    <button type="submit">PDF Yükle</button>
</form>

@if (session('success'))
    <div>
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div>
        {{ session('error') }}
    </div>
@endif