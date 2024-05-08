<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
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
    <div class="container">
        <h1>User Records</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Score</th>
                    <th scope="col">Game</th>
                    <th scope="col">Created At</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
