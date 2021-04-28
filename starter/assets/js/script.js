function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  } 

function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}


function deleteRow(btn) {
  var row = btn.parentNode.parentNode;
  row.parentNode.removeChild(row);


}

































































































// function remembreMe(){
  //     const rmCheck = document.getElementById("rememberMe"),
  //         emailInput = document.getElementById("email");
  
  //     if (localStorage.checkbox && localStorage.checkbox !== "") {
  //       rmCheck.setAttribute("checked", "checked");
  //       emailInput.value = localStorage.username;
  //     } else {
  //       rmCheck.removeAttribute("checked");
  //       emailInput.value = "";
  //     }
  
  //     function lsRememberMe() {
  //       if (rmCheck.checked && emailInput.value !== "") {
  //         localStorage.username = emailInput.value;
  //         localStorage.checkbox = rmCheck.value;
  //       } else {
  //         localStorage.username = "";
  //         localStorage.checkbox = "";
  //       }
  //     }
  // }





// function remembreMe(){
  //     const rmCheck = document.getElementById("rememberMe"),
  //         emailInput = document.getElementById("email");
  
  //     if (localStorage.checkbox && localStorage.checkbox !== "") {
  //       rmCheck.setAttribute("checked", "checked");
  //       emailInput.value = localStorage.username;
  //     } else {
  //       rmCheck.removeAttribute("checked");
  //       emailInput.value = "";
  //     }
  
  //     function lsRememberMe() {
  //       if (rmCheck.checked && emailInput.value !== "") {
  //         localStorage.username = emailInput.value;
  //         localStorage.checkbox = rmCheck.value;
  //       } else {
  //         localStorage.username = "";
  //         localStorage.checkbox = "";
  //       }
  //     }
  // }
