<template>
    <div class="container">
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <img :src="logo" alt="" class="navbar-brand logo-class" />

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#mostrarTemasToggle"
                aria-controls="mostrarTemasToggle"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div
                class="justify-content-center collapse navbar-collapse mx-3 my-3"
                id="mostrarTemasToggle"
            >
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a
                            href=""
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Temas</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                        >
                            <a href="" class="dropdown-item"
                                >Crisis Climática y Conservación</a
                            >
                            <a href="" class="dropdown-item">Minería</a>
                            <a href="" class="dropdown-item"
                                >Petróleo, Fracking y Gasoductos</a
                            >
                            <a href="" class="dropdown-item"
                                >Hidroeléctricas y Eólicas</a
                            >
                            <a href="" class="dropdown-item">Agua</a>
                            <a href="" class="dropdown-item">Bosques</a>
                            <a href="" class="dropdown-item"
                                >Tierra, Territorio y Derechos Indígenas</a
                            >
                            <a href="" class="dropdown-item">Megaproyectos </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Publicaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Acciones y Eventos</a>
                    </li>
                    <li @click="all_authors" class="nav-item">
                        <a class="nav-link">Autores</a>
                    </li>
                </ul>
            </div>
            <div class="form-inline my-3">
                <input
                    v-on:keyup.enter="search"
                    v-model="searchString"
                    class="form-control mx-3"
                    type="search"
                    placeholder="Busca en nuestras publicaciones."
                    aria-label="Search"
                />
                <button
                    @click="search"
                    class="btn btn-outline-success mx-3 my-2 my-sm-0"
                >
                    Buscar
                </button>
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
            home: home,
            searchString: null
        };
    },

    methods: {
        search() {
            // console.log(this.searchString);
            location.replace("/search/" + this.searchString);
        },

        all_authors() {
            this.searchString = "all";
            location.replace("/search/" + this.searchString);
        }
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

.nav-item {
    cursor: pointer !important;
}

.logo-class {
    height: 2em;
}
</style>
