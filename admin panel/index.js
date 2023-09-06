// Get all the section elements
const sections = document.querySelectorAll('section');

// Get all the navigation links
const navLinks = document.querySelectorAll('nav ul li a');

// Add click event listeners to the navigation links
navLinks.forEach((link, index) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();

    // Remove 'active' class from all navigation links
    navLinks.forEach((link) => {
      link.classList.remove('active');
    });

    // Add 'active' class to the clicked link
    link.classList.add('active');

    // Hide all sections
    sections.forEach((section) => {
      section.style.display = 'none';
    });

    // Show the corresponding section
    sections[index].style.display = 'block';
  });
});

// Show the dashboard section by default
sections[0].style.display = 'block';
navLinks[0].classList.add('active');
