<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #4CAF50;
        }

        p {
            margin-bottom: 20px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Email Verification</h1>
        <p>Hello {{ $user->name }},</p>
        <p>Please click the following link to verify your email address:</p>
        <p><a href="{{ route('verification.verify', ['id' => $user->id, 'hash' => sha1($user->getEmailForVerification())]) }}" style="background-color: #4CAF50; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">Verify Email Address</a></p>
        <p>If you did not create an account, no further action is required.</p>
    </div>
</body>

</html>
