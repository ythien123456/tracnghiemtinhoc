const currentActiveButton = document.querySelector('ul .active');
    const currentActiveTabContent = document.querySelector('.content .active');
    let activeButtonID = currentActiveButton.id.match(/\d/g);
    activeButtonID = parseInt(activeButtonID.join(""));
// Active question #1 when load the test
document.querySelector('#questionBtn1').className = 'active';
document.querySelector('#question1').classList.add('in');
document.querySelector('#question1').classList.add('active');
const totalQuestions = document.querySelectorAll('.answerList').length;

function nextQuestion() {
    const currentActiveButton = document.querySelector('ul .active');
    const currentActiveTabContent = document.querySelector('.content .active');
    let activeButtonID = currentActiveButton.id.match(/\d/g);
    activeButtonID = parseInt(activeButtonID.join(""));
    if (activeButtonID < totalQuestions)
        activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, +1);
    else
        alert('This is the last question already!');
}

function previousQuestion() {
    const currentActiveButton = document.querySelector('ul .active');
    const currentActiveTabContent = document.querySelector('.content .active');
    let activeButtonID = currentActiveButton.id.match(/\d/g);
    activeButtonID = parseInt(activeButtonID.join(""));
    if (activeButtonID > 1)
        activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, -1);
    else
        alert('This is the very first question!');
}

//Set tab-content & Button to active so they will both active at the same time
function activateQuestion(currentActiveBtnID, currentActiveBtn, currentActiveContent, jump) {
    currentActiveBtn.classList.remove('active');
    document.querySelector('#questionBtn' + (currentActiveBtnID + jump)).classList.add('active');
    currentActiveContent.classList.remove('active');
    document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('in');
    document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('active');
}

//Check the Radio by pressing on list items, then change the item color and go to next question
function questionChecked(questionID, index) {
    const radioCheckbox = document.getElementsByName('question' + questionID)[index];
    radioCheckbox.checked = true;
    const listItems = document.getElementsByClassName('question' + questionID);
    for (let item of listItems) {
        item.style.background = 'white transparent';
    }
    const selectedItem = document.getElementsByClassName('question' + questionID)[index];
    selectedItem.style.backgroundColor = 'lightgray';
    const checkedQuestion = document.querySelector('#questionBtn' + questionID);
    checkedQuestion.style.backgroundColor = 'lightgreen';
    setTimeout(function(){
        nextQuestion();
    }, 700);
}