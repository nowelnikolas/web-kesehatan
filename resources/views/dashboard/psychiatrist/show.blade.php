<!-- resources/views/psychiatrists/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Psikiater</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Psikiater</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($psychiatrists as $psychiatrist)
                    <tr>
                        <td>{{ $psychiatrist->name }}</td>
                        <td>{{ $psychiatrist->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
