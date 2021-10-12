let displayToastInfo = (message, type) => {
    let bgColor;

    if (type === "success") {
        bgColor = "#198754"
    }
    else if (type === "info") {
        
    } else {
        bgColor = "#0dcaf0"
    }

    Toastify({
        text: message,
        // duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        backgroundColor: bgColor,
    }).showToast();
};
