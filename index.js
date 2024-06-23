document.getElementById("btn").addEventListener("click", calculateGPA);

function getGrades() {
  return document.getElementsByClassName("grade-select");
}

function getGradesArr() {
  var gradeElements = getGrades();
  var gradesArr = [];
  for (var i = 0; i < gradeElements.length; i++) {
    var grade = gradeElements[i].value;
    switch (grade) {
      case "S":
        gradesArr.push(10);
        break;
      case "A":
        gradesArr.push(9);
        break;
      case "B":
        gradesArr.push(8);
        break;
      case "C":
        gradesArr.push(7);
        break;
      case "D":
        gradesArr.push(6);
        break;
      case "E":
        gradesArr.push(5);
        break;
      case "F":
        gradesArr.push(0);
        break;
      default:
        gradesArr.push(null);
        break;
    }
  }
  return gradesArr;
}

function getCreditsArr() {
  var creditElements = document.getElementsByClassName("credits-select");
  var creditsArr = [];
  for (var i = 0; i < creditElements.length; i++) {
    creditsArr.push(parseInt(creditElements[i].value) || 0);
  }
  return creditsArr;
}

function calculateGPA() {
  var gradesEle = getGrades();
  var grades = getGradesArr();
  var credits = getCreditsArr();
  var gradeSum = 0;
  var creditSum = 0;
  for (var i = 0; i < grades.length; i++) {
    if (grades[i] != null) {
      gradeSum += grades[i] * credits[i];
      creditSum += credits[i];
    }
  }

  var gpa = (gradeSum / (creditSum || 1)).toFixed(2);
  var gpaLabel = document.getElementById("gpa-label");
  if (!gpaLabel) {
    // Create the GPA label if it doesn't exist
    gpaLabel = document.createElement("div");
    gpaLabel.id = "gpa-label";
    gpaLabel.className = "output roboto-slab";
    document
      .querySelector(".container")
      .insertBefore(gpaLabel, document.getElementById("btn"));
  }

  // Update the GPA label text
  gpaLabel.innerText = gpa;
}
