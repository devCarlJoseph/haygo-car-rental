// --- Placeholder Search Functionality ---
const searchInput = document.getElementById('searchFaq');
const faqItems = document.querySelectorAll('.faq-item');

searchInput.addEventListener('keyup', function () {
    const filter = searchInput.value.toLowerCase();

    faqItems.forEach(item => {
        const header = item.querySelector('.accordion-button').textContent.toLowerCase();
        const body = item.querySelector('.accordion-body').textContent.toLowerCase();

        // Check if the search term exists in the header or the body
        if (header.includes(filter) || body.includes(filter)) {
            item.style.display = 'block'; // Show the item
        } else {
            item.style.display = 'none'; // Hide the item
        }
    });
});

// --- Chatbot Logic ---
const chatModalEl = document.getElementById('chatModal');
const chatMessages = document.getElementById('chatMessages');
const chatForm = document.getElementById('chatForm');
const chatInput = document.getElementById('chatInput');

const BOT_RESPONSES = {
    START: "Welcome to Hay Go Support! I can help you find quick answers in our FAQ. Try typing: <strong>Booking</strong>, <strong>Fees</strong>, or <strong>Agent</strong>.",
    BOOKING: "For booking help, please check the '1. Booking & Reservation' section in our FAQ above. If you still need clarification, reply with <strong>Agent</strong> to connect with a human.",
    FEES: "Common fee questions (deposits, fuel policy) are answered in the '3. Payments & Fees' section. Reply with <strong>Agent</strong> for direct human support.",
    AGENT: "I've notified a support agent. Please wait, or in the meantime, you can call us directly at <strong>+63 2 8555 1234</strong>. Thank you for your patience!",
    DEFAULT: "I don't understand that command. Please type <strong>Booking</strong>, <strong>Fees</strong>, or <strong>Agent</strong> to continue."
};

/**
 * Appends a message bubble to the chat window.
 * @param {string} text - The message content (HTML is safe here).
 * @param {string} sender - 'bot' or 'user'.
 */
function appendMessage(text, sender) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('message-bubble');

    if (sender === 'bot') {
        messageElement.classList.add('bot-message');
        messageElement.classList.add('shadow-sm');
    } else {
        messageElement.classList.add('user-message');
        messageElement.classList.add('shadow-sm');
    }

    messageElement.innerHTML = text;
    chatMessages.appendChild(messageElement);

    // Scroll to the bottom of the chat window
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

/** Initializes chat when the modal opens. */
chatModalEl.addEventListener('shown.bs.modal', function () {
    // Clear and add initial message
    chatMessages.innerHTML = '';
    appendMessage(BOT_RESPONSES.START, 'bot');
    chatInput.focus();
});

/** Handles sending the user message and getting a bot response. */
chatForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const input = chatInput.value.trim();

    if (input === '') return;

    // 1. Display user message
    appendMessage(input, 'user');
    chatInput.value = ''; // Clear input field

    // 2. Get and display bot response (after a short delay for realism)
    const cleanedInput = input.toLowerCase();
    let botResponse = BOT_RESPONSES.DEFAULT;

    if (cleanedInput.includes('booking')) {
        botResponse = BOT_RESPONSES.BOOKING;
    } else if (cleanedInput.includes('fees') || cleanedInput.includes('payment') || cleanedInput.includes('deposit')) {
        botResponse = BOT_RESPONSES.FEES;
    } else if (cleanedInput.includes('agent') || cleanedInput.includes('human') || cleanedInput.includes('talk')) {
        botResponse = BOT_RESPONSES.AGENT;
    }

    // Simulate typing delay
    setTimeout(() => {
        appendMessage(botResponse, 'bot');
    }, 500);
});