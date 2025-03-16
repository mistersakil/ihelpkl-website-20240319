/* Import sweetalert2 */
import Swal from "sweetalert2";
window.Swal = Swal;

const Toast = Swal.mixin({
    toast: true,
    position: "bottom-left",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    showCloseButton: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

window.Toast = Toast;

window.addEventListener('toastAlert', event => {
    event.preventDefault();
    Toast.fire({
        icon: event.detail.type,
        title: event.detail.message,
    });
})

window.addEventListener('sweetAlert', event => {
    event.preventDefault();
    Swal.fire({
        icon: event.detail.type,
        title: event.detail.title,
        text: event.detail.message,
    });
})
