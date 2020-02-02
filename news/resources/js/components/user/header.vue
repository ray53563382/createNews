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
                                class="pl-0 pl-sm-10"
                                href="https://www.facebook.com/ceccam.orgclass"
                                ><i class="ion-social-facebook"></i
                            ></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Ceccam9"
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
                            <a href="enlacepagina.html"
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
                    <a>Declaraciones<i class="ion-arrow-down-b"></i></a>
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
</style>
