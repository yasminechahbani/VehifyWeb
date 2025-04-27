document.addEventListener('DOMContentLoaded', function() {
    const userSelector = document.querySelector('.user-selector');
    const permisFieldContainers = document.querySelectorAll('.permis-field-container');
    const hasPassedQuizField = document.querySelector('input[name="permis[has_passed_quiz]"]');
    //const submitButton = document.querySelector('button[type="submit"]');
    const permisForm = document.getElementById('permis-form');
    const submitButton = permisForm ? permisForm.querySelector('button[type="submit"]') : null;
    const quizMessageContainer = document.getElementById('quiz-message-container');

    console.log('JS initialized'); // Debug
    console.log('Found permis fields:', permisFieldContainers.length); // Debug

    // Immediately hide all permis fields on page load
    permisFieldContainers.forEach(container => {
        container.style.display = 'none';
    });

    if (submitButton) {
        submitButton.disabled = false;
    }

    // Function to toggle visibility of permis fields
    function togglePermisFields(hasPassedQuiz) {
        console.log('Toggling fields:', hasPassedQuiz); // Debug

        // Remove any existing message
        if (quizMessageContainer) {
            quizMessageContainer.innerHTML = '';
        }

        if (hasPassedQuiz === 'true') {
            // Show all permis fields
            permisFieldContainers.forEach(container => {
                container.style.display = 'block';
            });

            // Enable submit button
            if (submitButton) {
                submitButton.disabled = false;
            }
        } else {
            // Hide all permis fields
            permisFieldContainers.forEach(container => {
                container.style.display = 'none';
            });

            // Keep submit button enabled
            if (submitButton) {
                submitButton.disabled = false;
            }

            // Add message when user hasn't passed quiz
            if (userSelector && userSelector.value && quizMessageContainer) {
                const message = document.createElement('div');
                message.className = 'alert alert-warning mt-2';
                message.innerHTML = '<i class="fa fa-exclamation-triangle me-2"></i>This user hasn\'t passed the required test. A license cannot be created until they pass the test.';
                quizMessageContainer.appendChild(message);
            }
        }
    }

    // Initial setup - hide permis fields
    togglePermisFields('false');

    // Check user when selected
    if (userSelector) {
        userSelector.addEventListener('change', function() {
            console.log('User selected:', this.value); // Debug

            if (!this.value) {
                togglePermisFields('false');
                return;
            }

            // Show loading indicator
            if (quizMessageContainer) {
                quizMessageContainer.innerHTML = '<div class="text-center my-2"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
            }
            //fetch(`/check-user-quiz/${this.value}`)
            // AJAX request to check if user has passed quiz
            fetch(`/permis/check-user-quiz/${this.value}`)
                .then(response => {
                    console.log('Response status:', response.status); // Debug
                    return response.json();
                })
                .then(data => {
                    console.log('Response data:', data); // Debug
                    if (hasPassedQuizField) {
                        hasPassedQuizField.value = data.hasPassedQuiz ? 'true' : 'false';
                    }
                    togglePermisFields(data.hasPassedQuiz ? 'true' : 'false');
                })
                .catch(error => {
                    console.error('Error checking user quiz:', error);
                    togglePermisFields('false');

                    // Show error message
                    if (quizMessageContainer) {
                        quizMessageContainer.innerHTML = '<div class="alert alert-danger mt-2"><i class="fa fa-times-circle me-2"></i>Error checking quiz status. Please try again.</div>';
                    }
                });
        });
    }

    // Also check the status when form loads (for edit mode)
    if (hasPassedQuizField && hasPassedQuizField.value === 'true') {
        togglePermisFields('true');
    } else {
        togglePermisFields('false');
    }
});