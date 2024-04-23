// JavaScript code for both quizzes

// Function to fetch quizzes via AJAX
function fetchQuizzes() {
    // Implement AJAX call to fetch quizzes from the backend
}

// Function to display a quiz
function displayQuiz(quiz) {
    // Display quiz question and options
}

// Function to handle quiz submission
function submitQuiz() {
    // Collect user responses
    var responses = [];
    var inputs = document.querySelectorAll('input[name="quiz-option"]:checked');
    inputs.forEach(function(input) {
        responses.push(input.value);
    });

    // Calculate score
    var score = calculateScore(responses);

    // Display result
    displayResult(score);
}

// Function to calculate score
function calculateScore(responses) {
    var score = 0;
    // Assuming 'quizzes' is an array containing the quiz objects fetched from the backend
    quizzes.forEach(function(quiz, index) {
        if (quiz.option_correct === responses[index]) {
            score++;
        }
    });
    return score;
}

// Function to display result
function displayResult(score) {
    var resultContainer = document.querySelector('#quiz-container');
    resultContainer.innerHTML = '<h2>Your Quiz Result</h2>';
    resultContainer.innerHTML += '<p>Your score: ' + score + ' out of ' + quizzes.length + '</p>';
    // You can add more information here, like time taken, correct answers, etc.
}

// Function to start the timer
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
            // Implement logic for time-up
        }
    }, 1000);
}

window.onload = function () {
    var fortyMinutes = 60 * 40,
        display = document.querySelector('#timer');
    startTimer(fortyMinutes, display);
    fetchQuizzes();
};
