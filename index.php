<?php
$greetings = ["Добро пожаловать", "Таинственный вечер", "Магия в воздухе", "Сладкие грёзы", "Легенды о любви"];
$randomGreeting = $greetings[array_rand($greetings)];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Romantic</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

        body {
            margin: 0;
            padding: 0;
            background: url('https://source.unsplash.com/1600x900/?dark,romantic') no-repeat center center/cover;
            color: #e0c3fc;
            font-family: 'Great Vibes', cursive;
            text-align: center;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            font-size: 50px;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.8);
        }

        p {
            font-size: 24px;
            font-weight: bold;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 20px;
            color: white;
            background: linear-gradient(45deg, #b83280, #7a2048);
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: linear-gradient(45deg, #7a2048, #b83280);
        }
    </style>
</head>
<body>
    <div class="overlay">
        <h1><?php echo $randomGreeting; ?></h1>
        <p>Уромбаева Альбина</p>
        <button class="btn" onclick="alert('Ааааааааа!')">Нажми</button>
    </div>
</body>
</html>

