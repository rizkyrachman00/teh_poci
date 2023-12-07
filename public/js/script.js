function tambahQuantity(productId) {
    var inputQuantity = document.getElementById('quantity' + productId);
    inputQuantity.value = parseInt(inputQuantity.value || 0) + 1;
}

function kurangQuantity(productId) {
    var inputQuantity = document.getElementById('quantity' + productId);
    if (parseInt(inputQuantity.value) > 0) {
        inputQuantity.value = parseInt(inputQuantity.value) - 1;
    }
}