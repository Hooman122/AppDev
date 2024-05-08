<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Object Identification Game</title>
  <link rel="stylesheet" href="{{ asset('objectIden.css') }}">
  <!-- CSRF Token Meta Tag -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<button onclick="goBack()" class="image-button"><img src="images\quit.png" alt="Back"></button>
  <div class="viewport">
    <div class="container">
      <h1>Object Identification Game</h1>
      <form id="game" class="scroll-view">
        <div class="questions-container">
          <div class="image-container">
            <div class="question" id="question1">
              <img src="{{ asset('images/elephant.png') }}" alt="elephant">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
            </div>
          </div>
          <div class="image-container">
            <div class="question" id="question2">
              <img src="{{ asset('images/fruits.png') }}" alt="fruits">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
            </div>
          </div>
          <div class="image-container">
            <div class="question" id="question3">
              <img src="{{ asset('images/car.png') }}" alt="car">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
            </div>
          </div>
          <div class="image-container">
            <div class="question" id="question4">
              <img src="{{ asset('images/shoes.png') }}" alt="shoes">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
            </div>
          </div>
          <div class="image-container">
            <div class="question" id="question5">
              <img src="{{ asset('images/ball.png') }}" alt="ball">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
            </div>
          </div>
        </div>
        <button type="button" class="submit_btn" onclick="validateAnswer()">Submit</button>
      </form>
      <div id="result"></div>
    </div>
  </div>
  <!-- JavaScript Code -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
