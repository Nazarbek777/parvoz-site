<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>

@if (session('error'))
    <div style="color: red;">{{ session('error') }}</div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
    </div>

    <button type="submit">Login</button>
</form>
</body>
</html>
