function myFunction() {
    var x = document.getElementById("mynav-new");
    if (x.className === "nav-new") {
      x.className += " responsive";
    } else {
      x.className = "nav";
    }
  }