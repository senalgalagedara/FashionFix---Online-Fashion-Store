const availableKeywords = [
  { keyword: 'Hustal Tee', url: 'product1.php' },
  { keyword: 'Cool Hat', url: 'product2.php' }
 
];
const resultBox = document.querySelector(".result-box");
const inputBox = document.getElementById("input-box");

inputBox.addEventListener("input", function () {
  let input = inputBox.value.toLowerCase();  
  let result = [];

  if (input.length) {
    result = availableKeywords.filter((item) => {
      return item.keyword.toLowerCase().includes(input);
    });
    display(result);  
  } else {
    resultBox.style.display = "none";  
  }
});


