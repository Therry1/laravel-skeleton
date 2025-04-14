
function showToast(message, type = 'info', delai=5000){
    $.toast({
        text: message,
        position: 'bottom-right',
        icon: type,
        stack: false,
        showHideTransition: 'slide',
        hideAfter: delai
    })
}
