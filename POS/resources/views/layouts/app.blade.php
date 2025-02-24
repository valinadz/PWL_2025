<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS - @yield('title')</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #ffe6f2;
            color: #4a4a4a;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #ff99cc;
            padding: 15px;
            display: flex;
            justify-content: space-around;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            margin: 0 10px;
            transition: 0.3s;
        }

        .navbar a:hover {
            color: #ff66b2;
        }

        .container {
            text-align: center;
            padding: 40px 20px;
        }

        .btn {
            background-color: #ff66b2;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            margin: 10px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ff3385;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            padding: 10px;
            background: #ff99cc;
            color: white;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="/">Home</a>
        <a href="/sales">POS Transaction</a>
        <a href="/category/food-beverage">Food & Beverage</a>
        <a href="/category/beauty-health">Beauty & Health</a>
        <a href="/category/home-care">Home Care</a>
        <a href="/category/baby-kid">Baby & Kid</a>
        <a href="/user/1/name/Dulur">User Profile</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; 2025 POS Application - Dulur-dulur
    </footer>

</body>

</html>
