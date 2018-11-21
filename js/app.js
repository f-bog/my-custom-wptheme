const navigation = document.getElementById("nav");
function hamburgerToggle(x) {
  if (!x.classList.contains("change")) {
    console.log("it dont has change");
    navigation.style.display = "block";
  } else {
    console.log("it has change");
    console.log(navigation);
    navigation.style.display = "none";
  }
  x.classList.toggle("change");
}
