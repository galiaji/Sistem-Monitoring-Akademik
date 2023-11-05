<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Add Tailwind CSS link here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md mx-auto bg-white rounded p-8 shadow-md">
            <form action="/resetpassword" method="POST">
                @csrf
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <h1 class="text-2xl font-semibold mb-4">Change Password</h1>
                <div class="inputbox mb-4">
                    <label for="email">Email</label>
                    <ion-icon name="mail-outline" class="mr-2"></ion-icon>
                    <input type="email" name="email" id="email" required
                        class="border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <div class="inputbox mb-4">
                    <label for="current_password">Current Password</label>
                    <ion-icon name="lock-closed-outline" class="mr-2"></ion-icon>
                    <input type="password" name="current_password" id="current_password" required
                        class="border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <div class="inputbox mb-4">
                    <label for="password">New Password</label>
                    <ion-icon name="lock-closed-outline" class="mr-2"></ion-icon>
                    <input type="password" name="password" required
                        class="border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <div class="inputbox mb-4">
                    <label for="password_confirmation">Confirm New Password</label>
                    <ion-icon name="lock-closed-outline" class="mr-2"></ion-icon>
                    <input type="password" name="password_confirmation" required
                        class="border rounded p-2 w-full focus:outline-none focus:ring focus:border-blue-300">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Update Password</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/login.js"></script>
</body>

</html>
