<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> <!-- Include axios -->
</head>
<body>
    <h1>Chat with Our Bot</h1>
    
    <div id="chat-container">
        <div id="chat-box"></div>
        <input type="text" id="user-message" placeholder="Ask me something..." />
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        function sendMessage() {
            var message = document.getElementById('user-message').value; // Get the user's message
            if (message) {
                var chatBox = document.getElementById('chat-box');
                chatBox.innerHTML += `<p><strong>You:</strong> ${message}</p>`; // Show user's message

                // Send POST request to /chatbot/message (This matches the route you defined in routes/web.php)
                axios.post('/chatbot/message', {
                    message: message // Send the message as payload
                })
                .then(function (response) {
                    // Show the bot's response
                    chatBox.innerHTML += `<p><strong>Bot:</strong> ${response.data.reply}</p>`;
                    document.getElementById('user-message').value = ''; // Clear input field
                })
                .catch(function (error) {
                    console.error('Error:', error); // Log error if there is an issue
                });
            }
        }
    </script>
</body>
</html>


