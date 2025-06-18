<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>experiment</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">
  <style>
    .card-img-top {
  box-shadow: 5px 0 10px rgba(0, 0, 0, 0.3);
}

/* Left Side Shadow */
.card-img-top {
  box-shadow: -5px 0 10px rgba(0, 0, 0, 0.3);
}

/* Top Side Shadow */
.card-img-top {
  box-shadow: 0 -5px 10px rgba(0, 0, 0, 0.3);
}


/* Bottom Side Shadow */
/* .card-img-top{
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
} */
 .card-img-top {
  filter: drop-shadow(5px 0 10px red) ;
}

/* Left Side Shadow */
.card-img-top {
  filter: drop-shadow(-5px 0 10px red) ;
}

/* Top Side Shadow */
.card-img-top {
  filter: drop-shadow(0 -5px 10px red) ;
}
  </style>
</head>
<body>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Div containing the image -->
        <div class="card shadow-sm">
          <img src="{{ asset('images/doges.png') }}" class="card-img-top img-fluid rounded" alt="Sample Image">
          <div class="card-body text-center">
            <h5 class="card-title">Sample Image</h5>
            <p class="card-text">This image adapts to the div and uses Bootstrap utilities.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
