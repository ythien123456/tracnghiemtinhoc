// Active question #1 when load the test
document.querySelector('#questionBtn1').className = 'active';
document.querySelector('#question1').classList.add('in');
document.querySelector('#question1').classList.add('active');
const totalQuestions = document.querySelectorAll('.answerList').length;
const toggleButton = document.getElementById('navigationButtonStatus');
const toggleStatus = document.getElementById('navigationStatus');
let autoSwitch = true;
let allowKeyboard = true;
const submitBtn = document.getElementById('mainSubmit');

function getCurrentActiveButton() {
    return document.querySelector('.quizWrapper ul .active');
}

function getCurrentActiveTabContent() {
    return document.querySelector('.quizWrapper .content .active');
}

function nextQuestion() {
    const currentActiveButton = getCurrentActiveButton();
    const currentActiveTabContent = getCurrentActiveTabContent();
    let activeButtonID = currentActiveButton.id.match(/\d/g);
    activeButtonID = parseInt(activeButtonID.join(""));
    if (activeButtonID < totalQuestions)
        activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, +1);
    else
        alert('Đây là câu hỏi cuối cùng!');
}

function previousQuestion() {
    const currentActiveButton = getCurrentActiveButton();
    const currentActiveTabContent = getCurrentActiveTabContent();
    let activeButtonID = currentActiveButton.id.match(/\d/g);
    activeButtonID = parseInt(activeButtonID.join(""));
    if (activeButtonID > 1)
        activateQuestion(activeButtonID, currentActiveButton, currentActiveTabContent, -1);
    else
        alert('Đây là câu hỏi đầu tiên!');
}

//Set tab-content & Button to active so they will both active at the same time
function activateQuestion(currentActiveBtnID, currentActiveBtn, currentActiveContent, jump) {
    currentActiveBtn.classList.remove('active');
    document.querySelector('#questionBtn' + (currentActiveBtnID + jump)).classList.add('active');
    currentActiveContent.classList.remove('in');
    currentActiveContent.classList.remove('active');
    document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('in');
    document.querySelector('#question' + (currentActiveBtnID + jump)).classList.add('active');
}

//Check the Radio by pressing on list items, then remove the items background color and go to next question
function radioChecked(questionID, index) {
    const contentStatus = document.querySelector('.content');
    if (contentStatus.classList.contains('contentDisabled'))
        return false;
    else {
        const radioCheckbox = document.getElementsByName('question' + questionID)[index];
        radioCheckbox.checked = true;
        let listItems = document.getElementsByClassName('question' + questionID);
        for (let item of listItems) {
            item.style.background = '';
        }
        const selectedItem = document.getElementsByClassName('question' + questionID)[index];
        selectedItem.style.backgroundColor = 'lightgray';
        const checkedQuestion = document.querySelector('#questionBtn' + questionID);
        checkedQuestion.classList.add('answered');
        if (autoSwitch === true) {
            setTimeout(function () {
                nextQuestion();
            }, 100);
        }
    }

}

// Check the Checkbox by pressing on list items, then remove the items background color, go to next question when user choose >=2 checkboxes
function checkboxChecked(questionID, index) {
    const contentStatus = document.querySelector('.content');
    if (contentStatus.classList.contains('contentDisabled'))
        return false;
    else {
        let checkboxCheckCounts = 0;
        const checkboxSquare = document.getElementsByName('question' + questionID + '[]')[index];
        checkboxSquare.checked === false ? checkboxSquare.checked = true : checkboxSquare.checked = false;
        let listItems = document.getElementsByClassName('question' + questionID);
        for (let item of listItems) {
            item.style.background = '';
        }
        let listCheckboxes = document.getElementsByName('question' + questionID + '[]');
        for (let item of listCheckboxes) {
            if (item.checked === true) {
                checkboxCheckCounts++;
            }
        }
        const selectedItem = document.getElementsByClassName('question' + questionID)[index];
        selectedItem.style.backgroundColor = 'lightgray';
        if (checkboxCheckCounts >= 2) {
            const checkedQuestion = document.querySelector('#questionBtn' + questionID);
            checkedQuestion.classList.add('answered');
            if (autoSwitch === true) {
                setTimeout(function () {
                    nextQuestion();
                }, 100);
            }
        }
    }
}

//Toggle auto switch question
function disableAutoSwitch() {
    autoSwitch = false;
    toggleButton.classList.remove('btn-success');
    toggleButton.classList.add('btn-danger');
    toggleStatus.innerText = "TẮT (✘)";
}

function enableAutoSwitch() {
    autoSwitch = true;
    toggleButton.classList.remove('btn-danger');
    toggleButton.classList.add('btn-success');
    toggleStatus.innerText = "BẬT (✔)";
}

function autoSwitchQuestion() {
    if (toggleButton.classList.contains('btn-danger')) {
        enableAutoSwitch(toggleButton, toggleStatus);
    } else {
        disableAutoSwitch(toggleButton, toggleStatus);
    }
}

