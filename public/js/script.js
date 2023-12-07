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

document.getElementById('logout-link').addEventListener('click', function() {
    // Buat elemen formulir baru
    var form = document.createElement('form');
    form.action = "{{ route('auth.logout') }}";
    form.method = 'POST';
    document.body.appendChild(form);

    // Tambahkan token CSRF ke formulir
    var csrfToken = document.createElement('input');
    csrfToken.type = 'hidden';
    csrfToken.name = '_token';
    csrfToken.value = "{{ csrf_token() }}";
    form.appendChild(csrfToken);

    // Kirim formulir
    form.submit();
});