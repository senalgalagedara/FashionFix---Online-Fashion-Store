
const availableKeywords = [
  { keyword: 'Hustal Tee', url: 'product1.php' },
  { keyword: 'Cool Hat', url: 'product2.php' },
  { keyword: 'Sneakers', url: 'product3.php' },
 
];

// Get the input and result box elements
const resultBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");

// Add event listener to detect input in the search box
inputBox.addEventListener("input", function () {
  let input = inputBox.value.toLowerCase();  // Get input value
  let result = [];

  if (input.length) {
    // Filter available keywords based on input
    result = availableKeywords.filter((item) => {
      return item.keyword.toLowerCase().includes(input);
    });
    display(result);  // Call display function to show results
  } else {
    resultBox.style.display = "none";  // Hide the result box if input is empty
  }
});

// Display function to
