function updatePrice(select) {
    const price = select.options[select.selectedIndex].getAttribute("data-price");
    const row = select.parentNode.parentNode;
    row.querySelector("[name='price[]']").value = price;
    calculateSubtotal(row.querySelector("[name='qty[]']"));
}

function calculateSubtotal(input) {
    const row = input.parentNode.parentNode;
    const qty = parseFloat(row.querySelector("[name='qty[]']").value || 0);
    const price = parseFloat(row.querySelector("[name='price[]']").value || 0);
    const discount = parseFloat(row.querySelector("[name='discount[]']").value || 0);
    const subtotal = qty * price * ((100 - discount) / 100);
    row.querySelector("[name='subtotal[]']").value = subtotal.toFixed(2);
    calculateTotal();
}

function calculateTotal() {
    let total = 0;
    document.querySelectorAll("[name='subtotal[]']").forEach(function(subtotal) {
        total += parseFloat(subtotal.value || 0);
    });
    document.getElementById("total").value = total.toFixed(2);
}

function addRow() {
    const table = document.querySelector("table");
    const newRow = table.rows[1].cloneNode(true);
    newRow.querySelector("[name='qty[]']").value = ""; 
    newRow.querySelector("[name='price[]']").value = ""; 
    newRow.querySelector("[name='discount[]']").value = "0"; 
    newRow.querySelector("[name='subtotal[]']").value = ""; 
    table.appendChild(newRow);
}