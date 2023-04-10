// Define an array of course objects with their properties
const courses = [
    {
      name: "Introduction to Programming",
      enrollmentKey: null // Enrollment key will be generated later
    },
    {
      name: "Web Development",
      enrollmentKey: null // Enrollment key will be generated later
    },
    {
      name: "Data Science",
      enrollmentKey: null // Enrollment key will be generated later
    }
  ];
  
  // Define a function to generate a random string of specified length
  function generateRandomString(length) {
    let result = "";
    const characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (let i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
  }
  
  // Generate a unique enrollment key for each course
  for (let i = 0; i < courses.length; i++) {
    let key = generateRandomString(8); // Generate a random string of 8 characters
    while (courses.some(course => course.enrollmentKey === key)) {
      // If the generated key already exists for another course, generate a new one
      key = generateRandomString(8);
    }
    courses[i].enrollmentKey = key; // Assign the unique key to the current course object
  }
  
  // Print the generated enrollment keys for each course
  for (let i = 0; i < courses.length; i++) {
    console.log(courses[i].name + ": " + courses[i].enrollmentKey);
  }
  