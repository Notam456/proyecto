<script> function redireccionarPagina() {
  // Especificar la URL a la que se desea redirigir
  window.location.href = "/app/Home/index.php";

  // Opcional: establecer un tiempo de espera antes de la redirección (en milisegundos)
  setTimeout(redireccionarPagina, 0);
}

// Llamar a la función para iniciar la redirección
redireccionarPagina();

</script>