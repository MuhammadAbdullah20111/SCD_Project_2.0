<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css"> <!-- Link to your CSS file -->
</head>
<body>
    <header>
        <div class="logo">
            <h1>Admin Panel</h1>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('product.index')}}">All Product</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
    </header>