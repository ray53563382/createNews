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
                            class="nav-link dropdown-toggle"
                            id="navbarDropdown"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            @mouseenter="display_menu"
                            >Temas</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                            ref="menubtn"
                            @mouseleave="hide_menu"
                        >
                            <a @click="search_theme('1')" class="dropdown-item"
                                >Crisis Climática y Conservación</a
                            >
                            <a @click="search_theme('2')" class="dropdown-item"
                                >Minería</a
                            >
                            <a @click="search_theme('3')" class="dropdown-item"
                                >Hidroeléctricas y eólicas</a
                            >
                            <a @click="search_theme('4')" class="dropdown-item"
                                >Petróleo, Fracking y Gasoductos</a
                            >

                            <a @click="search_theme('5')" class="dropdown-item"
                                >Derechos indígenas</a
                            >
                            <a @click="search_theme('6')" class="dropdown-item"
                                >Tierra y Territorio</a
                            >
                            <a @click="search_theme('7')" class="dropdown-item"
                                >Agua</a
                            >
                            <a @click="search_theme('8')" class="dropdown-item"
                                >Bosques y deforestación</a
                            >

                            <a @click="search_theme('9')" class="dropdown-item"
                                >Megaproyectos
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a @click="fetch_all_docs" class="nav-link"
                            >Publicaciones</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Acciones y Eventos</a>
                    </li>
                    <li @click="all_authors" class="nav-item">
                        <a class="nav-link">Autores</a>
                    </li>
                    <li class="nav-item" @click="all_documents">
                        <a class="nav-link">Documentos</a>
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

        fetch_all_docs() {
            location.replace("/search/get_all_docs");
        },

        all_authors() {
            this.searchString = "all";
            location.replace("/search/" + this.searchString);
        },
        all_documents() {
            this.searchString = "allDocuments";
            location.replace("/search/" + this.searchString);
        },
        display_menu() {
            this.$refs.menubtn.classList.add("show");
        },

        hide_menu() {
            this.$refs.menubtn.classList.remove("show");
        },

        search_theme(theme) {
            location.replace("/searchbytheme/" + theme);
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
