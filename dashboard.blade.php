<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #8360c3, #2ebf91);
            color: white;
        }
        .card {
            background-color: rgba(255,255,255,0.1);
            border: none;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-4">👑 Welcome, Admin!</h1>
        <p class="lead">You have successfully accessed the protected Admin Dashboard.</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4 text-center">
                <h3>Admin Controls</h3>
                <p>Manage users, settings, reports & more</p>
                <button class="btn btn-light">Go to Settings</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
