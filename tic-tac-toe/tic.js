const X_CLASS = 'x';
const O_CLASS = 'o';
const WINNING_COMBINATIONS = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

const board = document.querySelector('.board');
const cells = document.querySelectorAll('.cell');
const message = document.querySelector('.message');
const restartBtn = document.querySelector('.restart-btn');

let currentPlayer = X_CLASS;
let gameActive = true;

startGame();

function startGame() {
    currentPlayer = X_CLASS;
    gameActive = true;
    message.innerText = "It's your turn, X";
    board.classList.remove(O_CLASS);
    board.classList.add(X_CLASS);
    cells.forEach(cell => {
        cell.classList.remove(X_CLASS);
        cell.classList.remove(O_CLASS);
        cell.innerText = '';
        cell.removeEventListener('click', handleClick);
        cell.addEventListener('click', handleClick, { once: true });
    });
}

function handleClick(e) {
    const cell = e.target;
    const currentClass = currentPlayer;

    placeMark(cell, currentClass);

    if (checkWin(currentClass)) {
        endGame(false);
    } else if (isDraw()) {
        endGame(true);
    } else {
        swapTurns();
    }
}

function isDraw() {
    return [...cells].every(cell => {
        return cell.classList.contains(X_CLASS) || cell.classList.contains(O_CLASS);
    });
}
function placeMark(cell, currentClass) {
    cell.classList.add(currentClass);
    cell.innerText = currentClass;
}

function swapTurns() {
    currentPlayer = currentPlayer === X_CLASS ? O_CLASS : X_CLASS;
    board.classList.toggle(X_CLASS);
    board.classList.toggle(O_CLASS);
    message.innerText = `It's your turn, ${currentPlayer}`;
}

function checkWin(currentClass) {
    return WINNING_COMBINATIONS.some(combination => {
        return combination.every(index => {
            return cells[index].classList.contains(currentClass);
        });
    });
}

function endGame(draw) {
    gameActive = false;
    if (draw) {
        message.innerText = "It's a draw!";
    } else {
        message.innerText = `${currentPlayer} wins!`;
    }
    cells.forEach(cell => {
        cell.removeEventListener('click', handleClick);
    });
}

function handleRestartClick() {
    startGame();
}

restartBtn.addEventListener('click', handleRestartClick);
