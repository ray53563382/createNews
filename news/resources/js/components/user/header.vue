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
                            <a
                                href="sobreNosotrosContacto"
                                class="pl-0 pl-sm-10"
                                >Sobre nosotros</a
                            >
                        </li>
                    </ul>
                    <ul
                        class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5"
                    >
                        <li>
                            <a
                                target="_blank"
                                class="pl-0 pl-sm-10"
                                href="https://www.facebook.com/ceccam.org"
                                ><i class="ion-social-facebook"></i
                            ></a>
                        </li>
                        <li>
                            <a
                                target="_blank"
                                href="https://twitter.com/Ceccam9"
                                ><i class="ion-social-twitter"></i
                            ></a>
                        </li>
                        <!-- <li>
                            <a  href="enlacepagina.html"><i class="ion-social-google"></i></a>
                        </li> -->
                        <!-- <li>
                            <a  href="enlacepagina.html"><i class="ion-social-instagram"></i></a>
                        </li> -->
                        <li>
                            <a
                                target="_blank"
                                href="https://www.youtube.com/channel/UC0WRsxDsAxyG8y_PkcKJA-w"
                                ><i class="ion-social-youtube"></i
                            ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

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

            <a class="menu-nav-icon" data-menu="#main-menu"
                ><i class="ion-navicon"></i
            ></a>

            <ul class="main-menu" id="main-menu">
                <li><a @click="fetch_all_docs">PUBLICACIONES</a></li>
                <li class="drop-down">
                    <a>TEMAS<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner">
                        <li v-for="(item, index) in categorias" :key="index">
                            <a @click="search_theme(item.id)">{{
                                item.descripcion
                            }}</a>
                        </li>
                    </ul>
                </li>
                <li class="drop-down">
                    <a>DECLARACIONES<i class="ion-arrow-down-b"></i></a>
                    <ul class="drop-down-menu drop-down-inner">
                        <li><a @click="all_actions">Acciones</a></li>
                    </ul>
                </li>

                <li><a @click="all_authors">AUTORES</a></li>
                <li><a @click="all_documents">DOCUMENTOS</a></li>
            </ul>
            <div class="clearfix"></div>
        </div>
    </header>
</template>

<script>
import JQuery from "jquery";
let $ = JQuery;
import logo from "../media/LogoCeccam.png";
import home from "../media/home.png";

export default {
    name: "header-component",

    data() {
        return {
            logo: logo,
            home: home,
            searchString: null,
            categorias: ["1", "2", "3"]
        };
    },

    created() {
        axios({
            url: "/categorias"
        }).then(resp => {
            console.log(resp.data);
            this.categorias = resp.data;
        });
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
        all_actions() {
            this.searchString = "get_all_acciones";
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

*,
*:before,
*:after {
    box-sizing: border-box;
}

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
}

body,
html {
    width: 100%;
    height: 100%;
}

.expanding-search-form {
    position: relative;
    top: 40%;
    left: 35%;
    display: inline-block;
    height: 34px;
    width: auto;
}
.expanding-search-form .search-label {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 1px solid #999;
    z-index: 2;
    cursor: pointer;
    border-radius: 3px;
    transition: 250ms all ease-in-out;
}
.expanding-search-form .search-input {
    position: relative;
    top: 0;
    display: inline-block;
    height: 34px;
    width: 150px;
    float: left;
    border: 0;
    font-size: 16px;
    z-index: 2;
    box-shadow: none;
    border-radius: 0;
    transition: 250ms all ease-in-out;
}
.expanding-search-form .search-input:focus {
    width: 300px;
    outline: none;
}
.expanding-search-form .search-input:focus + .search-label {
    border-color: #2299ff;
}
.expanding-search-form .button {
    position: relative;
    top: 0;
    display: inline-block;
    float: left;
    padding: 0 10px;
    color: #fff;
    border: 1px solid transparent;
    background-color: #2299ff;
    text-align: center;
    transition: 250ms all ease-in-out;
}
.expanding-search-form .button:hover {
    background-color: #0080ee;
}
.expanding-search-form .search-dropdown {
    position: relative;
    top: 0;
    display: inline-block;
    float: left;
    padding: 3px;
}
.expanding-search-form .search-dropdown.open .dropdown-menu {
    display: block;
}
.expanding-search-form .dropdown-toggle {
    height: 28px;
    font-size: 12px;
    line-height: 28px;
    border-radius: 2px;
    z-index: 3;
}
.expanding-search-form .dropdown-menu {
    position: absolute;
    top: calc(100% - 1px);
    display: none;
    margin: 0;
    padding: 5px;
    list-style: none;
    background-color: #fff;
    border: 1px solid #999;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    z-index: 3;
    transition: 250ms all ease-in-out;
}
.expanding-search-form .dropdown-menu > li > a {
    display: block;
    padding: 4px 12px;
    color: #2299ff;
    font-size: 14px;
    line-height: 20px;
    text-decoration: none;
    border-radius: 2px;
    transition: 250ms all ease-in-out;
}
.expanding-search-form .dropdown-menu > li > a:hover {
    color: #fff;
    background-color: #2299ff;
}
.expanding-search-form .dropdown-menu > .menu-active {
    display: none;
}
.expanding-search-form .search-button {
    height: 34px;
    z-index: 3;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}
.expanding-search-form .search-button .icon {
    font-size: 20px;
}
</style>
