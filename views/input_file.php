<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Code</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
}

.error-message {
    color: red;
    text-align: center;
    margin-top: 10px;
}

</style>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Enter Code</h2>
            <form action="<?= base_url('authentication/check_code'); ?>" method="post">
                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" id="code" name="code" required>
                </div>
                <button type="submit">Submit</button>
            </form>
            <div class="error-message">
                <!-- Display error message here if needed -->
            </div>
        </div>
    </div>
</body>
</html>
