import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
});



// window.Echo.channel("form-submissions")
//     .listen(".newSubmission", (event) => {
//         console.log("New Submission Event Received:", event);

//         let submissionCount = document.getElementById("submission-count");

//         if (submissionCount) {
//             let currentCount = parseInt(submissionCount.textContent);

//             submissionCount.textContent = currentCount + 1;
//         }
//     });

// Livewire.on('form-submitted', () => {
//     console.log('Form Submitted');

//     let submissionCount = document.getElementById('submission-count');
//     if (submissionCount) {
//         let currentCount = parseInt(submissionCount.textContent);
//         submissionCount.textContent = currentCount + 1;
//     }
// });
