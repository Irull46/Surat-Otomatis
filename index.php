<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Otomatis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container col-lg-5">
        <div class="card mt-4">
            <form action="proses.php" method="post">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label for="">Nomor Surat</label>
                        <input type="text" name="nomorsurat" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Dasar</label><br>
                        <textarea name="dasar" rows="4" cols="83" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Untuk</label><br>
                        <textarea name="untuk" rows="4" cols="83" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="">Pada tanggal</label>
                        <input type="date" name="tanggal" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>