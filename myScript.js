var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}

function signInCallback(authResult) {
    if (authResult['code']) {
  
      // Hide the sign-in button now that the user is authorized, for example:
      $('#signinButton').attr('style', 'display: none');
  
      // Send the code to the server
      $.ajax({
        type: 'POST',
        url: 'https://unisearch2.azurewebsites.net',
        // Always include an `X-Requested-With` header in every AJAX request,
        // to protect against CSRF attacks.
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        },
        contentType: 'application/octet-stream; charset=utf-8',
        success: function(result) {
          // Handle or verify the server response.
        },
        processData: false,
        data: authResult['code']
      });
    } else {
      // There was an error.
    }
}

