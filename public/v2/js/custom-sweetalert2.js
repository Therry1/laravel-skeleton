
function showCustomSweetAlert(message, type='info', delai= 3000){

    Swal.fire({
        position: 'bottom-end',
        title: 'Error!',
        text: message,
        icon: type,
        showConfirmButton: false,
        timer: delai,
        customClass: {
            confirmButton: 'btn btn-primary'
        },
        buttonsStyling: false,
        showClass: {
            popup: 'animate__animated animate__shakeX'
        }
    })
}
