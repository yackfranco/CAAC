function middlewareComprobarNoTenerSesion($this, $localStorage, $sessionStorage, rolAdmin) {
  if (typeof $sessionStorage.usuario == "undefined") {
    $this.next();
  } else {
      $this.redirectTo('/MenuRegistrar');
  }
}