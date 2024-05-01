// Crea una función para seleccionar elementos del DOM
const $ = (element) => document.querySelector(element);

// Función para eliminar mensajes de error previos
const clearErrors = () => {
  // Encuentra todos los elementos con clase 'error-message'
  const errorMessages = document.querySelectorAll(".error-message");
  // Elimina cada elemento encontrado
  errorMessages.forEach((msg) => msg.remove());
};

const generateErrorMessage = (element, message) => {
  const error = document.createElement("p");
  error.style.color = "red";
  error.style.fontSize = "12px";
  error.textContent = message;
  error.classList.add("error-message");
  element.insertAdjacentElement("beforebegin", error);
};

// Función para validar campos del formulario
const validation = () => {
  // Limpia errores previos
  clearErrors();

  // Define los campos del formulario y sus reglas de validación
  const fields = {
    // Campo de texto solo con letras y espacios
    select: {
      element: $("#country"), // Elemento HTML para el campo de texto
      regEx: /./, // Expresión regular para validar
      message: "Solo se aceptan letras", // Mensaje de error
    },
    // Campo de correo electrónico
    email: {
      element: $("#input-email"), // Elemento HTML para el correo
      regEx: /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i, // RegEx para correos válidos
      message: "El correo no es válido", // Mensaje de error
    },
    // Campo de contraseña con requisitos específicos
    password: {
      element: $("#input-password"), // Elemento para la contraseña
      regEx:
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]).{8,}$/, // Requisitos para la contraseña
      message: "La contraseña no cumple con los requisitos mínimos", // Mensaje de error
    },
    // Campo para URL
    url: {
      element: $("#input-url"), // Elemento para la URL
      regEx: /^(http|https):\/\/[^ "]+$/, // RegEx para URLs válidas
      message: "La URL no es válida", // Mensaje de error
    },
    // Campo para números enteros
    int: {
      element: $("#input-int-number"), // Elemento para el número entero
      regEx: /^[0-9]+$/, // Solo acepta dígitos
      message: "Solo se aceptan números", // Mensaje de error
    },
    // Campo para números de teléfono
    phone: {
      element: $("#input-phone-number"), // Elemento para el teléfono
      regEx: /^\d{10}$/, // Requiere 10 dígitos
      message: "El número de teléfono no es válido", // Mensaje de error
    },
    // Campo para números decimales (float)
    float: {
      element: $("#input-float-number"), // Elemento para números decimales
      regEx: /^[+-]?\d+(\.\d+)?$/, // RegEx para números decimales
      message: "Solo se aceptan números", // Mensaje de error
    },
    // Campo para códigos postales
    postalCode: {
      element: $("#input-postal-code"), // Elemento para código postal
      regEx: /^\d{5}$/, // Requiere 5 dígitos
      message: "El código postal no es válido", // Mensaje de error
    },
    fileChosser: {
      element: $("#file-chooser"),
      regEx: /./,
      message: "Debe seleccionar un archivo",
      isFile: true,
    },
  };

  let isValid = true; // Variable para indicar si el formulario es válido

  // Recorre cada campo definido para validar
  for (const field in fields) {
    const { element, regEx, message, isfile } = fields[field]; // Extrae información del campo

    if (isfile && !element.files[0]) {
      generateErrorMessage(element, message);
      isValid = false;
      continue;
    }

    if (!element.value) {
      // Si el campo está vacío
      generateErrorMessage(element, "Este campo es obligatorio"); // Genera mensaje de error
      isValid = false; // Indica que el formulario no es válido
      continue; // Continúa con el siguiente campo
    }

    if (!regEx.test(element.value)) {
      // Si el valor no cumple con la RegEx
      if (
        !element.nextElementSibling ||
        !element.nextElementSibling.classList.contains("error-message")
      ) {
        // Si no hay un mensaje de error previo
        generateErrorMessage(element, message); // Genera mensaje de error
      }
      isValid = false; // Indica que el formulario no es válido
    }
  }

  return isValid; // Devuelve si el formulario es válido o no
};

// Escucha el evento de clic en el botón de envío
$("#btn-submit").addEventListener("click", (event) => {
  event.preventDefault(); // Prevenir el envío del formulario
  const formIsValid = validation(); // Llama a la función de validación
  if (formIsValid) {
    // Si el formulario es válido
    console.log("Formulario válido"); // Muestra mensaje de validación por consola
    // Puedes realizar el envío del formulario o acciones adicionales
    $("#form").submit();
  } else {
    console.log("Formulario inválido"); // Muestra mensaje si el formulario es inválido por consola
  }
});
