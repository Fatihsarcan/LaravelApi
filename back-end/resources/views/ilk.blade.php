<!DOCTYPE html>
<html>
<head>
    <title>PDF Yükleme</title>
</head>
<body>
    <form action="{{ route('upload.pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="pdf">PDF Dosyasını Seçin:</label>
        <input type="file" name="pdf" id="pdf" required>
        <button type="submit">Yükle ve Gönder</button>
    </form>
</body>
</html>
