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
    START: "Welcome to Hay Go Support! I can help you find quick answers in our FAQ. Try typing: <strong>Booking</strong>, <strong>Fees</strong>, <strong>Agent</strong>, <strong>Requirements</strong>, <strong>Reservations</strong>, <strong>Deposits</strong>, <strong>Cancellations</strong>, <strong>Limits</strong>, <strong>Extensions</strong>, <strong>Features</strong>, <strong>Services</strong>, <strong>Rules</strong>, <strong>Privacy</strong>, or <strong>Security</strong>.",
    BOOKING: "For booking help, please check the '1. Booking & Reservation' section in our FAQ above. If you still need clarification, reply with <strong>Agent</strong> to connect with a human.",
    FEES: "Common fee questions (deposits, fuel policy) are answered in the '3. Payments & Fees' section. Reply with <strong>Agent</strong> for direct human support.",
    AGENT: "I've notified a support agent. Please wait, or in the meantime, you can call us directly at <strong>+63 2 8555 1234</strong>. Thank you for your patience!",
    DEFAULT: "I don't understand that command. Please type <strong>Booking</strong>, <strong>Fees</strong>, or <strong>Agent</strong> to continue.",
    REQUIREMENTS: "Please ensure you have a valid driver's license, a credit card for the deposit, and are at least 21 years old to rent a vehicle with us. For more details, refer to our FAQ section on requirements. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    RESERVATIONS: "You can make a reservation through our website or by calling our customer service. We recommend booking at least 48 hours in advance to ensure availability.  For further assistance, type <strong>Agent</strong> to speak with a representative.",
    DEPOSITS: "A refundable deposit is required at the time of rental. The amount varies depending on the vehicle type. Please refer to our 'Payments & Fees' section for specific details. For further assistance, type <strong>Agent</strong> to speak with a representative.",  
    CANCELLATIONS: "Cancellations can be made up to 24 hours before your scheduled pick-up time without any fees. For more information, please see our 'Booking & Reservation' FAQ section. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    LIMITS: "Our rental vehicles have mileage limits based on the rental package you choose. Please check the 'Terms & Conditions' section in our FAQ for detailed information on mileage policies. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    EXTENSIONS: "If you need to extend your rental period, please contact our customer service at least 24 hours before your original return time. Additional fees may apply based on the extension duration.  For further assistance, type <strong>Agent</strong> to speak with a representative.",
    FEATURES: "Our vehicles come equipped with various features such as GPS, child seats, and insurance options. Please refer to the 'Vehicle Features & Options' section in our FAQ for more details. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    SERVICES: "We offer a range of services including roadside assistance, vehicle delivery, and 24/7 customer support. For more information, please check the 'Services & Support' section in our FAQ. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    RULES: "All renters must adhere to our rental policies, including age requirements, driving history, and prohibited uses of the vehicle. Please review the 'Rental Policies & Rules' section in our FAQ for complete details.  For further assistance, type <strong>Agent</strong> to speak with a representative.",
    PRIVACY: "We take your privacy seriously. Please read our 'Privacy Policy' section in the FAQ to understand how we collect, use, and protect your personal information. For further assistance, type <strong>Agent</strong> to speak with a representative.",
    SECURITY: "Your security is our priority. We implement various measures to ensure your data and transactions are safe. For more information, please refer to the 'Security & Data Protection' section in our FAQ.  For further assistance, type <strong>Agent</strong> to speak with a representative.",
    HELLO: "Hello! How can I assist you today? You can ask me about <strong>Booking</strong>, <strong>Fees</strong>, and other Inquiries or type <strong>Agent</strong> to speak with a human representative.",
    THANKS: "You're welcome! If you have any more questions, feel free to ask. I'm here to help!",
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
    } else if (cleanedInput.includes('requirements')) {
        botResponse = BOT_RESPONSES.REQUIREMENTS;
    } else if (cleanedInput.includes('reservations')) {
        botResponse = BOT_RESPONSES.RESERVATIONS;
    } else if (cleanedInput.includes('deposits')) {   
        botResponse = BOT_RESPONSES.DEPOSITS;  
    } else if (cleanedInput.includes('cancellations') ) {         
        botResponse = BOT_RESPONSES.CANCELLATIONS;
    } else if (cleanedInput.includes('limits')) {
        botResponse = BOT_RESPONSES.LIMITS;
    } else if (cleanedInput.includes('extensions')) {
        botResponse = BOT_RESPONSES.EXTENSIONS;
    } else if (cleanedInput.includes('features')) {
        botResponse = BOT_RESPONSES.FEATURES;
    } else if (cleanedInput.includes('services')) {
        botResponse = BOT_RESPONSES.SERVICES;
    } else if (cleanedInput.includes('rules') || cleanedInput.includes('policies')) {
        botResponse = BOT_RESPONSES.RULES;
    } else if (cleanedInput.includes('privacy')) {
        botResponse = BOT_RESPONSES.PRIVACY;
    } else if (cleanedInput.includes('security')) {
        botResponse = BOT_RESPONSES.SECURITY;
    } else if (cleanedInput.includes('hello') || cleanedInput.includes('hi')) {
        botResponse = BOT_RESPONSES.HELLO;
    } else if (cleanedInput.includes('thanks') || cleanedInput.includes('thank you')) {
        botResponse = BOT_RESPONSES.THANKS;
    }

    // Simulate typing delay
    setTimeout(() => {
        appendMessage(botResponse, 'bot');
    }, 500);
});