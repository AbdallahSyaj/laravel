@extends('layout')
@section('title', 'Computer-create')
@section('content')
<body>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --success-color: #4cc9f0;
            --background-color: #dddddd;
            --text-color: #212529;
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 500px;
            padding: 2rem;
        }

        h1 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            text-align: center;
            font-size: 2rem;
            font-weight: 600;
            text-transform: capitalize;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #ddd;
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.3);
        }

        .form-control::placeholder {
            color: #6c757d;
        }

        .btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            padding: 12px 24px;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            width: 100%;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
        }

        @media (max-width: 576px) {
            .container {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 1.75rem;
            }
        }
    </style>
    <div class="container">
        <h1>Create Computer</h1>
        <form action="{{ route('computer.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="Computer Name" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="text" name="model" placeholder="Model" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="number" name="price" placeholder="Price" class="form-control" required>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
@endsection