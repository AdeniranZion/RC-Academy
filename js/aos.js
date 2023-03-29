// Initialize AOS library
AOS.init({
    duration: 800, // animation duration in milliseconds
    easing: 'ease-in-out', // animation easing
    once: false // whether to animate elements only once or every time they appear on screen
  });
  
  // Apply animations to elements with data-aos attribute
  AOS.refresh();