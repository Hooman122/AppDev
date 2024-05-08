<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learn&Play</title>
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
<nav class="navbar">
    <ul>
      <li><img src="images\learn&play icons.png" alt="Logo" class="logo"></li>
      <li><a href="#">Contact</a></li>
     
    </ul>
  </nav>
  <div class="container">
    <h1>Welcome to Fun Games!</h1>
    <p>Please select a game:</p>
    <div class="button-container">
      <div class="game-box">
        <a href="{{ route('object_game') }}" class="image-button">
          <img src="images\object identification.png">
          <span>Object Identification</span>
        </a>
      </div>
      <div class="game-box">
        <a href="{{ route('math_game') }}" class="image-button">
          <img src="images\Math quiz.png">
          <span>Math Quiz</span>
        </a>
      </div>
    </div>
  </div>
</body>
</html>
