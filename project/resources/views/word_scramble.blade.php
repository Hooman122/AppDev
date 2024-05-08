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
      <form id="game" class="scroll-view">
        <div class="questions-container">
          <div class="question" id="question1">
            <span>Scrambled Word: </span>
            <span id="scrambledWord">dorw</span>
            <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
          </div>
          <div class="questions-container">
          <div class="question" id="question2">
            <span>Scrambled Word: </span>
            <span id="scrambledWord">locor</span>
            <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
          </div>
          <div class="questions-container">
          <div class="question" id="question3">
            <span>Scrambled Word: </span>
            <span id="scrambledWord">deb</span>
            <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
          </div>
          <div class="questions-container">
          <div class="question" id="question4">
            <span>Scrambled Word: </span>
            <span id="scrambledWord">airch</span>
            <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
          </div>
          <div class="questions-container">
          <div class="question" id="question5">
            <span>Scrambled Word: </span>
            <span id="scrambledWord">ebatl</span>
            <input type="text" name="answers[]" class="answer" placeholder="Enter your answer">
          </div>
          <!-- Add more questions here -->
        </div>
        <button type="button" class="submit_btn" onclick="validateAnswer()">Submit</button>
      </form>
      <div id="result"></div>
    </div>
  </div>
  <!-- JavaScript Code -->
  <script src="{{ asset('js/word_scramble.js') }}"></script>
</body>
</html>

