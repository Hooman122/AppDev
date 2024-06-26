function validateAnswer() {
    var userAnswers = [];
    var questions = document.querySelectorAll('.question');

    // Check if any input field is empty
    var isAnyEmpty = false;
    questions.forEach(function(question) {
        var answerInput = question.querySelector('.answer');
        var answer = answerInput.value.trim();
        if (answer === '') {
            isAnyEmpty = true;
            answerInput.classList.remove('correct', 'wrong'); // Remove any previous styling
        } else {
            userAnswers.push(answer.toLowerCase());
        }
    });

    // If any input field is empty, display an alert and return early
    if (isAnyEmpty) {
        alert("Please fill in all answer fields.");
        return;
    }

    // Proceed with answer validation if all fields are filled
    fetch('/validate_answer', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ answers: userAnswers })
    })
    .then(response => response.json())
    .then(data => {
        data.results.forEach(function(result, index) {
            var answerInput = questions[index].querySelector('.answer');
            var resultContainer = questions[index].querySelector('.result'); 
            resultContainer.innerHTML = "<p>" + result + "</p>"; 
            if (result === "Correct") {
                answerInput.classList.remove('wrong');
                answerInput.classList.add('correct');
            } else {
                answerInput.classList.remove('correct');
                answerInput.classList.add('wrong');
            }
        });
        alert("Your score: " + data.score + "%");
        askNameAndAge(data.score);
    })
    .catch(error => console.error('Error:', error));
}

function askNameAndAge(score) {
    var name = prompt("Please enter your name:");
    var age = prompt("Please enter your age:");
    var game = "Object Identification";

    fetch('/save_user_info', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ name: name, age: age, score: score, game: game })
    })
    .then(response => response.json())
    .then(data => {
        alert("Hello, " + data.name + "! Your score has been saved.");
    })
    .catch(error => console.error('Error:', error));
}

function goBack() {
    if (confirm("Do you want to exit the game?")) {
      window.history.back();
    }
  }

 