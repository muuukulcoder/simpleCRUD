<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple User Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">


                <h3 class="text-center mb-4">Edit Student Details</h3>

                <form action="/update-student/{{ $data->id }}" method="POST"
                    class="border border-primary rounded p-5">
                    @csrf
                    <input type="hidden" name="_method" value="put" />
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            value="{{ $data->name }}" placeholder="Enter your name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email"
                            value="{{ $data->email }}" placeholder="Enter your email" required>
                    </div>

                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="tel" name="mobile" class="form-control" id="mobile"
                            value="{{ $data->mobile }}" placeholder="Enter mobile number" maxlength="10"
                            pattern="[0-9]{10}" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <div class="d-grid text-center mt-4">
                        <a href="{{ URL::to('userprofile') }}">Back</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
