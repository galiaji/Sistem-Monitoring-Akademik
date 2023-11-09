<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body style="background-image: url('/img/3.jpg'); background-size: cover; backdrop-filter: blur(2.5px);">
    <div class="container py-5 flex justify-center items-center h-screen">
        <div class="w-1/2 mx-auto border rounded px-3 py-3" style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(5px);">
            <h1 class="text-2xl mb-4">Login ASIAP</h1>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control border rounded w-full p-2">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border rounded w-full p-2">
                </div>
                <div class="mb-4">
                    <button name="submit" type="submit" class="btn btn-primary w-full p-2 rounded bg-blue-500 hover:bg-blue-600 focus:outline-none">Login</button>
                </div>
                <div class="register">
                    <p>Forgot Password? <a href="/resetpassword" class="text-blue-500">Click Here</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>