$(function () {
  const botReplies = {
    "what is hay go car rental?": "Hay Go Car Rental is a trusted service that provides affordable and reliable car rentals.",
    "what are your office hours?": "Our office hours are from 8 AM to 6 PM, Monday to Saturday.",
    "can i modify or cancel my booking?": "Yes, you can modify or cancel your booking by contacting customer support at least 24 hours before pickup.",
    "what are the requirements to rent a car?": "You need a valid driver’s license, a valid ID, and a security deposit.",
    "thanks": "You're welcome! If you have any more questions, feel free to ask.",
    "thank you": "You're welcome! If you have any more questions, feel free to ask.",
    "hi": "Hello! How can I assist you today?",
    "what is the best car in your fleet?": "All our cars are well maintained, but the best choice depends on your needs. Let me know what you're looking for.",
    "i'm looking for a family car. any suggestions?": "For families, we recommend our SUVs and minivans which offer ample space and comfort.",
    "what is the fuel policy?": "Our fuel policy requires you to return the car with the same fuel level as when you picked it up.",
    "are there any additional fees?": "Additional fees may apply for things like late returns, extra drivers, or young drivers. Please check our terms and conditions for details.",
    "do you offer any discounts?": "Yes, we offer seasonal discounts and promotions. Please check our website or contact support for current offers.",
    "how can i contact customer support?": "You can reach our customer support via phone at (123) 456-7890 or email at haygocar@gmail.com",
    "dili diay ko": "Ayaw pungkol man diay ka!",
    "bomboang mani nga chat bot": "Mas bomboang ka, mura ka'g ligid sa among sakyanan",
    "ka gwapo ra nako": "Murag ka'g nawng lubot",
    "ambot nimo oy": "Ambot pud nimo oy",
    "bahala ka diha": "Bahala pud ka diha",
  };

  let chatStarted = false;
  let typingTimeout = null; // will store timeout ID
  let botStopped = false; // track stop action

  function showChat() {
    if (!chatStarted) {
      $("#greeting").hide();
      $(".question-container").hide();
      $("#chatContainer").removeClass("active").show();
      chatStarted = true;
    }
  }

  $("#backBtn").on("click", function () {
    $("#chatContainer").removeClass("active").hide();
    $("#greeting").show();
    $(".question-container").show();
    $("#chatContainer").empty();
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

    // Change arrow to stop icon
    $("#sendBtn i").removeClass("fa-arrow-up").addClass("fa-stop");
    botStopped = false;

    // Simulate bot typing delay
    typingTimeout = setTimeout(() => {
      if (botStopped) return; // if user pressed stop, exit early
      typingIndicator.remove();
      const reply = botReplies[msg.toLowerCase()] || "I'm sorry, I don't have information about that yet.";
      const botMsg = $(`<div class="message bot">${reply}</div>`);
      $("#chatContainer").append(botMsg);
      $("#chatContainer").scrollTop($("#chatContainer")[0].scrollHeight);

      // Restore icon back to arrow
      $("#sendBtn i").removeClass("fa-stop").addClass("fa-arrow-up");
    }, 1500);
  }

  // Handle stop functionality
  $("#sendBtn").on("click", function (e) {
    const icon = $(this).find("i");
    const msg = $("#userInput").val().trim();

    // If stop icon is showing, stop bot
    if (icon.hasClass("fa-stop")) {
      botStopped = true;
      clearTimeout(typingTimeout);
      $(".typing").remove();
      icon.removeClass("fa-stop").addClass("fa-arrow-up");
      return;
    }

    // Otherwise, it's the normal send button
    if (msg !== "") {
      showChat();
      sendMessage(msg);
    }
  });

  // Also send message on Enter
  $("#userInput").on("keypress", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      const msg = $(this).val().trim();
      if (msg === "") return;
      showChat();
      sendMessage(msg);
    }
  });

  // Autofill when clicking question cards
  $(".question-card").on("click", function () {
    const question = $(this).text().trim();
    $("#userInput").val(question);
  });
});
