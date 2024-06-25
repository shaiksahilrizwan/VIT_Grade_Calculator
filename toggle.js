// Get the checkbox element
const toggle_btn = document.querySelector("#checkbox");

// Function to set the theme
function setTheme(theme) {
  if (theme === "dark") {
    document.body.classList.add("dark-mode");
    toggle_btn.checked = true;
  } else {
    document.body.classList.remove("dark-mode");
    toggle_btn.checked = false;
  }
}

// Check local storage for theme preference
const savedTheme = localStorage.getItem("theme");
if (savedTheme) {
  setTheme(savedTheme);
} else {
  setTheme("light"); // Default to light mode if no preference is saved
}

// Add event listener to toggle the theme and save preference to local storage
toggle_btn.addEventListener("change", () => {
  if (toggle_btn.checked) {
    document.body.classList.add("dark-mode");
    localStorage.setItem("theme", "dark");
  } else {
    document.body.classList.remove("dark-mode");
    localStorage.setItem("theme", "light");
  }
});
