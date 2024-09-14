document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent page reload

    const formData = new FormData(this);
    const submitButton = document.getElementById('submitButton');
    const formMessage = document.getElementById('formMessage');

    // Log form data for debugging
    console.log("Form submitted!");
    console.log([...formData.entries()]);

    // Disable the button to prevent multiple submissions
    submitButton.disabled = true;
    formMessage.innerHTML = "Sending...";

    // Send the form data using fetch API
    fetch('contact.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log("Response received:", data); // Log server response for debugging
        formMessage.innerHTML = data;
        submitButton.disabled = false; // Re-enable the button
    })
    .catch(error => {
        console.error("Error:", error); // Log error for debugging
        formMessage.innerHTML = "There was an error sending your message. Please try again.";
        submitButton.disabled = false;
    });
});
