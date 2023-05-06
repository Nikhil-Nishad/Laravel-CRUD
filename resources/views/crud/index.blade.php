<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
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
    <br>
    <button type="button" class="btn btn-success ms-2" onclick="window.location.href = '/create'">Insert</button>
    <br>

    <div class="table-container ms-5 mt-3" style="width: 80vw">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($TableData as $item)
                    <tr>
                        <td style="vertical-align: middle;">{{ $loop->index + 1 }}</td>
                        <td style="vertical-align: middle;">{{ $item->Name }}</td>
                        <td style="vertical-align: middle;">{{ $item->Description }}</td>
                        <td>
                            <img src="/photos/{{ $item->Image }}" class="rounded-square" width="50"
                                height="50" />
                        </td>

                        <td style="vertical-align: middle;">
                            <div style="height: 40px;margin-top: 15px;display: flex;">

                                <button type="button" class="btn btn-primary"
                                    onclick="window.location.href = '/edit/{{ $item->id }}' "style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:0.5rem;">Edit</button>
                                <h4>&nbsp;|&nbsp;</h4>
                                <button type="button" class="btn btn-danger"
                                    onclick="window.location.href = '/delete/{{ $item->id }}'"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; margin-bottom:0.5rem;">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
