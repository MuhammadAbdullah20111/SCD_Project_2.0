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
    <ul class="nav-links">
        <li><a href="{{ route('product.index') }}">All Products</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle">{{ Auth::user()->name }}</a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-btn">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>

    </header>