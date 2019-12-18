<template>
  <div class="container mt-3 px-2 py-2">
    <div class="row my-2 mx-3">
      <div class="col-6">
        <img class="logo-class" :src="logo" alt />
      </div>

      <div class="col-6">
        <nav class="navbar navbar-light bg-light">
          <form class="form-inline">
            <input
              id="navBarSearchForm"
              class="form-control mr-sm-2"
              type="search"
              placeholder="Busca artículos, noticias, publicaciones..."
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
            <img :src="home" style="height: 2em" alt />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse d-flex justify-content-around"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >Temas</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Presas</a>
                  <a class="dropdown-item" href="#">Hidroelectrica</a>
                  <a class="dropdown-item" href="#">Tema 3</a>
                  <a class="dropdown-item" href="#">Tema 3</a>
                  <a class="dropdown-item" href="#">Tema 3</a>
                  <a class="dropdown-item" href="#">Tema 3</a>
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Publicaciones</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Acciones y Eventos</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >Autores</a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Nombre</a>
                  <a class="dropdown-item" href="#">Tema</a>
                  <a class="dropdown-item" href="#">Fecha</a>
                </div>
              </li>
              <li class="nav-item ml-5 mt-2">
                <a href="/login">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import logo from "../media/logo.png";
import home from "../media/home.png";

export default {
  name: "header-component",

  data() {
    return {
      logo: logo,
      home: home
    };
  }
};
</script>

<style lang="scss" scoped>
.container {
  background-color: rgba(228, 225, 225, 0.897);
  -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
  box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
}

.logo-class {
  height: 4em;
}

#navBarSearchForm {
  width: 25em !important;
}
</style>