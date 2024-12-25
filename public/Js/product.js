$(document).ready(function () {
    // Function to filter products based on search input and brand filter
    function filterProducts() {
        const query = $('#searchInput').val().trim(); // Get the search query from input and trim whitespace
        const brand = $('#brandFilter').val(); // Get the selected brand from the dropdown

        $.ajax({
            url: "{{ route('products.search') }}",  // Send request to the search route
            method: 'GET',
            data: {
                q: query,  // Pass the search query
                brand: brand  // Pass the selected brand
            },
            success: function (data) {
                // Empty the product grid
                $('#productGrid').empty();

                if (data.length > 0) {
                    // Loop through the returned products and append to the grid
                    data.forEach(product => {
                        const brandClass = product.brand ? product.brand.toLowerCase() : 'unknown';
                        const productImage = product.picture ? '/storage/' + product.picture : '/images/placeholder.png';

                        $('#productGrid').append(`
                            <div class="col-md-4 col-sm-6 product-card mb-4" data-brand="${brandClass}">
                                <div class="card h-100 shadow-sm">
                                    <img src="${productImage}" class="card-img-top img-fluid" alt="${product.product_name}">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">${product.product_name}</h5>
                                        <p class="card-text">$${parseFloat(product.price).toFixed(2)}</p>
                                        <div class="mt-auto">
                                            <a href="/product/${product.id}" class="btn btn-primary btn-sm mt-2">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `);
                    });
                } else {
                    // If no results, display a message
                    $('#productGrid').html('<p>No products found.</p>');
                }
            },
            error: function () {
                // If there's an error in the AJAX request
                $('#productGrid').html('<p>Error loading products.</p>');
            }
        });
    }

    // Trigger the filterProducts function when the user types in the search input
    $('#searchInput').on('input', debounce(filterProducts, 500));

    // Trigger the filterProducts function when the user changes the brand filter
    $('#brandFilter').on('change', filterProducts);
});

// Debounce function to prevent excessive AJAX requests
function debounce(func, wait) {
    let timeout;
    return function() {
        const context = this, args = arguments;
        clearTimeout(timeout);
        timeout = setTimeout(() => {
            func.apply(context, args);
        }, wait);
    };
}