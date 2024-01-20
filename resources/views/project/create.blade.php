<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="antialiased">

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <a href="{{ route('project.index') }}" class="btn btn-primary">Project List</a>
            </div>
            <div class="col-12 my-5">
                <p>Time Frame: Project Assigned (Before 2023-07-20) And Payment Released (From 2023-06-21 to 2023-07-30)
                </p>
            </div>
            <div class="col-12">
                <form action="{{ route('project.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Project Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Project Name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount"
                            placeholder="Enter Project Amount" required>
                    </div>
                    <div class="mb-3">
                        <label for="project_start_date" class="form-label">Project Start Date</label>
                        <input type="date" class="form-control" id="project_start_date" name="project_start_date"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="payment_released_date" class="form-label">Payment Released Date</label>
                        <input type="date" class="form-control" id="payment_released_date" name="payment_released_date"
                            required>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>