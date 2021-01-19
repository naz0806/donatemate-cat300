const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

var password = document.getElementById("pass")
      , confirm_password = document.getElementById("cpass");
    
      
    
    
    function validatePassword(){
       
      if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
      } else {
        confirm_password.setCustomValidity('');
      }
    }
    
    
    
    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    
    function showpass() {
      var xx = document.getElementById("pass");
      var yy = document.getElementById("cpass");
      var z = document.getElementById("password");
      if (xx.type === "password") {
        xx.type = "text";
      } else {
        xx.type = "password";
      }
      if (yy.type === "password") {
        yy.type = "text";
      } else {
        yy.type = "password";
      }
      if (z.type === "password") {
        z.type = "text";
      } else {
        z.type = "password";
      }
    }

    document.querySelector('.hamburger-menu').
    addEventListener("click", () =>{
        document.querySelector(".container").classList.toggle("change");
    });
    
    document.querySelector(".scroll-btn").addEventListener("click", () => {
        document.querySelector("html").style.scrollBehavior = "smooth";
        setTimeout(() => {
          document.querySelector("html").style.scrollBehavior = "unset";
        }, 1000);
      });
    
      var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
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
    
    
    
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    
    function mySubmit() {
      alert("Your message was sent successfully, we will get back to you by the email provided. Thank You!");
    }
    
    
    document.querySelector('.hamburger-menu').
    addEventListener("click", () =>{
        document.querySelector(".container").classList.toggle("change");
    });
    
    document.querySelector(".scroll-btn").addEventListener("click", () => {
        document.querySelector("html").style.scrollBehavior = "smooth";
        setTimeout(() => {
          document.querySelector("html").style.scrollBehavior = "unset";
        }, 1000);
      });
    
      var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
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
    
    
    
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    
    function mySubmit() {
      alert("Your message was sent successfully, we will get back to you by the email provided. Thank You!");
    }