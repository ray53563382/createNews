<template>
  <div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text">
            <p>Crisis Climatica</p>
          </a>
        </div>
        <ul class="nav">
          <li>
            <a class="nav-link" v-on:click="changeData('publicaciones')">
              <i class="far fa-save"></i>
              <p>Crear públicaciones</p>
            </a>
          </li>
       <!--   <li class="nav-item active"> -->
             <li>
            <a class="nav-link" v-on:click="changeData('documentos')">
              <i class="far fa-file-pdf"></i>
              <p>Agregar Documentos</p>
            </a>
          </li>
          <li>
            <a class="nav-link" v-on:click="changeData('informacion')">
              <i class="far fa-share-square"></i>
              <p>Ver información</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg" color-on-scroll="500">
        <div class="container-fluid">
          <a class="navbar-brand">Administrador</a>
          <button
            href
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            aria-controls="navigation-index"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <!-- <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
            <span class="navbar-toggler-bar burger-lines"></span>-->
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="nav navbar-nav mr-auto">
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="nc-icon nc-planet"></i>
                  <span class="notification">5</span>
                  <span class="d-lg-none">Notification</span>
                </a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">Notification 1</a>
                  <a class="dropdown-item" href="#">Notification 2</a>
                  <a class="dropdown-item" href="#">Notification 3</a>
                  <a class="dropdown-item" href="#">Notification 4</a>
                  <a class="dropdown-item" href="#">Another notification</a>
                </ul>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <span class="no-icon">Registra</span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="http://example.com"
                  id="navbarDropdownMenuLink"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="no-icon">Nueva acción</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <span class="no-icon">Salir</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <component :is="dynamicComponent"></component>
        <!-- <addRegister></addRegister> -->
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul class="footer-menu">
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Company</a>
              </li>
              <li>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <a href="#">Blog</a>
              </li>
            </ul>
          </nav>
        </div>
      </footer>
    </div>
  </div>
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
export default {
  data() {
    return {
      vueProp: null,
      dynamicComponent: "addRegister"
    };
  },

  mounted() {
    console.log("Component mounted.");
  },

  methods: {
    changeData: function(msg) {
      if (msg == "publicaciones") {
        this.dynamicComponent = "addRegister";
      } else if (msg == "documentos") {
        this.dynamicComponent = "addDocument";
      } else if (msg == "informacion") {
        this.dynamicComponent = "addInformation";
      }
    }
  },
  components: {
    editor: Editor
  }
};
</script>
