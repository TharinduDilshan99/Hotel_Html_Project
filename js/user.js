function passw() {
  var x = document.getElementById("passs");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function validate() {
  var x = document.getElementById("fname").value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
  var y = document.getElementById("ename").value;
  if (y == "") {
    alert("E--mail must be filled out");
    return false;
  }
  var z = document.getElementById("passs").value;
  if (z == "") {
    alert("Password must be filled out");
    return false;
  }
}