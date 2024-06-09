<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            background: url('/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }

        .container {
            max-width: 600px;
            background: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
        }

        h2,
        p,
        label,
        .btn {
            color: white;
        }

        .table {
            color: white;
        }

        .table td,
        .table th {
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uuid/8.3.2/uuid.min.js"></script>

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert').fadeOut('slow');
            }, 2000);
        });
    </script>
</body>

</html>