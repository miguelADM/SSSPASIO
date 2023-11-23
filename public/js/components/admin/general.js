export function general() {
    function hideAlert() {
        var alertBox = document.getElementById('alertBox');
        if (alertBox) {
            alertBox.style.display = 'none';
        }
    }
    setTimeout(hideAlert, 3000);    
}