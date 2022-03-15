<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>CRUD - API</title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <a href="{{ route('users.index') }}" class="text-light text-decoration-none">
                        <button type="button" class="btn btn-danger mb-5 text-light"><i class="fa-solid fa-angles-left"></i></button>
                    </a>
                    <form action="{{ route('users.update', $user['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_depan">Nama Depan</label>
                            <input type="text" class="form-control @error('firstName') is-invalid @enderror" value="{{ old('nama_depan', $user['firstName']) }}" id="nama_depan" name="nama_depan">
                            @error('firstName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_belakang">Nama Belakang</label>
                            <input type="text" class="form-control @error('lastName') is-invalid @enderror" value="{{ old('nama_belakang', $user['lastName']) }}" id="nama_belakang" name="nama_belakang">
                            @error('lastName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>