<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expertaff</title>
    <style>
        /* Add CSS styles here to style the email template */
        body {
            font-family: Arial, sans-serif;
            background-color: #edf2f7;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 4px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        p {

            font-size: 15px;

        }

        .content {
            margin-top: 30px;
        }

        .text-color {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="header" style="display: flex; justify-content: center;">
        <h4>Expertaff</h4>
    </div>
    <div class="container">
        <div class="content">
            <p>Subject: Account Approval</p>
            <p>Dear {{ $userName }},</p>
            <p>We are pleased to inform you that your account has been approved. Congratulations! You can now access all
                the features
                and benefits of our platform.</p>
            <p>Account Details:</p>
            <p>Username: {{ $userName }}</p>
            <p>Email: {{ $userEmail }}</p>
            <p>If you have any questions or need assistance, please don't hesitate to contact our support team. We're
                here to help!</p>
            <p>Contact Us: <span class="text-color">shahidraza7463@gmail.com</span></p>
            <p>Thank you for choosing our platform.</p>
            <p>Best regards,</p>
        </div>
    </div>
    <div class="footer" style="display: flex; justify-content: center;">
        <p style="color:#b0adc5;"> © 2023 Expertaff. All rights reserved.</p>
    </div>
</body>

</html>
