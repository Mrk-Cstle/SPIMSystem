  function submitForm() {
    // Get the form
    var form = document.getElementById("myForm");

    // Prevent the default action of the form
    event.preventDefault();

    // Manually submit the form
    form.submit();
    
    // Get the modal
    var modal = document.getElementById("myModal");

    // Show the modal
    modal.style.display = "block";
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }