<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reply Email</title>
</head>
<body>
    <div class="container">
        <h2 class="greeting">Hi {{ $data['name'] }} 👋</h2>
        <p>Thank you for contacting me!</p>
        <p>This is a copy of your message:</p>

        <div class="message-box">
            {{ $data['message'] }}
        </div>

        <p>Thanks for reaching out! 🙌</p>
        <p><strong>Best regards,</strong><br>Gempar Ramadhan</p>
    </div>
</body>
</html>
