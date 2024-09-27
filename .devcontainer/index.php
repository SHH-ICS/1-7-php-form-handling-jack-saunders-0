<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <style>
        .container {
            margin: 100px auto;
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome!</h2>
        <form method="POST">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="name" name="name" required>
                <label class="mdl-textfield__label" for="name">Your Name</label>
            </div>
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Submit
            </button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            echo "<h4>Hello, $name! Welcome to our website!</h4>";
        }
        ?>
    </div>
</body>
</html>
