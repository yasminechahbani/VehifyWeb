let video = document.getElementById('video');
let canvas = document.getElementById('canvas');
let context = canvas.getContext('2d');
let captureButton = document.getElementById('captureButton');
let loginButton = document.getElementById('loginButton');
let registerButton = document.getElementById('registerButton');
let statusDiv = document.getElementById('status');

// Start video stream
navigator.mediaDevices.getUserMedia({ video: true })
    .then(function(stream) {
        video.srcObject = stream;
    })
    .catch(function(err) {
        console.error("Error accessing camera:", err);
        showStatus("Error accessing camera", "danger");
    });

// Capture image from video
function captureImage() {
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    return canvas.toDataURL('image/jpeg');
}

// Show status messages
function showStatus(message, type) {
    statusDiv.className = `alert alert-${type}`;
    statusDiv.textContent = message;
    statusDiv.style.display = 'block';
}

// Handle login attempt
loginButton.addEventListener('click', function() {
    const imageData = captureImage();
    
    fetch('/face-verify', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ image: imageData })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showStatus("Face verification successful!", "success");
            // Redirect to dashboard or home page
            window.location.href = '/welcome';
        } else {
            showStatus("Face verification failed. Please try again.", "danger");
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showStatus("Error during face verification", "danger");
    });
});

// Handle face capture
captureButton.addEventListener('click', function() {
    captureImage();
    showStatus("Face captured! You can now try to login.", "info");
});

// Handle face registration
registerButton.addEventListener('click', function() {
    const modal = new bootstrap.Modal(document.getElementById('registerModal'));
    modal.show();
});

// Handle registration save
document.getElementById('saveRegister').addEventListener('click', function() {
    const imageData = captureImage();
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;

    fetch('/register-face', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            image: imageData,
            username: username,
            email: email
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showStatus("Face registered successfully!", "success");
            bootstrap.Modal.getInstance(document.getElementById('registerModal')).hide();
        } else {
            showStatus("Face registration failed. Please try again.", "danger");
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showStatus("Error during face registration", "danger");
    });
});