function getGPAElements() {
  var gpaEle = document.querySelectorAll(".gpa-input");
  var gpaArr = [];
  for (var i = 0; i < gpaEle.length; i++) {
    gpaArr.push(parseFloat(gpaEle[i].value) || 0);
  }
  return gpaArr;
}

function getCreditsElements() {
  var creditsEle = document.querySelectorAll(".credits-input");
  var creditsArr = [];
  for (var i = 0; i < creditsEle.length; i++) {
    creditsArr.push(parseFloat(creditsEle[i].value) || 0);
  }
  return creditsArr;
}

function calculateGPA() {
  var gpaArr = getGPAElements();
  var creditsArr = getCreditsElements();
  var gpaSum = 0;
  var creditsSum = 0;
  for (var i = 0; i < gpaArr.length; i++) {
    if (gpaArr[i] != 0 && creditsArr[i] != 0) {
      gpaSum += gpaArr[i] * creditsArr[i];
      creditsSum += creditsArr[i];
    }
  }
  var gpa = (gpaSum / (creditsSum || 1)).toFixed(2);

  var gpaLabel = document.getElementById("gpa-label");
  if (!gpaLabel) {
    // Create the GPA label if it doesn't exist
    gpaLabel = document.createElement("div");
    gpaLabel.id = "gpa-label";
    gpaLabel.className = "output roboto-slab";
    gpaLabel.style.borderRadius = "50px";
    document
      .querySelector(".container")
      .insertBefore(gpaLabel, document.getElementById("btn"));
  }

  gpaLabel.innerHTML = gpa;
}

document.getElementById("btn").addEventListener("click", calculateGPA);
