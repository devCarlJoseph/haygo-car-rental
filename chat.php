<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HayGo Car Rental</title>
    <link rel="stylesheet" href="src/assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/assets/css/style.css">
    <link rel="stylesheet" href="src/assets/css/chat.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="src/assets/js/bootstrap.js"></script>
    <script src="src/assets/controller/chat.js"></script>
</head>

<body class="inder-regular">
    <main>
        <section>
            <div class="d-flex justify-content-between">
                <button id="backBtn" class="d-flex justify-content-start align-items-center" style="width: 2.275rem; height: 2.275rem; background: #3a2114ff; border-radius: 10rem; margin: 0.6rem">
                    <i class="fa-solid fa-arrow-left" style="font-size: 1.25rem; color: #EFC6B1"></i>
                </button>
                <div class="text-end" style="margin-right: 1rem; padding-top: 1rem">
                    <a href="help.php"><i class="fa-solid fa-x" style="color: #DDAD95;"></i></a>
                </div>
            </div>
            <div id="greeting" style="padding-top: 5rem; text-align: left; margin-left: 11rem;">
                <h1 style="font-size: 5rem; color: #F9CBB3;">Hello There</h1>
                <h3 style="font-size: 3.125rem; color: #F9CBB3; margin-top: -1.2rem;">How can I help you today?</h3>
            </div>

            <!-- Question Cards -->
            <div class="question-container">
                <div class="question-card">
                    <h2 style="font-size: 1.438rem; color: #605956">What is Hay Go Car Rental?</h2>
                </div>
                <div class="question-card">
                    <h2 style="font-size: 1.438rem; color: #605956">What are your office hours?</h2>
                </div>
                <div class="question-card">
                    <h2 style="font-size: 1.438rem; color: #605956">Can I modify or cancel my booking?</h2>
                </div>
                <div class="question-card">
                    <h2 style="font-size: 1.438rem; color: #605956">What are the requirements to rent a car?</h2>
                </div>
            </div>

            <!-- Chat Section -->
            <div class="chat-container active" id="chatContainer">
                <div class="chat-pair">
                </div>
            </div>

            <!-- Input -->
            <div class="input-area" style="position: fixed; left: 19rem">
                <input type="text" id="userInput" placeholder="Ask Hay Go Chat Bot" />
                <button id="sendBtn"><i class="fa-solid fa-arrow-up"></i></button>
            </div>
        </section>
    </main>
</body>

</html>