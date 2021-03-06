// Active question #1 when load the test
document.querySelector('#questionBtn1').classList.add('active');
document.querySelector('#question1').classList.add('in');
document.querySelector('#question1').classList.add('active');
const totalQuestions = document.querySelectorAll('.answerList').length;
const toggleButton = document.getElementById('navigationButtonStatus');
const toggleStatus = document.getElementById('navigationStatus');
let autoSwitch = true;
let allowKeyboard = true;
const submitBtn = document.getElementById('mainSubmit');

function getCurrentActiveButton() {
    return document.querySelector('.quizWrapper .numbers .active');
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
function radioChecked(questionNum,questionID, index) {
    const contentStatus = document.querySelector('.content');
    if (contentStatus.classList.contains('contentDisabled'))
        return false;
    else {
        const radioCheckbox = document.getElementsByName('question' + questionID)[index];
        radioCheckbox.checked = true;
        let listItems = document.getElementsByClassName('question' + questionNum);
        for (let item of listItems) {
            item.style.background = '';
        }
        const selectedItem = document.getElementsByClassName('question' + questionNum)[index];
        selectedItem.style.backgroundColor = 'lightgray';
        const checkedQuestion = document.querySelector('#questionBtn' + questionNum);
        checkedQuestion.classList.add('answered');
        if (autoSwitch === true) {
            setTimeout(function () {
                nextQuestion();
            }, 100);
        }
    }

}

// Check the Checkbox by pressing on list items, then remove the items background color, go to next question when user choose >=2 checkboxes
function checkboxChecked(questionNum, questionID, index) {
    const contentStatus = document.querySelector('.content');
    if (contentStatus.classList.contains('contentDisabled'))
        return false;
    else {
        let checkboxCheckCounts = 0;
        const checkboxSquare = document.getElementsByName('question' + questionID + '[]')[index];
        checkboxSquare.checked === false ? checkboxSquare.checked = true : checkboxSquare.checked = false;
        let listItems = document.getElementsByClassName('question' + questionNum);
        for (let item of listItems) {
            item.style.background = '';
        }
        let listCheckboxes = document.getElementsByName('question' + questionID + '[]');
        for (let item of listCheckboxes) {
            if (item.checked === true) {
                checkboxCheckCounts++;
            }
        }
        const selectedItem = document.getElementsByClassName('question' + questionNum)[index];
        selectedItem.style.backgroundColor = 'lightgray';
        if (checkboxCheckCounts > 0) {
            const checkedQuestion = document.querySelector('#questionBtn' + questionNum);
            checkedQuestion.classList.add('answered');
        }
        else {
            const checkedQuestion = document.querySelector('#questionBtn' + questionNum);
            checkedQuestion.classList.remove('answered');
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
    const currentActiveButtonContent = document.querySelector('.quizWrapper .numbers .active a span');
    const currentFlagButton = document.getElementById('questionFlag' + orderNum);
    if (currentActiveButton.classList.contains('flagged')) {
        currentActiveButtonContent.classList.remove('flagging');
        currentActiveButton.classList.remove('flagged');
        currentFlagButton.classList.remove('btn-danger');
        currentFlagButton.classList.add('btn-success');
        currentFlagButton.value = "Gắn cờ 🚩"
    } else {
        currentActiveButtonContent.classList.add('flagging');
        currentActiveButton.classList.add('flagged');
        currentFlagButton.classList.remove('btn-success');
        currentFlagButton.classList.add('btn-danger');
        currentFlagButton.value = "Hủy cờ 🚩";
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
            //goto previous question (Left Arrow)
            case 37:
                previousQuestion();
                break;
            //    goto next question (Right Arrow)
            case 39:
                nextQuestion();
                break;
            //    choose A (1)
            case 49:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 0);
                else
                    checkboxChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 0);
                break;
            //    Choose B (2)
            case 50:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 1);
                else
                    checkboxChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 1);
                break;
            //    Choose C (3)
            case 51:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 2);
                else
                    checkboxChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 2);
                break;
            //    Choose D (4)
            case 52:
                if (getActiveQuestionInputType() === 'radio')
                    radioChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 3);
                else
                    checkboxChecked(getActiveQuestionNumber(),getActiveQuestionInputNameID(), 3);
                break;
            //        Flag question
            case 70:
                flagQuestion(getActiveQuestionNumber());
                break;
        }
    } else {
        switch (e.keyCode) {
            //goto previous question (Left Arrow)
            case 37:
                previousQuestion();
                break;
            //    goto next question (Right Arrow)
            case 39:
                nextQuestion();
                break;
        }
    }
};

function checkAnsweredAllQuestions() {
    const questionAnswered = document.querySelectorAll('.questionsNum li.answered').length;
    return questionAnswered<totalQuestions;
}

function submitExam() {
    if(!checkAnsweredAllQuestions())
    {
        const remainTime = document.getElementById('remaining').innerText;
        localStorage.setItem('remainingTime',remainTime);
        bootbox.confirm({
            message: 'Bạn có chắc là muốn nộp bài?',
            backdrop: true,
            buttons: {
                confirm: {
                    label: 'Nộp bài',
                    className: 'btn-primary'
                },
                cancel: {
                    label: 'Hủy',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if(result) {
                    submitBtn.click();
                }
            }
        });
    } else {
        bootbox.alert({
            message: 'Bạn vẫn còn câu hỏi chưa hoàn thành, đừng nộp bài vội!',
            backdrop: true,
        });
        return false;
    }
}

function forceSubmit() {
    const remainTime = document.getElementById('remaining').innerText;
    localStorage.setItem('remainingTime',remainTime);
    bootbox.dialog({
        message: 'Đã hết giờ làm bài! Hệ thống sẽ tự động nộp bài của bạn'
    });
    submitBtn.click();
}