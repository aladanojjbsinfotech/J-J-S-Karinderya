document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('orderForm');
    const message = document.getElementById('orderMessage');

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const name = document.getElementById('custName').value;
            message.textContent = `Salamat, ${name}! Your order has been received.`;
            form.reset();
        });
    }
});