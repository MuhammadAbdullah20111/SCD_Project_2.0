<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
   @include('partials.header')
   <div>
    @yield('content')
    </div>
    @include('partials.footer')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        function fetchFilteredProducts() {
            const query = $('#searchInput').val();
            const brand = $('#brandFilter').val();

            $.ajax({
                url: '{{ route("products.filter") }}', // Replace with your route name
                method: 'GET',
                data: {
                    q: query,
                    brand: brand
                },
                success: function (response) {
                    $('#productGrid').html(response.html); // Replace content with new products
                },
                error: function () {
                    alert('An error occurred while fetching products.');
                }
            });
        }

        $('#searchInput').on('input', fetchFilteredProducts);
        $('#brandFilter').on('change', fetchFilteredProducts);
    });
</script>

 </body>
</html>
