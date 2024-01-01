// Array to store different bubble classes
let bubbles = ['one', 'two', 'three', 'four', 'five'];

// Get the width of the window
let windowWidth = window.innerWidth;

// Reference to the body element
let body = document.body;

// Get the height of the window
let windowHeight = window.innerHeight;

// Select all elements with the class 'score'
let scores = document.querySelectorAll('.score');

// Counter for popped bubbles
let noPop = 0;

// Total number of bubbles
let total = 50;

// Counter for the current bubble
let currentBubble = 0;

// Flag to determine if the game is over
let gameOver = false;

// Reference to the shadow element
let shadow = document.querySelector('.shadow');

// Reference to the start button
let startBtn = document.querySelector('.start-btn');

// Function to open the game arena
const openArena = () => {
    var arenaRoute = "/arena";
    window.location.href = arenaRoute;
}

// Function to create a new bubble
function createBubble() {
    let div = document.createElement('div');
    let rand = Math.floor(Math.random() * bubbles.length);
    div.className = 'bubble bubble-' + bubbles[rand];
    rand = Math.floor(Math.random() * (windowWidth - 150));
    div.style.left = rand + 'px';

    div.dataset.number = currentBubble;
    currentBubble++;

    document.body.appendChild(div);

    animateBubble(div);
}

// Function to animate the bubble's movement
function animateBubble(elem) {
    let position = 0;
    let random = Math.floor(Math.random() * 6 - 3);
    let interval = setInterval(frame, 12 - Math.floor(noPop / 10) + random);

    function frame() {
        if (position >= (windowHeight + 150) && (document.querySelector('[data-number ="' + elem.dataset.number + '"]') !== null)) {
            clearInterval(interval);
            gameOver = true;
        } else {
            position++;
            elem.style.top = windowHeight - position + 'px';
        }
    }
}

// Function to delete a popped bubble
function deleteBubble(elem) {
    elem.remove();
    noPop++;
    scoreUpdate();
}

// Function to update the displayed score
function scoreUpdate() {
    for (let i = 0; i < scores.length; i++) {
        scores[i].textContent = noPop;
    }
}

// Function to start the game
function startGame() {
    restartGame();
    let timeout = 0;
    let loop = setInterval(function () {
        timeout = Math.floor(Math.random() * 600 - 100);
        if (!gameOver && noPop !== total) {
            createBubble();
        } else if (noPop !== total) {
            clearInterval(loop);
            shadow.style.display = 'flex';
            shadow.querySelector('.loser').style.display = 'block';
        } else {
            clearInterval(loop);
            shadow.style.display = 'flex';
            shadow.querySelector('.winner').style.display = 'block';
        }
    }, 1800 + timeout);
}

// Function to restart the game
function restartGame() {
    let forRemoving = document.querySelectorAll('.bubble');
    for (let i = 0; i < forRemoving.length; i++) {
        forRemoving[i].remove();
    }
    gameOver = false;
    noPop = 0;
    scoreUpdate();
}

// Event listener for bubble popping
document.addEventListener('click', function (event) {
    if (event.target.classList.contains('bubble')) {
        deleteBubble(event.target);
    }
});

// Event listener for the restart button
document.querySelector('.restart').addEventListener('click', function () {
    shadow.style.display = 'none';
    shadow.querySelector('.winner').style.display = 'none';
    shadow.querySelector('.loser').style.display = 'none';
    startGame();
});

// Event listener for the cancel button
document.querySelector('.cancel').addEventListener('click', function () {
    shadow.style.display = 'none';
});

// Event listener for the start button
startBtn.addEventListener('click', function () {
    startGame();
    document.querySelector('.main-game').style.display = 'none';
});