//Flag question
function flagQuestion(orderNum) {
    const currentActiveButton = getCurrentActiveButton();
    const currentFlagButton = document.getElementById('questionFlag' + orderNum);
    if (currentActiveButton.classList.contains('flagged')) {
        currentActiveButton.classList.remove('flagged');
        currentFlagButton.classList.remove('btn-danger');
        currentFlagButton.classList.add('btn-success');
        currentFlagButton.value = "Gắn cờ 🏳️"
    } else {
        currentActiveButton.classList.add('flagged');
        currentFlagButton.classList.remove('btn-success');
        currentFlagButton.classList.add('btn-danger');
        currentFlagButton.value = "Bỏ gắn cờ 🏳️";
    }
}

function activateQuestionByNumber(questionNum) {
    const activeTab = document.querySelector('.tab-content .active');
    const activeButton = document.querySelector('.questionsNum .active');
    activeTab.classList.remove('in');
    activeTab.classList.remove('active');
    activeButton.classList.remove('active');
    document.getElementById('question' + questionNum).classList.add('in');
    document.getElementById('question' + questionNum).classList.add('active');
    document.getElementById('questionBtn' + questionNum).classList.add('active');
}

function showFlaggedQuestionOnly() {
    const questionNumList = document.querySelectorAll('.questionsNum ul li');
    const flaggedItems = document.querySelectorAll('.flagged');
    const flaggedShowBtn = document.getElementById('showFlaggedQuestionStatus');
    const flaggedShowStatus = document.getElementById('showFlaggedStatus');
    const navigateButtons = document.querySelector('.navigateBtn');
    if (flaggedShowBtn.classList.contains('btn-danger')) {
        if (flaggedItems.length > 0) {
            const firstFlaggedItemNum = flaggedItems[0].id.match(/\d/g).join("");
            activateQuestionByNumber(firstFlaggedItemNum);
            allowKeyboard = false;
            disableAutoSwitch();
            toggleButton.style.display = 'none';
            flaggedShowBtn.classList.remove('btn-danger');
            flaggedShowBtn.classList.add('btn-success');
            flaggedShowStatus.innerText = 'BẬT (✔)';
            navigateButtons.style.display = 'none';
            for (let i = 0; i < questionNumList.length; i++) {
                if (!questionNumList[i].classList.contains('flagged'))
                    questionNumList[i].style.display = 'none';
            }
        } else {
            alert('Bạn chưa gắn cờ câu hỏi nào!');
            return false;
        }
    } else {
        flaggedShowBtn.classList.remove('btn-success');
        flaggedShowBtn.classList.add('btn-danger');
        flaggedShowStatus.innerText = 'TẮT (✘)';
        navigateButtons.style.display = '';
        toggleButton.style.display = '';
        enableAutoSwitch();
        allowKeyboard = true;
        for (let i = 0; i < questionNumList.length; i++) {
            if (!questionNumList[i].classList.contains('flagged'))
                questionNumList[i].style.display = '';
        }
    }

}

//keyboard button interaction
function getActiveQuestionNumber() {
    return getCurrentActiveButton().id.match(/\d/g).join("");
}

function getActiveQuestionInputNameID() {
    return document.querySelector('.content .tab-content .active .answerList input').getAttribute('name').match(/\d/g).join("");
}

function getActiveQuestionInputType() {
    return document.querySelector('.content .tab-content .active .answerList input').type;
}

document.onkeydown = function (e) {
    if (allowKeyboard) {
        switch (e.keyCode) {
            //turn auto switch question on/off (P)
            case 80:
                autoSwitchQuestion();
                break;
            //goto previous question (First Arrow)
            case 37:
                previousQuestion();
                break;
            case 8:
                previousQuestion();
                break;
            //    goto next question (Right Arrow)
            case 13:
                nextQuestion();
                break;
            case 39:
                nextQuestion();
                break;
            //    choose A (1)
            case 49:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 0);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 0);
                break;
            //    Choose B (2)
            case 50:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 1);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 1);
                break;
            //    Choose C (3)
            case 51:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 2);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 2);
                break;
            //    Choose D (4)
            case 52:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 3);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 3);
                break;
            //        Flag question
            case 70:
                flagQuestion(getActiveQuestionNumber());
                break;
            //        Show flagged only
            case 71:
                showFlaggedQuestionOnly();
                break;
        }
    } else {
        switch (e.keyCode) {
            //    choose A (1)
            case 49:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 0);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 0);
                break;
            //    Choose B (2)
            case 50:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 1);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 1);
                break;
            //    Choose C (3)
            case 51:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 2);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 2);
                break;
            //    Choose D (4)
            case 52:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionInputNameID(), 3);
                else
                    checkboxChecked(getActiveQuestionInputNameID(), 3);
                break;
            //        Flag question
            case 70:
                flagQuestion(getActiveQuestionNumber());
                break;
            //        Show flagged only
            case 71:
                showFlaggedQuestionOnly();
                break;
        }
    }
};

function checkAnsweredAllQuestions() {
    const questionAnswered = document.querySelectorAll('.questionsNum li.answered').length;
    if(questionAnswered<totalQuestions)
        return false;
    return true;
}

function submitExam() {
    if(checkAnsweredAllQuestions())
    {
        if (confirm("Bạn có chắc là muốn nộp bài?")) {
            submitBtn.click();
        } else {
            return false;
        }
    } else {
        alert('Bạn vẫn còn câu hỏi chưa hoàn thành, đừng nộp bài vội!');
        return false;
    }
}

function forceSubmit() {
    alert('Đã hết giờ làm bài! Hệ thống sẽ tự động nộp bài của bạn');
    submitBtn.click();
}