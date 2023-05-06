<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Update</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Laravel_Crud</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="/">Home</a>
                    </li>

            </div>
        </div>
    </nav>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block"><strong>{{ $message }}</strong></div>
    @endif

    <div class="container ms-10 mt-1">
        <h3>Fill Details</h3>
        <div class="row justify-contents-center">

            <div class="col-sm-8">
                <div class="card mt-3 p-3">

                    <form method="post" action="/pushUpdate/{{ $userDetail->id }}" enctype="multipart/form-data">

                        @csrf
                        @method('put')
                        <div class="form-group"><label>Name</label>
                            <input name="name" class="form-control" type="text" value={{ $userDetail->Name }}
                                required />
                        </div>
                        <div class="form-group"><label>Description</label>
                            <textarea name="description" class="form-control" type="text" placeholder="Enter Details." rows="3" required>{{ $userDetail->Description }}</textarea>
                        </div>
                        <div class="form-group"><label>Image</label>
                            <input name="image" class="form-control" type="file" />
                            <div class="d-flex flex-row p-2 justify-content-between">
                                <p style="font-size: small">Uploaded Image: {{ $userDetail->Image }}</p>
                                <img src="/photos/{{ $userDetail->Image }}" alt="Uploaded Image" width="100"
                                    height="100" />
                            </div>
                        </div>
                </div>
                <button type="submit" class="btn btn-primary mt-1">Update</button>
                </form>

            </div>
        </div>
    </div>
    </div>



</body>

</html>
