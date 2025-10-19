$(function () {
    const botReplies = {
        "what is hay go car rental?": "Hay Go Car Rental is a trusted service that provides affordable and reliable car rentals.",
        "what are your office hours?": "Our office hours are from 8 AM to 6 PM, Monday to Saturday.",
        "can i modify or cancel my booking?": "Yes, you can modify or cancel your booking by contacting customer support at least 24 hours before pickup.",
        "what are the requirements to rent a car?": "You need a valid driver’s license, a valid ID, and a security deposit.",
        "thanks": "You're welcome! If you have any more questions, feel free to ask.",
        "thank you": "You're welcome! If you have any more questions, feel free to ask.",
        "what is the best car in your fleet?" : "All our cars are well maintained, but the best choice depends on your needs. Let me know what you're looking for.",
        "i'm looking for a family car. any suggestions?" : "For families, we recommend our SUVs and minivans which offer ample space and comfort.",
        "what is the fuel policy?" : "Our fuel policy requires you to return the car with the same fuel level as when you picked it up.",
        "are there any additional fees?" : "Additional fees may apply for things like late returns, extra drivers, or young drivers. Please check our terms and conditions for details.",
        "do you offer any discounts?": "Yes, we offer seasonal discounts and promotions. Please check our website or contact support for current offers.",
        "how can i contact customer support?": "You can reach our customer support via phone at (123) 456-7890 or email at haygocar@gmail.com",
        "dili diay ko" : "Ayaw pungkol man diay ka!",
        "bomboang mani nga chat bot" : "Mas bomboang ka, mura ka'g ligid sa among sakyanan",
        "ka gwapo ra nako" : "Murag ka'g nawng lubot",
        "ambot nimo oy" : "Ambot pud nimo oy",
        "bahala ka diha" : "Bahala pud ka diha",
    };

    let chatStarted = false;

    function showChat() {
        if (!chatStarted) {
            $("#greeting").hide();
            $(".question-container").hide();
            $("#chatContainer").removeClass("active").show();
            chatStarted = true;
        }
    }

    $("#backBtn").on("click", function () {
        // Hide chat messages only, not input
        $("#chatContainer").removeClass("active").hide();

        // Bring back main greeting and question cards
        $("#greeting").show();
        $(".question-container").show();

        // Clear all previous chat messages
        $("#chatContainer").empty();

        // Reset chat state
        chatStarted = false;
    });

    function sendMessage(msg) {
        if (msg === "") return;

        // Add user's message
        $("#chatContainer").append(`<div class="message user">${msg}</div>`);
        $("#userInput").val("");

        // Add typing indicator
        const typingIndicator = $('<div class="message typing">Hay Go Bot is typing...</div>');
        $("#chatContainer").append(typingIndicator);
        $("#chatContainer").scrollTop($("#chatContainer")[0].scrollHeight);

        // Simulate bot thinking delay
        setTimeout(() => {
            typingIndicator.remove();
            const reply = botReplies[msg.toLowerCase()] || "I'm sorry, I don't have information about that yet.";
            const botMsg = $(`<div class="message bot">${reply}</div>`);
            $("#chatContainer").append(botMsg);
            $("#chatContainer").scrollTop($("#chatContainer")[0].scrollHeight);
        }, 1500);
    }

    // Click question card to autofill
    $(".question-card").on("click", function () {
        const question = $(this).text().trim();
        $("#userInput").val(question);
    });

    // Send message on button click or Enter key
    $("#sendBtn, #userInput").on("click keypress", function (e) {
        if (e.type === "click" || e.key === "Enter") {
            e.preventDefault();
            const msg = $("#userInput").val().trim();
            if (msg === "") return;
            showChat();
            sendMessage(msg);
        }
    });
});
