
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

