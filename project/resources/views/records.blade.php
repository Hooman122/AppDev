<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    
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
                <th scope="col">Actions</th> <!-- Add a new column for actions -->
            </tr>
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
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

   
</body>
</html>
