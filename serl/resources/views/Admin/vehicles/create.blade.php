<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Vehicle</title>
    <style>
        /* Responsive CSS for Create Vehicle Form */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #eaeaea;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #666;
            font-size: 14px;
        }

        input[type="text"],
        select,
        button {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #4cae4c;
        }
        .error-message{
          color: red;
          margin-bottom: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 10px;
            }

            input[type="text"],
            select,
            button {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            label {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Create Vehicle</h1>
        <form method="POST" action="{{ route('admin.vehicles.store') }}">
            @csrf

            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" required>
                @error('type')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="capacity">Capacity:</label>
                <input type="text" id="capacity" name="capacity" required>
                @error('capacity')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <select name="status" id="status" required>
                    <option value="in transit">In Transit</option>
                    <option value="available">Available</option>
                    <option value="not working">Not Working</option>
                    <option value="in maintenance">In Maintenance</option>
                </select>
                @error('status')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="currentLocation">Current Location:</label>
                <input type="text" id="currentLocation" name="currentLocation" required>
                @error('currentLocation')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="driver_id">Driver ID:</label>
                <input type="text" id="driver_id" name="driver_id" required>
                @error('driver_id')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit">Create</button>
        </form>
    </div>
</body>


</html>
