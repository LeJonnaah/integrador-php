const inputQuantity = document.getElementById('inputQuantity');
const inputCategory = document.getElementById('inputCategory');
const total = document.getElementById('total');
const resumeButton = document.getElementById('resume-button');

const discounts = {
    student: 0.8,
    trainee: 0.5,
    junior: 0.15
};

function calculateTotal() {
    const quantity = inputQuantity.value;
    const discount = discounts[inputCategory.value];
    const price = 200;
    const totalAmount = quantity * price * (1 - discount);
    total.innerHTML = totalAmount.toFixed(2);
}

resumeButton.addEventListener('click', calculateTotal);