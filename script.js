function requestSample() {
    const { isLoggedIn, userRole } = checkLogin();
  
    if (!isLoggedIn) {
      window.location.href = 'login.html'; // Redirect to login page
    } else if (userRole !== 'receiver') {
      alert('Only receivers can request samples.'); // Show message for non-receivers
    } else {
      const isEligible = isUserEligible(); // Check user's eligibility
  
      if (!isEligible) {
        alert('You are not eligible for this blood sample.'); // Show message for ineligible users
      } else {
        // Logic to handle sample request
        alert('Sample requested successfully!');
        // Add additional logic here, like API calls or redirection
      }
    }
  }
  
  function isUserEligible() {
    const userAge = getUserAge(); // Get user's age (you should have this logic implemented)
    const medicalCondition = getUserMedicalCondition(); // Get user's medical condition
  
    // Check eligibility based on age and medical condition
    if (userAge >= 18 && userAge <= 65 && !medicalCondition.includes('serious_condition')) {
      return true; // User is eligible
    } else {
      return false; // User is not eligible
    }
  }
  
  function checkLogin() {
    const isLoggedIn = localStorage.getItem('isLoggedIn');
    const userRole = localStorage.getItem('userRole');
    return { isLoggedIn: isLoggedIn === 'true', userRole };
  }
  
  // Simulated functions, replace with actual implementation
  function getUserAge() {
    // Get user's age logic
    return 25; // Example age, replace with your logic
  }
  
  function getUserMedicalCondition() {
    // Get user's medical condition logic
    return ['asthma']; // Example medical condition, replace with your logic
  }
  