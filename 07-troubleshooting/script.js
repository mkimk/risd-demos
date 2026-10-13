const screen = document.querySelector(".screen");
const status = document.querySelector(".status");
const button = document.querySelector(".switch");

button.addEventListener("click", function () {
  let isOn = false;

  if (isOn === false) {
    screen.classList.add("on");
    status.textContent = "ON";
    button.textContent = "Turn off";
    isOn = true;
  } else {
    screen.classList.remove("on");
    status.textContent = "OFF";
    button.textContent = "Turn on";
    isOn = false;
  }
});