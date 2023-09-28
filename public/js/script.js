const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
const yearPicker=document.getElementById("year");
const yearSelect=document.getElementById("year_appointed");
const responseMessage=document.getElementById('response-alert');

let formStepsNum = 0;
let blackInput=0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    validateStep(formStepsNum);
    // formStepsNum++;
    // updateFormSteps();
    // updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}

let startYear =1900;
for(let n=new Date().getFullYear();n>startYear;n--){
  var newOption=document.createElement("option");
  var yearOption=document.createElement("option");
  newOption.value=n;
  newOption.text=n;
  yearOption.value=n;
  yearOption.text=n;
  yearPicker.append(newOption);
  yearSelect.append(yearOption);
}

function validateStep(step){
  let blackInputsCount=0;
  const stepInputs = formSteps[step].querySelectorAll('input');
  const selectBox=formSteps[step].querySelectorAll('select');
  const textBox=formSteps[step].querySelectorAll('textarea');
  let isValid = true;

  stepInputs.forEach(input=>{
    if(input.value.trim() === ''){
      blackInputsCount=blackInputsCount+1;
      isValid=false;
      var inputParent=input.parentNode;
      var errorSect=inputParent.querySelector("span");
      errorSect.style.display="block";
    }else{
      var inputParent=input.parentNode;
      var errorSect=inputParent.querySelector("span");
      errorSect.style.display="none";
    }
  });
  if(selectBox.value === ''){
    isValid=false;
    var selectParent=selectBox.parentNode;
    var selectionError=selectParent.querySelector("span");
    selectionError.style.display="block";
  }

  if(textBox.value === ''){
    isValid=false;
    var textParent=textBox.parentNode;
    var textError=textParent.querySelector("span");
    textError.style.display="block";
  }
  if(isValid){
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  }
}

setTimeout(function(){
  if(responseMessage){
    formErrorMessage.style.display='none';
  }
},10000);