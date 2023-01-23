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

// function toggleAnswer(element) {
//   var answer = element.nextElementSibling;
//   if (answer.style.display === "block") {
//     answer.style.display = "none";
//     element.innerHTML = "+";
//   } else {
//     answer.style.display = "block";
//     element.innerHTML = "-";
//   }
// }


$(function () {
  // タイトルをクリックすると
  $(".js-accordion_title").on("click", function () {
    // クリックした次の要素を開閉
    $(this).next().slideToggle(300);
    // タイトルにopenクラスを付け外しして矢印の向きを変更
    $(this).toggleClass("open", 300);
  });
  });

$('.inviewfadeInUp').on('inview', function (event, isInView) {
  if (isInView) {
    $(this).stop().addClass('fadeInUp');
  } else {
    //$(this).stop().removeClass('fadeInUp');
    $(this).stop().removeClass('');
  }
});
