<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>you are in @yield('title')</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --background-color: #f8f9fa;
            --text-color: #212529;
            --nav-height: 70px;
            --footer-height: 60px;
            --border-radius: 8px;
            --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navigation styles */
        nav {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: var(--nav-height);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            display: flex;
            list-style: none;
            height: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        nav ul li {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        nav ul li a {
            color: var(--text-color);
            text-decoration: none;
            padding: 10px 15px;
            border-radius: var(--border-radius);
            transition: var(--transition);
            font-weight: 500;
        }

        nav ul li a:hover {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary-color);
        }

        /* Active link style */
        nav ul li a.active {
            background-color: var(--primary-color);
            color: white;
        }

        /* Content area */
        main {
            flex: 1;
            padding: 30px 20px;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
        }

        /* Footer styles */
        footer {
            background-color: white;
            border-top: 1px solid #eaeaea;
            height: var(--footer-height);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
        }

        footer p {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            nav ul {
                padding: 0 15px;
                overflow-x: auto;
            }

            nav ul li a {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
        }

        @media (max-width: 576px) {
            :root {
                --nav-height: auto;
            }

            nav ul {
                flex-direction: column;
                padding: 15px;
            }

            nav ul li {
                margin: 5px 0;
                width: 100%;
            }

            nav ul li a {
                display: block;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href='/' class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
            <li><a href='{{route ('about')}}' class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
            <li><a href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            <li><a href="{{route('computer.index')}}" class="{{ request()->routeIs('computer.index') ? 'active' : '' }}">Computer</a></li>
            <li><a href="{{route('computer.create')}}" class="{{ request()->routeIs('computer.create') ? 'active' : '' }}">Create</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Company Name. All Rights Reserved.</p>
    </footer>
</body>
</html>