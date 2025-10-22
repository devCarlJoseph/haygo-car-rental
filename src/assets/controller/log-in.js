
const tabSignIn = document.getElementById('tab-signin');
const tabSignUp = document.getElementById('tab-signup');
const contentSignIn = document.getElementById('content-signin');
const contentSignUp = document.getElementById('content-signup');
const contentForgot = document.getElementById('content-forgot');
const messageArea = document.getElementById('messageArea');

/**
 * Toggles the active authentication form (Sign In, Sign Up, Forgot Password).
 * @param {string} mode - 'signin', 'signup', or 'forgot'
*/
function setAuthMode(mode) {
    // 1. Reset all tabs/contents
    [tabSignIn, tabSignUp].forEach(tab => tab.classList.remove('active'));
    [contentSignIn, contentSignUp, contentForgot].forEach(content => content.classList.remove('active'));
    messageArea.classList.add('d-none'); // Bootstrap utility for hidden

    // 2. Activate the selected mode
    if (mode === 'signin') {
        tabSignIn.classList.add('active');
    } else if (mode === 'signup') {
        tabSignUp.classList.add('active');
    } else if (mode === 'forgot') {
        // Keep Sign In tab active to suggest returning
        tabSignIn.classList.add('active');
    }
    // Use querySelector for robustness and set 'active'
    document.getElementById(`content-${mode}`).classList.add('active');
}

/**
 * Displays a temporary message in the dedicated message area.
 * @param {string} message
* @param {string} type - 'success', 'error', 'info'
*/
function displayMessage(message, type) {
    messageArea.textContent = message;
    // Remove all specific classes first
    messageArea.classList.remove('d-none', 'alert-danger', 'alert-success', 'alert-info');

    // Add Bootstrap alert classes based on type
    if (type === 'success') {
        messageArea.classList.add('alert-success');
    } else if (type === 'error') {
        messageArea.classList.add('alert-danger');
    } else { // info
        messageArea.classList.add('alert-info');
    }
    messageArea.classList.remove('d-none'); // Show the message area
}

// --- Mock Form Submission Handlers ---

document.getElementById('signInForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('signin-email').value;
    displayMessage(`Signing in user: ${email}... (Simulated Success!)`, 'success');
});

document.getElementById('signUpForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('signup-email').value;
    displayMessage(`Registering new user: ${email}... (Simulated Success!)`, 'success');
});

document.getElementById('forgotForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('forgot-username').value;
    const newPassword = document.getElementById('forgot-password').value;

    // Check for simple client-side validation
    if (!username || newPassword.length < 6) {
        displayMessage(`Error: Please enter a username and a password of at least 6 characters.`, 'error');
        return;
    }

    // Simulated Success Message
    displayMessage(`Password for user '${username}' has been updated. (Simulated Success!)`, 'success');
});

// Set initial mode on load
setAuthMode('signin');
