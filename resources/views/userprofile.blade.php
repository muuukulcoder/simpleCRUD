<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-table {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .table th {
            background-color: #0d6efd;
            color: #fff;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div class="container py-5">



        <div class="row justify-content-center">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show py-2 px-3 small mb-2" role="alert"
                    style="max-width: 400px;">
                    {{ session('success') }}
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <div class="col-md-10">
                <form class="text-start" action="search" method="get" >
                    <input type="text" name="search" value="{{@$search}}"/>
                    <button>Search</button>
                </form>
                <div class="text-end">
                    <a href="{{ URL::to('add') }}" class="btn btn-info btn-sm text-white">+Add New</a>
                </div>
                <div class="profile-table">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $sn = 1; @endphp
                        @foreach ($users as $user)
                            <tbody>
                                <tr>
                                    <td>{{ $sn++ }}</td>
                                    <td class="text-start">{{ $user->name }}</td>
                                    <td class="text-start">{{ $user->email }}</td>
                                    <td class="text-start">{{ $user->mobile }}</td>
                                    <td>
                                        <a href="{{ 'update/' . $user->id }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ 'delete/' . $user->id }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
