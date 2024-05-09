var words = ["rood", "locor", "deb", "airch", "ebatl"];

// Define an array of objects containing the scrambled words, their corresponding images, and hints
var questions = [
    { word: "rood", hint: "Hint: Opens and closes" },
    { word: "locor", hint: "Hint: Has various shades" },
    { word: "deb", hint: "Hint: Where you sleep" },
    { word: "airch", hint: "Hint: You sit on it" },
    { word: "ebatl", hint: "Hint: Where you put things on" }
];

// Define the index to track the current question
var currentQuestionIndex = 0;

// Variable to store the total score
var totalScore = 0;

// Function to load questions dynamically
function loadQuestions() {
    var questionsContainer = document.getElementById('questions-container');
    var questionDiv = document.createElement('div');
    questionDiv.classList.add('question');

    // Create elements for the current question
    var scrambledWordDiv = document.createElement('div');
    scrambledWordDiv.innerHTML = "<span>Scrambled Word: </span><span>" + questions[currentQuestionIndex].word + "</span>";
    questionDiv.appendChild(scrambledWordDiv);

    // Create an element for the hint
    var hintPara = document.createElement('p');
    hintPara.textContent = questions[currentQuestionIndex].hint;
    questionDiv.appendChild(hintPara);

    var answerInput = document.createElement('input');
    answerInput.type = 'text';
    answerInput.name = 'answers[]';
    answerInput.classList.add('answer');
    answerInput.placeholder = 'Enter your answer';
    questionDiv.appendChild(answerInput);

    questionsContainer.innerHTML = ''; // Clear previous question
    questionsContainer.appendChild(questionDiv);
}

// Function to validate the answer
function validateAnswer() {
    var userAnswer = document.querySelector('.answer').value.trim();

    if (userAnswer === '') {
        alert("Please fill in the answer field.");
        return;
    }

    fetch('/validate_word_answer', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ answers: [userAnswer] })
    })
    .then(response => response.json())
    .then(data => {
        // Check if the answer is correct
        var isCorrect = data.results[0] === 'Correct';
        
        // Display result message
        var resultDiv = document.getElementById('result');
        resultDiv.innerHTML = "<p>" + (isCorrect ? "Correct!" : "Wrong answer. Please try again.") + "</p>";
        
        // Clear the result message after 2 seconds
        setTimeout(function() {
            resultDiv.innerHTML = '';
        }, 2000);
        
        // If correct, increment the total score
        if (isCorrect) {
            totalScore++;
        } else {
            // If the answer is incorrect, stop here, clear the input field, and don't proceed to the next question
            document.querySelector('.answer').value = ''; // Clear the input field
            return;
        }

        // Move to the next question or finish the game
        currentQuestionIndex++;
        if (currentQuestionIndex < words.length) {
            loadQuestions(); // Load the next question
        } else {
            // Calculate the percentage score based on the total number of correct answers
            var scorePercentage = (totalScore / words.length) * 100;
            
            // Finish the game and display the total score
            alert("Your total score: " + scorePercentage.toFixed(2) + "%");
            askNameAndAge(scorePercentage); // Record the score in the database
        }
    })
    .catch(error => console.error('Error:', error));
}

// Function to save user info (name, age, and score) to the database
function saveUserInfo(name, age, score,game) {
    fetch('/save_word_user_info', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ name: name, age: age, score: score, game:game})
    })
    .then(response => response.json())
    .then(data => {
        alert("Hello, " + data.name + "! Your score has been saved.");
        
        // Clear the input field
        document.querySelector('.answer').value = '';
    })
    .catch(error => console.error('Error:', error));
}

// Function to prompt the user for name and age before saving user info
function askNameAndAge(score) {
    var name = prompt("Please enter your name:");
    var age = prompt("Please enter your age:");
    var game = "Word Scramble";
    // Check if both name and age are provided
    if (name && age) {
        // Save user info
        saveUserInfo(name, age, score, game);
    } else {
        alert("Name and age are required.");
    }
}

// Call loadQuestions() to start the game
window.onload = loadQuestions;

function goBack() {
    if (confirm("Do you want to exit the game?")) {
      window.history.back();
    }
  }