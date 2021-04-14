
var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  // display the specified tab of the form
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // fixes previous + next buttons
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // will display the correct step indicator
  fixStepIndicator(n)
}

function nextPrev(n) {
  //  figures out which tab to display
  var x = document.getElementsByClassName("tab");
  // exits the function if any field in the current tab is invalid
  if (n == 1 && !validateForm()) return false;
  // hide the current tab
  x[currentTab].style.display = "none";

  currentTab = currentTab + n;
  // submission at the end of the form
  if (currentTab >= x.length) {
    document.getElementById("regForm").submit();
    return false;
  }
  // breaks without this, forgot why
  showTab(currentTab);
}

function validateForm() {
  // validation of form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // checks every input field in the current tab
  for (i = 0; i < y.length; i++) {
    // if a field is empty
    if (y[i].value == "") {
      // add an "invalid" class to the field
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // if the valid status is true, mark the step as finished
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}

function fixStepIndicator(n) {
  // removes the "active" class of all steps
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  // adds the "active" class on the current step
  x[n].className += " active";
}
