<html>

<head>
    <title>Buku Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm py-4 px-5">
        <h3>Form Buku Tamu</h3>
        <form action="proses.php" method="post" class="my-5">
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" placeholder="Masukkan nama anda" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Masukkan email anda" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Komentar</label>
                <textarea name="komentar" class="form-control" rows="3" placeholder="Tulis komentar anda..." required></textarea>
            </div>

            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            <input type="reset" value="Reset" name="reset" class="btn btn-danger">
        </form>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>