<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .theme-3 {
            background-color: #e8f5e9;
            color: #1b5e20;
        }
        .container {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }
        p {
            margin: 10px 0;
            font-size: 16px;
        }
        strong {
            color: inherit;
        }
    </style>
</head>
<body>
    <!-- Example Theme 1 -->
    <div class="container theme-3">
        <h1 class="title">Profile Information</h1>
        <p><strong>ID:</strong> {{ $data['id'] }}</p>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Age:</strong> {{ $data['age'] }}</p>
    </div>
    </body>
</html>


