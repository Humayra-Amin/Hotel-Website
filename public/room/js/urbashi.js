document.addEventListener("DOMContentLoaded", () => {
    var destination = document.getElementById("destination");
    var europe = document.getElementById("europe");
    var europeRadios = document.querySelectorAll(".europe-radios");
  
    destination.addEventListener("change", () => {
      if (destination.value === "Europe") {
        europe.style.display = "block";
        for (var i = 0; i < europeRadios.length; i++) {
          europeRadios[i].required = true;
        }
      } else {
        europe.style.display = "none";
        for (var i = 0; i < europeRadios.length; i++) {
          europeRadios[i].required = false;
        }
      }
    });
  
    function validateName(name) {
      var trimmedName = name.trim();
      var nameRegex = /^[A-Za-z\s-']+$/;
      return trimmedName !== "" && nameRegex.test(trimmedName);
    }
  
    function validateEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  
    function validatePhoneNumber(phoneNumber) {
      var cleanedNumber = String(phoneNumber).replace(/\D/g, "");
      var polishNumberRegex = /^(?:\+?(?:48)?|0{0,2}48)?[ -]?([1-9]{2}[ -]?\d{3}[ -]?\d{2}[ -]?\d{2})$/;
      return polishNumberRegex.test(cleanedNumber);
    }
  
    function validateSelect(selectValue) {
      return selectValue !== "";
    }
  
    function validateRadioButtons(radioButtons) {
      for (var i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
          return true;
        }
      }
      return false;
    }
  
    function validateForm(
      firstName,
      lastName,
      email,
      phone,
      destinationValue,
      europeRadios
    ) {
      var textValidation = false;
      var phoneValidation = false;
      var emailValidation = false;
      var listValidation = false;
      var radioValidation = false;
  
      if (validateName(firstName) && validateName(lastName)) {
        textValidation = true;
      }
  
      emailValidation = validateEmail(email);
      phoneValidation = validatePhoneNumber(phone);
      listValidation = validateSelect(destinationValue);
  
      if (destinationValue === "Europe") {
        radioValidation = validateRadioButtons(europeRadios);
      } else {
        radioValidation = true;
      }
  
      if (
        textValidation &&
        emailValidation &&
        phoneValidation &&
        listValidation &&
        radioValidation
      ) {
        return true;
      } else {
        return false;
      }
    }
  
    function toggleSubmitButton(event) {
      var submitButton = document.getElementById("submitButton");
      var isValid = validateForm(
        event.currentTarget.form.firstName.value,
        event.currentTarget.form.lastName.value,
        event.currentTarget.form.email.value,
        event.currentTarget.form.phone.value,
        event.currentTarget.form.destination.value,
        event.currentTarget.form.europe
      );
  
      if (isValid) {
        submitButton.removeAttribute("disabled");
        submitButton.style.backgroundColor = "#92fe9d";
      } else {
        submitButton.setAttribute("disabled", true);
        submitButton.style.backgroundColor = "grey";
      }
    }
  
    var form = document.getElementById("form");
  
    form.addEventListener("submit", function (event) {
      event.preventDefault();
  
      var firstName = event.currentTarget.firstName.value;
      var lastName = event.currentTarget.lastName.value;
      var email = event.currentTarget.email.value;
      var phone = event.currentTarget.phone.value;
      var destinationValue = event.currentTarget.destination.value;
      var europeRadios = event.currentTarget.europe;
  
      var isValid = validateForm(
        firstName,
        lastName,
        email,
        phone,
        destinationValue,
        europeRadios
      );
      if (isValid) {
        alert("Thank you for submitting you interest in our offer!");
  
        form.reset();
      }
    });
  
    var formInputs = document.querySelectorAll("input, select");
    formInputs.forEach(function (input) {
      input.addEventListener("input", function (event) {
        toggleSubmitButton(event);
      });
    });
  });
  