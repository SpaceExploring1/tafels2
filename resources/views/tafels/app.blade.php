<?// resources/js/app.js
// Import Bootstrap JavaScript for components and utilities
import './bootstrap';

// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", () => {
    const text = "Welkom bij Tafels Oefenen!"; // Text to animate
    const typingText = document.getElementById("typingText");
    const introText = document.getElementById("introText");
    const startButton = document.getElementById("startButton");
    let index = 0;

    // Typing animation function
    function type() {
        if (index < text.length) {
            typingText.textContent += text.charAt(index);
            index++;
            setTimeout(type, 100); // 100ms delay between characters
        } else {
            // Once typing is complete, show additional elements
            typingText.classList.add("typed"); // Add class for cursor styling
            introText.style.display = "block";
            startButton.style.display = "inline-block";
        }
    }

    // Start typing if the element exists
    if (typingText) {
        type();
    }
});