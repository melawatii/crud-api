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
                    <a href="{{ route('users.create') }}" class="text-light text-decoration-none">
                        <button type="button" class="btn btn-success mb-3 text-light"><i class="fa-solid fa-user-plus"></i></button>
                    </a>
                    @if(session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $number = 1;
                            @endphp
                            @forelse($users['data'] as $user)
                            <tr>
                                <td scope="row">{{ $number++ }}</td>
                                <td>{{ $user['firstName'] }}</td>
                                <td>{{ $user['lastName'] }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user['id']) }}" class="btn btn-info text-light text-decoration-none"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form class="d-inline-block" action="{{ route('users.destroy', $user['id']) }}" method="POST" onsubmit="return confirm('Are you sure to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning text-light"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </td>

                            </tr>
                            @empty
                                <tr><td colspan="4" align="center">No Record(s) Found!</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>