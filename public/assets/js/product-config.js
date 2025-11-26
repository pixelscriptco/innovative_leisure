$(document).ready(function () {
    getCartCount();
});

function getCartCount() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let uniqueCount = cart.length;
    $(document).find('.cart-product-count').text(uniqueCount);
}

$('.add-cart').on('click', function (e) {
    e.preventDefault();

    let productId = $(this).attr('data-id');
    let productName = $(`.product-name-${productId}`).text();
    let price = $(`.product-price-${productId}`).text();
    let imgUrl = $(`.product-img-${productId}`).attr('src');

    let unitPrice = parseFloat(price.replace(/,/g, ''));

    let newItem = {
        id: productId,
        name: productName,
        price: unitPrice,
        imgUrl: imgUrl,
        qty: 1
    };

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let existingItem = cart.find(item => item.id === productId);
    if (existingItem) {
        existingItem.qty += 1;
    } else {
        cart.push(newItem);
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    getCartCount();
});

$('.module-icon').on('click', function () {
    if ($('.module-cart').hasClass('module-active')) {
        loadCartItems();
    } else {
        console.log('Not active');
    }
});

function loadCartItems() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    let html = '';
    let subtotal = 0;

    cart.forEach(item => {

        let itemTotal = item.price * item.qty;
        subtotal += itemTotal;

        html += `
            <li>
                <img class="img-fluid" src="${item.imgUrl}" alt="product"/>
                <div class="product-meta">
                    <h5 class="product-title">${item.name}</h5>
                    <small class="product-price color-gold">${item.qty} x AED ${item.price}</small>
                </div>
                <a class="cart-cancel" href="javascript:void(0)" data-id="${item.id}">cancel</a>
            </li>
        `;
    });

    $(document).find('.cart-overview ul').html(html);
    $('.cart-total .cart-total-price').text(`AED ${subtotal.toFixed(2)}`);
}

$(document).on('click', '.cart-cancel', function (e) {
    e.preventDefault();

    let id = $(this).data('id');
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let updatedCart = cart.filter(item => item.id != id);
    localStorage.setItem('cart', JSON.stringify(updatedCart));
    loadCartItems();
    getCartCount();
});
