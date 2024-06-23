# VITAP Grade Calculator

This is a simple web application to calculate the GPA (Grade Point Average) for students based on their grades and credits. The application allows users to select grades and credits for various subjects and then calculates the GPA based on these inputs.

## Features

- Dynamic grade and credit selection.
- Real-time GPA calculation.
- Responsive design to ensure compatibility across different devices.
- Overlay background image for enhanced UI.

## Getting Started

### Prerequisites

To run this project, you need a modern web browser. No additional software or server is required.

### Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/your-username/vitap-grade-calculator.git
   
2. **Navigate to the Project Directory**

   ```bash
   cd vitap-grade-calculator

3. **Open the index.html File**

  Open the index.html file in your preferred web browser.

**Usage**
Open the index.html file in a web browser.
Select the grades and credits for each subject using the dropdown menus.
Click the "Calculate" button to compute the GPA.
The GPA will be displayed above the "Calculate" button.

**Project Structure**
index.html - The main HTML file.
styles.css - The CSS file for styling the application.
index.js - The JavaScript file containing the logic for GPA calculation.

**Code Overview**
**HTML**
The HTML file contains the structure of the application, including dropdowns for grades and credits, and a button to calculate the GPA.

**CSS**
The CSS file defines the styles for the application, including the background, layout, and responsiveness.

**JavaScript**
The JavaScript file contains functions to:
1. Retrieve grades and credits.
2. Calculate the GPA.
3. Dynamically update the displayed GPA.
   
**Key Functions**
1. getGrades(): Retrieves the grade elements.
2. getGradesArr(): Converts grade selections to numeric values.
3. getCreditsArr(): Retrieves and converts credit selections to numeric values.
4. calculateGPA(): Calculates the GPA and updates the UI.
   
**Contributing**
Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.
