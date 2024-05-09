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
          <div class="image-container" id="image-container1">
            <div class="question">
              <img src="{{ asset('images/elephant.png') }}" alt="elephant">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
              <div class="result"></div> <!-- Result container -->
            </div>
          </div>
          </div>
          <div class="questions-container">
          <div class="image-container" id="image-container1">
            <div class="question">
              <img src="{{ asset('images/fruits.png') }}" alt="fruits">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
              <div class="result"></div> <!-- Result container -->
            </div>
          </div>
          </div>
          <div class="questions-container">
          <div class="image-container" id="image-container1">
            <div class="question">
              <img src="{{ asset('images/car.png') }}" alt="car">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
              <div class="result"></div> 
            </div>
          </div>
          <div class="questions-container">
          <div class="image-container" id="image-container1">
            <div class="question">
              <img src="{{ asset('images/shoes.png') }}" alt="shoes">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
              <div class="result"></div> 
            </div>
          </div>
          <div class="questions-container">
          <div class="image-container" id="image-container1">
            <div class="question">
              <img src="{{ asset('images/ball.png') }}" alt="ball">
              <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
              <div class="result"></div> 
            </div>
          </div>
        <button type="button" class="submit_btn" onclick="validateAnswer()">Submit</button>
      </form>
    
    </div>
  </div>
  <!-- JavaScript Code -->
  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
