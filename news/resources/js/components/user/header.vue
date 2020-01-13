<template>
    <header>
        <div class="bg-191">
            <div class="container">
                <div
                    class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5"
                >
                    <ul
                        class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10"
                    >
                        <li>
                            <a class="pl-0 pl-sm-10">Sobre nosotros</a>
                        </li>
                        <li><a>Contacto</a></li>
                    </ul>
                    <ul
                        class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5"
                    >
                        <li>
                            <a class="pl-0 pl-sm-10"
                                ><i class="ion-social-facebook"></i
                            ></a>
                        </li>
                        <li>
                            <a><i class="ion-social-twitter"></i></a>
                        </li>
                        <li>
                            <a><i class="ion-social-google"></i></a>
                        </li>
                        <li>
                            <a><i class="ion-social-instagram"></i></a>
                        </li>
                        <li>
                            <a><i class="ion-social-youtube"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- top-menu -->
            </div>
            <!-- container -->
        </div>
        <!-- bg-191 -->

        <div class="container">
            <a href="/" class="logo"><img :src="logo" alt="Logo"/></a>

            <a class="right-area src-btn">
                <i class="active src-icn ion-search"></i>
                <i class="close-icn ion-close"></i>
            </a>
            <div class="src-form">
                <form>
                    <input
                        v-on:keyup.enter="search"
                        v-model="searchString"
                        type="text"
                        placeholder="Busca entre nuestras publicaciones"
                    />
                    <button @click="search"><i class="ion-search"></i></button>
                </form>
            </div>
            <!-- src-form -->

            <a class="menu-nav-icon" data-menu="#main-menu"
                ><i class="ion-navicon"></i
            ></a>

            <ul class="main-menu" id="main-menu">
                <li><a @click="fetch_all_docs">PUBLICACIONES</a></li>
                <li class="drop-down">
                    <a>TEMAS<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner">
                        <li>
                            <a @click="search_theme('1')"
                                >Crisis Climática y Conservación</a
                            >
                        </li>
                        <li><a @click="search_theme('2')">Minería</a></li>
                        <li>
                            <a @click="search_theme('3')"
                                >Hidroeléctricas y eólicas</a
                            >
                        </li>
                        <li>
                            <a @click="search_theme('4')"
                                >Petróleo, Fracking y Gasoductos</a
                            >
                        </li>
                        <li>
                            <a @click="search_theme('5')">Derechos indígenas</a>
                        </li>
                        <li>
                            <a @click="search_theme('6')">
                                Tierra y Territorio</a
                            >
                        </li>
                        <li><a @click="search_theme('7')">Agua</a></li>
                        <li>
                            <a @click="search_theme('8')"
                                >Bosques y deforestación</a
                            >
                        </li>
                        <li><a @click="search_theme('9')">Megaproyectos</a></li>
                    </ul>
                </li>
                <!-- <li><a> PUBLICACIONES</a></li> -->
                <li><a @click="all_authors">AUTORES</a></li>
                <li><a @click="all_documents">DOCUMENTOS</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <!-- container -->
    </header>
    <!-- <div>
        <div class="container ">
            <div class="row bg-dark d-flex justify-content-between title-bar">
                <div class="col-6 col-md-4">
                    <a class=" mx-1 mx-lg-2 text-light">About</a>
                    <a class=" mx-1 mx-lg-2 text-light">Contacto</a> -->
    <!-- </div>
                <div class="col-6 col-lg-6 d-flex justify-content-end">
                    <ul class="px-0">
                        <img
                            src="../media/facebook.png"
                            alt=""
                            class="img-thumbnail top-icons mx-1 mx-md-2"
                        />
                        <img
                            src="../media/instagram.png"
                            alt=""
                            class="img-thumbnail top-icons mx-1 mx-md-2"
                        />
                        <img
                            src="../media/youtube.png"
                            alt=""
                            class="img-thumbnail top-icons mx-1 mx-md-2"
                        />
                        <img
                            src="../media/twitter.png"
                            alt=""
                            class="img-thumbnail top-icons mx-1 mx-md-2"
                        />
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="navbar navbar-expand-lg navbar-light bg-light">
                        <img
                            :src="logo"
                            alt=""
                            class="navbar-brand top-icons"
                        />

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
                            <ul class="navbar-nav d-flex justify-content-end">
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
                                        <a
                                            @click="search_theme('1')"
                                            class="dropdown-item"
                                            >Crisis Climática y Conservación</a
                                        >
                                        <a
                                            @click="search_theme('2')"
                                            class="dropdown-item"
                                            >Minería</a
                                        >
                                        <a
                                            @click="search_theme('3')"
                                            class="dropdown-item"
                                            >Hidroeléctricas y eólicas</a
                                        >
                                        <a
                                            @click="search_theme('4')"
                                            class="dropdown-item"
                                            >Petróleo, Fracking y Gasoductos</a
                                        >

                                        <a
                                            @click="search_theme('5')"
                                            class="dropdown-item"
                                            >Derechos indígenas</a
                                        >
                                        <a
                                            @click="search_theme('6')"
                                            class="dropdown-item"
                                            >Tierra y Territorio</a
                                        >
                                        <a
                                            @click="search_theme('7')"
                                            class="dropdown-item"
                                            >Agua</a
                                        >
                                        <a
                                            @click="search_theme('8')"
                                            class="dropdown-item"
                                            >Bosques y deforestación</a
                                        >

                                        <a
                                            @click="search_theme('9')"
                                            class="dropdown-item"
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
                       
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="container">
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
    </div> -->
</template>

<script>
import JQuery from "jquery";
let $ = JQuery;
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
a:hover {
    cursor: pointer;
}
</style>
