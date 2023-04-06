const quizContainer = document.getElementById("quiz");
const resultsContainer = document.getElementById("results");
const submitButton = document.getElementById("submit");
const previousButton = document.getElementById("previous");
const nextButton = document.getElementById("next");

const questions = [
  {
    question: "What is the capital of France?",
    answers: {
      a: "Berlin",
      b: "Paris",
      c: "Dublin"
    },
    correctAnswer: "b"
  },
  {
    question: "What is the largest planet in our solar system?",
    answers: {
      a: "Saturn",
      b: "Jupiter",
      c: "Neptune"
    },
    correctAnswer: "b"
  },
  {
    question: "Who wrote the Harry Potter series of books?",
    answers: {
      a: "J.K. Rowling",
      b: "Stephen King",
      c: "George R.R. Martin"
    },
    correctAnswer: "a"
  }
];

let currentSlide = 0;
const slides = document.querySelectorAll(".question");

function buildQuiz() {
  // variable to store the HTML output
  const output = [];

  // for each question...
  questions.forEach((currentQuestion, questionNumber) => {
    // variable to store the list of possible answers
    const answers = [];

    // and for each available answer...
    for (letter in currentQuestion.answers) {
      // ...add an HTML radio button
      answers.push(
        `<label>
           <input type="radio" name="question${questionNumber}" value="${letter}">
           ${letter} :
           ${currentQuestion.answers[letter]}
         </label>`
      );
    }

    // add this question and its answers to the output
    output.push(
      `<div class="question">
         <h2>${currentQuestion.question}</h2>
         <div class="answers">${answers.join("")}</div>
       </div>`
    );
  });

  // finally, combine our output list into one string of HTML and put it on the page
  quizContainer.innerHTML = output.join("");
}

function showResults() {
  // gather answer containers from our quiz
  const answerContainers = quizContainer.querySelectorAll(".answers");

  // keep track of user's answers
  let numCorrect = 0;

  // for each question...
  questions.forEach((currentQuestion, questionNumber) => {
    // find selected answer
    const answerContainer = answerContainers[questionNumber];
    const selector = `input[name=question${questionNumber}]:checked`;
    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

    // if answer is correct
    if (userAnswer === currentQuestion.correctAnswer) {
      // add to the number of correct answers
      numCorrect++;

      // color the answers green
      answerContainers[questionNumber].style.color = "lightgreen";
    } else {
      // if answer is wrong or blank
      // color the answers red
      answerContainers[questionNumber].style.color = "red";
    }
  });

  // show number of correct answers out of total
  resultsContainer.innerHTML = `${numCorrect} out of ${questions.length}`;
}

function showSlide(n) {
    // make sure slide number is within the valid range
    if (n < 0 || n >= slides.length) {
      return;
    }
  
    // hide the current slide and show the new slide
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
  
    // update currentSlide
    currentSlide = n;
  
    // show/hide navigation buttons based on current slide
    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
  
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }