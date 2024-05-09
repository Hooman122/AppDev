<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
    .custom-btn {
        background-color: #dc3545; /* Red color */
        color: #fff; /* White text color */
        border: none; /* Remove button border */
        padding: 0.375rem 0.75rem; /* Adjust padding as needed */
        font-size: 1rem; /* Adjust font size as needed */
        border-radius: 0.25rem; /* Add border-radius for rounded corners */
        cursor: pointer; /* Add cursor pointer on hover */
    }

    .custom-btn:hover {
        background-color: #c82333; /* Darker red color on hover */
    }
    </style>
    
</head>
<body>
<nav class="navbar">
    <ul>
      <li><img src="images\learn&play icons.png" alt="Logo" class="logo"></li>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li class="nav-item">
          <a href="{{ route('user-records') }}">Records</a> 
      </li>
    </ul>
</nav>
<div class="t-container">
    <h1>Player Records</h1>

    <table class="custom-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Score</th>
                <th scope="col">Game</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th> 
        </thead>
        <tbody>
            @foreach ($userRecords as $userRecord)
            <tr>
                <td>{{ $userRecord->id }}</td>
                <td>{{ $userRecord->name }}</td>
                <td>{{ $userRecord->age }}</td>
                <td>{{ $userRecord->score }}</td>
                <td>{{ $userRecord->game }}</td>
                <td>{{ $userRecord->created_at }}</td>
                <td>
                    <!-- Delete button for each record -->
                    <form action="{{ route('delete-user-record', ['id' => $userRecord->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="custom-btn">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

   
</body>
</html>
