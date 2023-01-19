// function toggleAnswer(element) {
//   var answer = element.nextElementSibling;
//   if (answer.style.display === "block") {
//     answer.style.display = "none";
//     element.innerHTML = "回答を見る";
//   } else {
//     answer.style.display = "block";
//     element.innerHTML = "回答を隠す";
//   }
// }

function toggleAnswer(element) {
  var answer = element.nextElementSibling;
  if (answer.style.display === "block") {
    answer.style.display = "none";
    element.innerHTML = "+";
  } else {
    answer.style.display = "block";
    element.innerHTML = "-";
  }
}
