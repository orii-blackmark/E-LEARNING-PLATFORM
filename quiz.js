// set time limit for the entire quiz
const timeLimit = 60; // in seconds

// array of questions
const questions = [
  {
    question: "What is 2 + 2?",
    choices: ["1", "2", "3", "4"],
    correctAnswer: "4"
  },
  {
    question: "What is 6 * 2?",
    choices: ["10", "12", "14", "16"],
    correctAnswer: "12"
  },
  {
    question: "What is 4 * 2?",
    choices: ["6", "8", "10", "12"],
    correctAnswer: "8"
  }
];

// variables to keep track of quiz progress
let currentQuestion = 0;
let score = 0;

// variables to keep track of timer
let timeLeft = timeLimit;
let timerIntervalId;

// function to start the quiz
function startQuiz() {
  // hide the start button and show the first question
  document.getElementById("start-button").style.display = "none";
  showQuestion();
  
  // start the timer
  startTimer();
}

// function to show the current question
function showQuestion() {
  // hide all questions
  document.querySelectorAll(".question").forEach(q => {
    q.style.display = "none";
  });
  
  // show the current question
  const questionElem = document.getElementById(`question-${currentQuestion}`);
  questionElem.style.display = "block";
  
  // update the question number
  document.getElementById("question-number").textContent = `Question ${currentQuestion + 1}`;
  
  // clear the previous feedback
  document.getElementById("feedback").textContent = "";
}

// function to handle submitting an answer
function submitAnswer() {
  // get the selected answer
  const selectedAnswer = document.querySelector(`input[name="answer-${currentQuestion}"]:checked`);
  
  if (!selectedAnswer) {
    // if no answer is selected, show an error message
    document.getElementById("feedback").textContent = "Please select an answer";
  } else {
    // check if the answer is correct
    if (selectedAnswer.value === questions[currentQuestion].correctAnswer) {
      // increase the score if the answer is correct
      score++;
    }
    
    // move on to the next question
    currentQuestion++;
    
    if (currentQuestion < questions.length) {
      // show the next question if there are more questions
      showQuestion();
    } else {
      // end the quiz if there are no more questions
      endQuiz();
    }
  }
}

// function to end the quiz
function endQuiz() {
  // stop the timer
  clearInterval(timerIntervalId);
  
  // hide the questions and show the score
  document.getElementById("quiz-form").style.display = "none";
  document.getElementById("score").textContent = `You scored ${score} out of ${questions.length}`;
  document.getElementById("time-left").textContent = `Time left: ${timeLeft} seconds`;
  document.getElementById("results").style.display = "block";
}

// function to start the timer
function startTimer() {
  // update the timer display
  document.getElementById("time-left").textContent = `Time left: ${timeLeft} seconds`;
  
  // set up the timer interval
  timerIntervalId = setInterval(() => {
    timeLeft--;
    document.getElementById("time-left").textContent = `Time left: ${timeLeft} seconds`;
    
    if (timeLeft === 0) {
      // end the quiz if time is up
      endQuiz();
    }
  }, 100)}
