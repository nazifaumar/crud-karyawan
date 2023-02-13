<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Data Karyawan</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: dodgerblue; color: white;">
        Data Karyawan
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Tambah Data Karyawan</h3>
            <p class="text-muted">
                Lengkapi formulir di bawah ini untuk menambahkan pengguna baru !
            </p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="{{route('inputCreate')}}" method="POST" style="width: 50vw; min-width: 300px;">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">NIK</label>
                        <input type="number" class="form-control" name="nik" >
                    </div>

                    <div class="col">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan">
                        </div>
    
                        <div class="col">
                            <label class="form-label">Departemen</label>
                            <input type="text" class="form-control" name="departemen">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success">Kirim</button>
                        <a href="/" class="btn btn-danger">Batalkan</a>
                    </div>

            </form>
        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>