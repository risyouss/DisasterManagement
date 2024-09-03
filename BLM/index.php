<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signaler une catastrophe</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="%23333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
            background-repeat: no-repeat;
            background-position: right 8px top 50%;
            background-size: 24px;
            padding-right: 30px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        button[type="submit"]:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <h1>Vous êtes dans une zone de catastrophe naturelle potentielle !</h1>
    <p>Veuillez remplir les détails suivants :</p>

    <form method="post" action="report_disaster.php">
        <label for="name">Nom :</label>
        <input type="text" name="name" required>
        <br>

        <label for="age">Âge :</label>
        <input type="number" name="age" required>
        <br>

        <label for="blood_group">Groupe sanguin :</label>
        <input type="text" name="blood_group" required>
        <br>

        <label for="able_to_move">Êtes-vous capable de vous déplacer ?</label>
        <select name="able_to_move" required>
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>
        <br>

        <button type="submit">Soumettre</button>
    </form>
</body>
</html>
