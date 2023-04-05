 // Start simulation when button is clicked
 var simulationButton = document.querySelector('.simulation-button');
 simulationButton.addEventListener('click', function() {
   alert('Starting simulation...');
   // Define variables
var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var ballRadius = 10;
var x = canvas.width / 2;
var y = canvas.height - 30;
var dx = 2;
var dy = -2;
var paddleHeight = 10;
var paddleWidth = 75;
var paddleX = (canvas.width - paddleWidth) / 2;
var rightPressed = false;
var leftPressed = false;
var brickRowCount = 3;
var brickColumnCount = 5;
var brickWidth = 75;
var brickHeight = 20;
var brickPadding = 10;
var brickOffsetTop = 30;
var brickOffsetLeft = 30;
var score = 0;
var lives = 3;

// Define functions
function drawBall() {
ctx.beginPath();
ctx.arc(x, y, ballRadius, 0, Math.PI * 2);
ctx.fillStyle = '#0095DD';
ctx.fill();
ctx.closePath();
}

function drawPaddle() {
ctx.beginPath();
ctx.rect(paddleX, canvas.height - paddleHeight, paddleWidth, paddleHeight);
ctx.fillStyle = '#0095DD';
ctx.fill();
ctx.closePath();
}

function drawBricks() {
for (var c = 0; c < brickColumnCount; c++) {
 for (var r = 0; r < brickRowCount; r++) {
     if (bricks[c][r].status == 1) {
         var brickX = (c * (brickWidth + brickPadding)) + brickOffsetLeft;
         var brickY = (r * (brickHeight + brickPadding)) + brickOffsetTop;
         bricks[c][r].x = brickX;
         bricks[c][r].y = brickY;
         ctx.beginPath();
         ctx.rect(brickX, brickY, brickWidth, brickHeight);
         ctx.fillStyle = '#0095DD';
         ctx.fill();
         ctx.closePath();
     }
 }
}
}

function drawScore() {
ctx.font = '16px Arial';
ctx.fillStyle = '#0095DD';
ctx.fillText('Score: ' + score, 8, 20);
}

function drawLives() {
ctx.font = '16px Arial';
ctx.fillStyle = '#0095DD';
ctx.fillText('Lives: ' + lives, canvas.width - 65, 20);
}

function collisionDetection() {
for (var c = 0; c < brickColumnCount; c++) {
 for (var r = 0; r < brickRowCount; r++) {
     var b = bricks[c][r];
     if (b.status == 1) {
         if (x > b.x && x < b.x + brickWidth && y > b.y && y < b.y + brickHeight) {
             dy = -dy;
             b.status = 0;
             score++;
             if (score == brickRowCount * brickColumnCount) {
                 alert('Congratulations! You win!');
                 document.location.reload();
             }
         }
     }
 }
}
}

function keyDownHandler(e) {
if (e.keyCode == 39) {
 rightPressed = true;
} else if (e.keyCode == 37) {
 leftPressed = true;
}
}

function keyUpHandler(e) {
if (e.keyCode == 39) {
 rightPressed = false;
} else if (e.keyCode == 37) {
 leftPressed = false;
}
}

function mouseMoveHandler(e) {
var relativeX = e.clientX - canvas.offsetLeft;
if (relativeX > 0 && relativeX < canvas.width) {
paddleX = relativeX - paddleWidth / 2;
}
}

function draw() {
ctx.clearRect(0, 0, canvas.width, canvas.height);
drawBricks();
drawBall();
drawPaddle();
drawScore();
drawLives();
collisionDetection();

if (x + dx > canvas.width - ballRadius || x + dx < ballRadius) {
dx = -dx;
}

if (y + dy < ballRadius) {
dy = -dy;
} else if (y + dy > canvas.height - ballRadius) {
if (x > paddleX && x < paddleX + paddleWidth) {
 dy = -dy;
} else {
 lives--;
 if (!lives) {
     alert('Game Over');
     document.location.reload();
 } else {
     x = canvas.width / 2;
     y = canvas.height - 30;
     dx = 2;
     dy = -2;
     paddleX = (canvas.width - paddleWidth) / 2;
 }
}
}

if (rightPressed && paddleX < canvas.width - paddleWidth) {
paddleX += 7;
} else if (leftPressed && paddleX > 0) {
paddleX -= 7;
}

x += dx;
y += dy;

requestAnimationFrame(draw);

}

// Initialize bricks
var bricks = [];
for (var c = 0; c < brickColumnCount; c++) {
bricks[c] = [];
for (var r = 0; r < brickRowCount; r++) {
bricks[c][r] = { x: 0, y: 0, status: 1 };
}
}

// Handle user input
document.addEventListener('keydown', keyDownHandler, false);
document.addEventListener('keyup', keyUpHandler, false);
document.addEventListener('mousemove', mouseMoveHandler, false);

// Start game loop
draw();
// Start game loop
draw();

// Add simulation controls
var startBtn = document.getElementById('start-btn');
var pauseBtn = document.getElementById('pause-btn');
var resetBtn = document.getElementById('reset-btn');
var speedSlider = document.getElementById('speed-slider');
var scoreDisplay = document.getElementById('score-display');
var livesDisplay = document.getElementById('lives-display');

// Set up event listeners for controls
startBtn.addEventListener('click', startSimulation);
pauseBtn.addEventListener('click', pauseSimulation);
resetBtn.addEventListener('click', resetSimulation);
speedSlider.addEventListener('input', changeSpeed);

// Set up initial state for simulation
var score = 0;
var lives = 3;
var simulationRunning = false;
var simulationPaused = false;
var simulationSpeed = 1;

// Define simulation control functions
function startSimulation() {
if (!simulationRunning) {
 simulationRunning = true;
 draw();
}
}

function pauseSimulation() {
if (simulationRunning) {
 simulationPaused = !simulationPaused;
 if (simulationPaused) {
     pauseBtn.innerHTML = 'Resume';
 } else {
     pauseBtn.innerHTML = 'Pause';
     draw();
 }
}
}

function resetSimulation() {
score = 0;
lives = 3;
bricks = [];
for (var c = 0; c < brickColumnCount; c++) {
 bricks[c] = [];
 for (var r = 0; r < brickRowCount; r++) {
     bricks[c][r] = { x: 0, y: 0, status: 1 };
 }
}
x = canvas.width / 2;
y = canvas.height - 30;
dx = 2;
dy = -2;
paddleX = (canvas.width - paddleWidth) / 2;
startSimulation();
}

function changeSpeed() {
simulationSpeed = parseFloat(speedSlider.value);
}

// Define functions to update score and lives displays
function drawScore() {
scoreDisplay.innerHTML = 'Score: ' + score;
}

function drawLives() {
livesDisplay.innerHTML = 'Lives: ' + lives;
}
 })