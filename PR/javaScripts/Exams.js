let questions =
    [
        {
            numb: 1,
            question: "The distance between the warning signs and the object you are warning about is usually?",
            answer: "150m",
            options: [
                "100m",
                "150m",
                "170m",
                "200m"
            ]
        },
        {

            numb: 2,

            question: "The yellow line on the sign indicates <img style='' className=\"imgSign99\" src=\"images/Q3.JPG\" height=\"50\" width=\"100\"/> :",
            answer: "All answers are incorrect .",
            options: [
                "The street edge when there are edge stones .",
                "Elba is the edge of the street when there are no curbstones .",
                "Street edge on an inner-city road only .",
                "All answers are incorrect ."
            ]
        },

        {
            numb: 3,
            question: "The sign, which means a place to stop a certain type of vehicle in the form of a bay, is :",
            answer: "<img style='' className=\"imgSign99\" src=\"images/Q2D.JPG\" height=\"50\" width=\"100\"/>",
            options: [
                "<img style='' className=\"imgSign99\" src=\"images/Q2A.JPG\" height=\"50\" width=\"100\"/>",
                "<img style='' className=\"imgSign99\" src=\"images/Q2B.JPG\" height=\"50\" width=\"100\"/>",
                "<img style='' className=\"imgSign99\" src=\"images/Q2C.JPG\" height=\"50\" width=\"100\"/>",
                "<img style='' className=\"imgSign99\" src=\"images/Q2D.JPG\" height=\"50\" width=\"100\"/>"
            ]
        },
        {
            numb: 4,
            question: "What does the sign mean          ....................? <img style='' className=\"imgSign99\" src=\"images/Q4.JPG\" height=\"50\" width=\"100\"/>",
            answer: "line as a continuous dividing line that may not be breached .",
            options: [
                "A broken line on the road surface indicates that you are traveling inside cities .",
                "A white dashed line that may not be permanently breached into .",
                "The driver of the vehicle. The dashed line does not penetrate except for the purpose of overtaking a broken .",
                "line as a continuous dividing line that may not be breached ."
            ]
        },
        {
            numb: 5,
            question: "A red and yellow light together in the optical instrument  means: ",
            answer: "Get ready to walk when the green light appears .",
            options: [
                "Prepare to stop when the red light .",
                "appears Slow down when the yellow light .",
                "appears Pass through the tunnels quickly before the light turns red .",
                "Get ready to walk when the green light appears ."
            ]
        },

        //   {
        //   numb: 6,
        //    question: "A red and yellow light together in the optical instrument  means: ",
//     answer: "Get ready to walk when the green light appears .",
//     options: [
//     "Prepare to stop when the red light .",
//     "appears Slow down when the yellow light .",
//     "appears Pass through the tunnels quickly before the light turns red .",
//     "Get ready to walk when the green light appears ."
// ]
// },

];
//----------------------------------------------------------------------------------------------------------------------

const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");

start_btn.onclick = ()=>
{
    info_box.classList.add("activeInfo");
}

exit_btn.onclick = ()=>
{
    info_box.classList.remove("activeInfo");
}

continue_btn.onclick = ()=>
{
    info_box.classList.remove("activeInfo");
    quiz_box.classList.add("activeQuiz");
    showQuetions(0);
    queCounter(1);
    startTimer(15);
    startTimerLine(0);
}

let timeValue =  15;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");


restart_quiz.onclick = ()=>
{
    quiz_box.classList.add("activeQuiz");
    result_box.classList.remove("activeResult");
    timeValue = 15;
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count);
    queCounter(que_numb);
    clearInterval(counter);
    clearInterval(counterLine);
    startTimer(timeValue);
    startTimerLine(widthValue);
    timeText.textContent = "Time Left";
    next_btn.classList.remove("show");
}


quit_quiz.onclick = ()=>
{
    window.location.reload();
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");


next_btn.onclick = ()=>
{
    if(que_count < questions.length - 1)
    {

        que_count++;
        que_numb++;
        showQuetions(que_count);
        queCounter(que_numb);
        clearInterval(counter);
        clearInterval(counterLine);
        startTimer(timeValue);
        startTimerLine(widthValue);
        timeText.textContent = "Time Left";
        next_btn.classList.remove("show");
    }
    else
    {
        clearInterval(counter);
        clearInterval(counterLine);
        showResult();
    }
}

function showQuetions(index)
{
    const que_text = document.querySelector(".que_text");

    let que_tag = '<span>'+ questions[index].numb + ". " + questions[index].question +'</span>';
    let option_tag = '<div class="option"><span>'+ questions[index].options[0] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[1] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[2] +'</span></div>'
        + '<div class="option"><span>'+ questions[index].options[3] +'</span></div>';
    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;

    const option = option_list.querySelectorAll(".option");

    for(i=0; i < option.length; i++)
    {
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

function optionSelected(answer)
{
    clearInterval(counter);
    clearInterval(counterLine);
    let userAns = answer.textContent;
    let correcAns = questions[que_count].answer;
    const allOptions = option_list.children.length;

    if(userAns == correcAns)
    {

        userScore += 1;
        answer.classList.add("correct");
        answer.insertAdjacentHTML("beforeend", tickIconTag);
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    }
    else
    {

        answer.classList.add("incorrect");
        answer.insertAdjacentHTML("beforeend", crossIconTag);
        console.log("Wrong Answer");

        for(i=0; i < allOptions; i++)
        {
            if(option_list.children[i].textContent == correcAns){
                option_list.children[i].setAttribute("class", "option correct");
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                console.log("Auto selected correct answer.");
            }
        }
    }
    for(i=0; i < allOptions; i++)
    {
        option_list.children[i].classList.add("disabled");
    }
    next_btn.classList.add("show");
}

function showResult(){
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.add("activeResult");
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 3)
    {

        let scoreTag = '<span>and congrats! 🎉, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else if(userScore > 1)
    {
        let scoreTag = '<span>and nice 😎, You got <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
    else
    {
        let scoreTag = '<span>and sorry 😐, You got only <p>'+ userScore +'</p> out of <p>'+ questions.length +'</p></span>';
        scoreText.innerHTML = scoreTag;
    }
}

function startTimer(time)
{
    counter = setInterval(timer, 1000);
    function timer()
    {
        timeCount.textContent = time;
        time--;
        if(time < 9)
        {
            let addZero = timeCount.textContent;
            timeCount.textContent = "0" + addZero;
        }
        if(time < 0){ //if timer is less than 0
            clearInterval(counter);
            timeText.textContent = "Time Off";
            const allOptions = option_list.children.length;
            let correcAns = questions[que_count].answer;
            for(i=0; i < allOptions; i++){
                if(option_list.children[i].textContent == correcAns)
                {
                    option_list.children[i].setAttribute("class", "option correct");
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for(i=0; i < allOptions; i++){
                option_list.children[i].classList.add("disabled");
            }
            next_btn.classList.add("show");
        }
    }
}

function startTimerLine(time){
    counterLine = setInterval(timer, 29);
    function timer()
    {
        time += 1; //upgrading time value with 1
        time_line.style.width = time + "px";
        if(time > 549)
        {
            clearInterval(counterLine);
        }
    }
}

function queCounter(index){
    //creating a new span tag and passing the question number and total question
    // let totalQueCounTag = '<span><p>'+ index +'</p> of <p>'+ questions.length +'</p> Questions</span>';
    // bottom_ques_counter.innerHTML = totalQueCounTag;  //adding new span tag inside bottom_ques_counter
}
