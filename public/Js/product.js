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