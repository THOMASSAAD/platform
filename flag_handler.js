document.addEventListener('DOMContentLoaded', function() {
    // Get all submit buttons for each level
    const submitButtons = document.querySelectorAll('.flag-form .submit');
    const hintButtons = document.querySelectorAll('.flag-form .hint');

    // Add event listeners to submit buttons
    submitButtons.forEach((button) => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('.flag-form');
            submitFlag(form);
        });
    });

    // Add event listeners to hint buttons
    hintButtons.forEach((button) => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const form = this.closest('.flag-form');
            showHint(form);
        });
    });

    // Allow Enter key to submit flag
    const flagInputs = document.querySelectorAll('.flag-form input[type="text"]');
    flagInputs.forEach((input) => {
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const form = this.closest('.flag-form');
                submitFlag(form);
            }
        });
    });
});

function submitFlag(form) {
    const flagInput = form.querySelector('input[type="text"]');
    const flagValue = flagInput.value.trim();

    if (!flagValue) {
        showMessage(form, 'Please enter a flag', 'error');
        return;
    }

    // Disable submit button to prevent multiple submissions
    const submitButton = form.querySelector('.submit');
    submitButton.disabled = true;
    submitButton.textContent = 'Submitting...';

    // Send flag to backend
    fetch('submit_flag.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ flag_value: flagValue })
    })
    .then(response => response.json())
    .then(data => {
        submitButton.disabled = false;
        submitButton.textContent = 'Submit';

        if (data.status === 'success') {
            showMessage(form, '✓ Correct! Flag found!', 'success');
            flagInput.value = '';
            
            // Refresh the page after a short delay
            setTimeout(() => {
                location.reload();
            }, 1500);
        } else if (data.status === 'duplicate') {
            showMessage(form, 'You already found this flag!', 'info');
            flagInput.value = '';
        } else if (data.status === 'incorrect') {
            showMessage(form, '✗ Incorrect flag. Try again!', 'error');
            flagInput.value = '';
        } else {
            showMessage(form, data.message || 'An error occurred', 'error');
            submitButton.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage(form, 'An error occurred. Please try again.', 'error');
        submitButton.disabled = false;
        submitButton.textContent = 'Submit';
    });
}

function showHint(form) {
    const level = form.getAttribute('data-level');
    const hintButton = form.querySelector('.hint');
    
    // Disable hint button to prevent multiple clicks
    hintButton.disabled = true;
    hintButton.textContent = '⏳ Loading...';

    // Send request to get a random hint for this level
    fetch('get_hint.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ level: level })
    })
    .then(response => response.json())
    .then(data => {
        hintButton.disabled = false;
        hintButton.textContent = '💡 Hint';

        if (data.status === 'success') {
            showMessage(form, '💡 Hint: ' + data.hint, 'info');
        } else if (data.status === 'no_hints') {
            showMessage(form, data.message, 'info');
        } else if (data.status === 'no_hint') {
            showMessage(form, 'No hint available for this flag', 'info');
        } else {
            showMessage(form, data.message || 'An error occurred', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showMessage(form, 'An error occurred. Please try again.', 'error');
        hintButton.disabled = false;
        hintButton.textContent = '💡 Hint';
    });
}

function showMessage(form, message, type) {
    // Remove existing message if any
    const existingMessage = form.querySelector('.flag-message');
    if (existingMessage) {
        existingMessage.remove();
    }

    // Create message element
    const messageDiv = document.createElement('div');
    messageDiv.className = `flag-message flag-message-${type}`;
    messageDiv.style.cssText = `
        padding: 10px 15px;
        margin-top: 10px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
    `;

    if (type === 'success') {
        messageDiv.style.backgroundColor = '#d4edda';
        messageDiv.style.color = '#155724';
        messageDiv.style.border = '1px solid #c3e6cb';
    } else if (type === 'error') {
        messageDiv.style.backgroundColor = '#f8d7da';
        messageDiv.style.color = '#721c24';
        messageDiv.style.border = '1px solid #f5c6cb';
    } else if (type === 'info') {
        messageDiv.style.backgroundColor = '#d1ecf1';
        messageDiv.style.color = '#0c5460';
        messageDiv.style.border = '1px solid #bee5eb';
    }

    messageDiv.textContent = message;
    form.appendChild(messageDiv);

    // Auto remove message after 5 seconds
    setTimeout(() => {
        messageDiv.remove();
    }, 5000);
}
