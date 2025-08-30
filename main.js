function openVideo() {
  window.open("https://youtu.be/U-l4ya3ejko?si=6hFt6JKnR35npjpu", "_blank");
}

// Task 2 js

document.querySelector(".custom-btn").addEventListener("click", function () {
  console.log("Button clicked!");

  //   setTimeout(function () {
  //     alert("Welcome");
  //   }, 2000);
});

// setInterval(function () {
//   console.log("Hello");
// }, 1000);

document.querySelector(".custom-btn").addEventListener("click", function () {
  document.body.style.backgroundColor = "white";
  document.body.style.color = "black";
});
