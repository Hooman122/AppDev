<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Word Scramble Game</title>
  <link rel="stylesheet" href="{{ asset('word_scramble.css') }}">
  <!-- CSRF Token Meta Tag -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Pass route URL to JavaScript -->
</head>
<body>
  <button onclick="goBack()" class="image-button"><img src="images/quit.png" alt="Back"></button>
  <div class="viewport">
    <div class="container">
      <h1>Word Scramble Game</h1>
        <div id="questions-container" class="questions-container">
          <!-- Questions will be dynamically added here -->
        </div>
        <button type="button" id="submit_btn" class="submit_btn" onclick="validateAnswer()">Submit</button>
        <div id="result"></div>
    </div>
  </div>

  <!-- JavaScript Code -->
  <script src="{{ asset('js/word_scramble.js') }}"></script>
</body>
</html>

