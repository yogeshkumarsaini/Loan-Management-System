console.log("Loan Management System Loaded");

function confirmDelete(){
    return confirm("Are you sure?");
}

function showToast(message){

    let toast =
    `<div class="toast align-items-center text-bg-success border-0 show position-fixed bottom-0 end-0 m-3">
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
        </div>
    </div>`;

    document.body.insertAdjacentHTML('beforeend', toast);

    setTimeout(() => {
        document.querySelector('.toast').remove();
    }, 3000);
}