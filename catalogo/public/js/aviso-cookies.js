const botonAceptarCookies = document.getElementById("btn-acept-cookies");
const avisoCookies = document.getElementById("aviso-cookies");
const fondoAvisoCookies = document.getElementById("fondo-aviso-cookies");

if (!localStorage.getItem("cookies-aceptadas-catalogo")) {
  avisoCookies.classList.add("activo");
  fondoAvisoCookies.classList.add("activo");
}

botonAceptarCookies.addEventListener("click", () => {
  // console.log('clic a boton');
  avisoCookies.classList.remove("activo");
  fondoAvisoCookies.classList.remove("activo");

  localStorage.setItem("cookies-aceptadas-catalogo", true);
});
