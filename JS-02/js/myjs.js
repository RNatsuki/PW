const $ = (element) => document.querySelector(element);

const clearErrors = () => {
  // Remueve todos los elementos con clase 'error-message'
  const errorMessages = document.querySelectorAll('.error-message');
  errorMessages.forEach((msg) => msg.remove());
};

const validation = () => {
  // Limpiar errores anteriores
  clearErrors();

  const fields = {
    text: {
      element: $("#input-text"),
      regEx: /^([a-zA-Z\s])+$/,
      message: "Solo se aceptan letras",
    },
    email: {
      element: $("#input-email"),
      regEx: /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i,
      message: "El correo no es válido",
    },
    password: {
      element: $("#input-password"),
      regEx:
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/,
      message: "La contraseña no es válida",
    },
    url: {
      element: $("#input-url"),
      regEx: /^(http|https):\/\/[^ "]+$/,
      message: "La URL no es válida",
    },
    int: {
      element: $("#input-int-number"),
      regEx: /^[0-9]+$/,
      message: "Solo se aceptan números",
    },
    phone: {
      element: $("#input-phone-number"),
      regEx: /^\d{10}$/,
      message: "El número de teléfono no es válido",
    },
    float: {
      element: $("#input-float-number"),
      regEx: /^[+-]?\d+(\.\d+)?$/,
      message: "Solo se aceptan números",
    },
    postalCode: {
      element: $("#input-postal-code"),
      regEx: /^\d{5}$/,
      message: "El código postal no es válido",
    },
  };

  let isValid = true;

  for (const field in fields) {
    const { element, regEx, message } = fields[field];

    if (!element.value) continue; // No validar campos vacíos

    if (!regEx.test(element.value)) {
      // Crea un mensaje de error solo si no existe ya
      if (!element.nextElementSibling || !element.nextElementSibling.classList.contains('error-message')) {
        const error = document.createElement("p");
        error.textContent = message;
        error.classList.add("error-message");
        element.insertAdjacentElement('afterend', error);
      }
      isValid = false;
    }
  }

  return isValid;
};

$("#btn-submit").addEventListener("click", (event) => {
  event.preventDefault(); // Prevenir el envío del formulario si hay errores
  const formIsValid = validation();
  if (formIsValid) {
    // Si es válido, puedes permitir que el formulario se envíe
    console.log("Formulario válido");
    // Aquí puedes realizar el envío del formulario o cualquier otra acción necesaria
  } else {
    console.log("Formulario inválido");
  }
});
