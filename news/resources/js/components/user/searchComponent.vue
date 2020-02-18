<template>
    <div class="query-container">
        <Header></Header>
        <!-- <div class="row">
    <div class="col-lg-12">-->
        <!-- <Header /> -->
        <!-- </div>
    </div>-->
        <div class="container">
            <div class="row my-lg-3">
                <div class="col-lg-12">
                    <h2>
                        <!-- Resultados para: <b>{{ this.querystring }}</b> -->
                    </h2>
                </div>
            </div>

            <div v-show="notFound" class="row">
                <div class="col-lg-12">
                    <h3>
                        No se han encontrado resultados. Intenta con otro
                        término.
                    </h3>
                </div>
            </div>

            <!-- NEWS & NOTES -->
            <div v-if="newsNotes">
                <div class="mybtn ">
                    <div>
                        <h2 @click="cambiaNoticias" class="botones">
                            <p
                                v-bind:style="[
                                    showNoticias
                                        ? { color: '#137ee2' }
                                        : { color: 'black' }
                                ]"
                            >
                                Noticias
                            </p>
                        </h2>
                        <h2 @click="cambiaPublicaciones" class="botones">
                            <p
                                v-bind:style="[
                                    showPublicaciones
                                        ? { color: '#137ee2' }
                                        : { color: 'black' }
                                ]"
                            >
                                Publicaciones
                            </p>
                        </h2>
                    </div>
                </div>

                <div v-if="showNoticias" class="row">
                    <div
                        v-for="(person, index) in resultadosNoticias"
                        :key="index"
                        class="col-12 col-lg-4 col-md-6 box"
                        @click="goToNewview(person)"
                    >
                        <img
                            :src="person.imgdesmostrativa"
                            alt
                            style="width: 100%; height: 300px;"
                        />
                        <h4 class="pt-20">
                            <a href="#">
                                <b style="color: black;">
                                    {{ person.titulo }}
                                </b>
                            </a>
                        </h4>

                        <ul style="margin-left: -8px">
                            <li class="color-lite-black">
                                Autor:
                                <a href="#" class="color-black">
                                    <b>{{ person.autor }},</b>
                                </a>
                                <br />
                                {{ person.fecha }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    v-if="showNoticias"
                    class="container h-100"
                    style="margin-top: 3%"
                >
                    <div
                        class="row h-100 justify-content-center align-items-center"
                    >
                        <nav>
                            <ul class="pagination">
                                <li v-if="paginationNoticias.current_page > 1">
                                    <a
                                        @click="
                                            changePageNoticia(
                                                paginationNoticias.current_page -
                                                    1
                                            )
                                        "
                                    >
                                        <span>Atrás</span>
                                    </a>
                                </li>
                                <li
                                    v-for="(page, index) in pagesNumberNoticias"
                                    :key="index"
                                    v-bind:class="[
                                        page == isActivedNoticias
                                            ? 'active'
                                            : ''
                                    ]"
                                    @click="changePageNoticia(page)"
                                >
                                    <a>
                                        <span>{{ page }}</span>
                                    </a>
                                </li>
                                <li
                                    v-if="
                                        paginationNoticias.current_page <
                                            paginationNoticias.last_page
                                    "
                                >
                                    <a
                                        @click="
                                            changePageNoticia(
                                                paginationNoticias.current_page +
                                                    1
                                            )
                                        "
                                    >
                                        <span>Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div v-if="showPublicaciones" class="row">
                    <div
                        v-for="(person, index) in resultadosPublicaciones"
                        :key="index"
                        class="col-12 col-lg-4 col-md-6 box"
                        @click="goToDocumentView(person)"
                    >
                        <img
                            :src="person.imgdesmostrativa"
                            alt
                            style="width: 100%; height: 300px;"
                        />
                        <h4 class="pt-20">
                            <a href="#">
                                <b style="color: black;">
                                    {{ person.titulo }}
                                </b>
                            </a>
                        </h4>

                        <ul style="margin-left: -8px">
                            <li class="color-lite-black">
                                Autor:
                                <a href="#" class="color-black">
                                    <b>{{ person.autor }},</b>
                                </a>
                                <br />
                                {{ person.fecha }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div
                    v-if="showPublicaciones"
                    class="container h-100"
                    style="margin-top: 3%"
                >
                    <div
                        class="row h-100 justify-content-center align-items-center"
                    >
                        <nav>
                            <ul class="pagination">
                                <li
                                    v-if="
                                        paginationPublicaciones.current_page > 1
                                    "
                                >
                                    <a
                                        @click="
                                            changePagePublicacion(
                                                paginationPublicaciones.current_page -
                                                    1
                                            )
                                        "
                                    >
                                        <span>Atrás</span>
                                    </a>
                                </li>
                                <li
                                    v-for="(page,
                                    index) in pagesNumberPublicaciones"
                                    :key="index"
                                    v-bind:class="[
                                        page == isActivedPublicaciones
                                            ? 'active'
                                            : ''
                                    ]"
                                    @click="changePagePublicacion(page)"
                                >
                                    <a>
                                        <span>{{ page }}</span>
                                    </a>
                                </li>
                                <li
                                    v-if="
                                        paginationPublicaciones.current_page <
                                            paginationPublicaciones.last_page
                                    "
                                >
                                    <a
                                        @click="
                                            changePagePublicacion(
                                                paginationPublicaciones.current_page +
                                                    1
                                            )
                                        "
                                    >
                                        <span>Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- NEWS & NOTES -->

            <!-- ALL SEARCH START -->
            <div v-if="searchFlag">
                <div class="row">
                    <div
                        v-for="(person, index) in resultados"
                        :key="index"
                        class="col-12 col-lg-4 col-md-6 box"
                        @click="goToDocumentView(person)"
                    >
                        <img
                            :src="person.imgdesmostrativa"
                            alt
                            style="width: 100%; height: 300px;"
                        />
                        <h4 class="pt-20">
                            <a href="#">
                                <b style="color: black;">
                                    {{ person.titulo }}
                                </b>
                            </a>
                        </h4>
                        <!-- <ul style="margin-left: -48px;"> -->
                        <ul style="margin-left: -8px">
                            <li class="color-lite-black">
                                Autor:
                                <a href="#" class="color-black">
                                    <b>{{ person.autor }},</b>
                                </a>
                                <br />
                                {{ person.fecha }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container h-100" style="margin-top: 3%">
                    <div
                        class="row h-100 justify-content-center align-items-center"
                    >
                        <nav>
                            <ul class="pagination">
                                <li v-if="pagination.current_page > 1">
                                    <a
                                        @click="
                                            changePageNota(
                                                pagination.current_page - 1
                                            )
                                        "
                                    >
                                        <span>Atrás</span>
                                    </a>
                                </li>
                                <li
                                    v-for="(page, index) in pagesNumber"
                                    :key="index"
                                    v-bind:class="[
                                        page == isActived ? 'active' : ''
                                    ]"
                                    @click="changePageNota(page)"
                                >
                                    <a>
                                        <span>{{ page }}</span>
                                    </a>
                                </li>
                                <li
                                    v-if="
                                        pagination.current_page <
                                            pagination.last_page
                                    "
                                >
                                    <a
                                        @click="
                                            changePage(
                                                pagination.current_page + 1
                                            )
                                        "
                                    >
                                        <span>Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div v-if="newsFlag">
                <div class="row">
                    <div
                        v-for="(person, index) in resultados"
                        :key="index"
                        class="col-12 col-lg-4 col-md-6 box"
                        @click="goToNewview(person)"
                    >
                        <img
                            :src="person.imgdesmostrativa"
                            alt
                            style="width: 100%; height: 300px;"
                        />
                        <h4 class="pt-20">
                            <a href="#">
                                <b style="color: black;">
                                    {{ person.titulo }}
                                </b>
                            </a>
                        </h4>
                        <!-- <ul style="margin-left: -48px;"> -->
                        <ul style="margin-left: -8px">
                            <li class="color-lite-black">
                                Autor:
                                <a href="#" class="color-black">
                                    <b>{{ person.autor }},</b>
                                </a>
                                <br />
                                {{ person.fecha }}
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container h-100" style="margin-top: 3%">
                    <div
                        class="row h-100 justify-content-center align-items-center"
                    >
                        <nav>
                            <ul class="pagination">
                                <li v-if="pagination.current_page > 1">
                                    <a
                                        @click="
                                            changePage(
                                                pagination.current_page - 1
                                            )
                                        "
                                    >
                                        <span>Atrás</span>
                                    </a>
                                </li>
                                <li
                                    v-for="(page, index) in pagesNumber"
                                    :key="index"
                                    v-bind:class="[
                                        page == isActived ? 'active' : ''
                                    ]"
                                    @click="changePage(page)"
                                >
                                    <a>
                                        <span>{{ page }}</span>
                                    </a>
                                </li>
                                <li
                                    v-if="
                                        pagination.current_page <
                                            pagination.last_page
                                    "
                                >
                                    <a
                                        @click="
                                            changePage(
                                                pagination.current_page + 1
                                            )
                                        "
                                    >
                                        <span>Siguiente</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- ALL SEARCH END -->
            <!-- AUTHORS START -->
            <div v-if="all_authors_flag">
                <h4 class="p-title" style="margin-bottom: 2%">
                    <b>Autores</b>
                </h4>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <paginate
                            name="result"
                            :list="resultadosAtores"
                            :per="5"
                        >
                            <div
                                v-for="(object, index) in paginated('result')"
                                :key="index"
                            >
                                <div
                                    @click="fetchAuthor(object)"
                                    class="container border border-warning my-5 py-4 px-4 mx-2 mycursor"
                                >
                                    <div class="row">
                                        <div class="col-3">
                                            <div>
                                                <img
                                                    style="height: 6em; width: 4em"
                                                    src="../media/pencil.png"
                                                    alt
                                                    class="img-thumbnail"
                                                />
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div>
                                                <b>Ver todo de:</b>
                                                <h2
                                                    class="text-warning"
                                                    style="color:#847811 !important"
                                                >
                                                    {{ object }}
                                                </h2>
                                                <!-- <h3>object</h3> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </paginate>
                        <div class="container">
                            <div
                                class="row h-100 justify-content-center align-items-center"
                            >
                                <div>
                                    <paginate-links
                                        for="result"
                                        :classes="{
                                            ul: 'pagination',
                                            li: 'page-item',
                                            a: 'page-link'
                                        }"
                                    ></paginate-links>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <popularPost></popularPost>
                    </div>
                </div>
            </div>
            <!-- AUTHORS END -->
            <!-- DOCUMENTS START -->
            <div v-if="all_documents">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <paginate name="result" :list="resultados" :per="5">
                            <h4 class="p-title">
                                <b>Documentos</b>
                            </h4>
                            <ul>
                                <div
                                    v-for="(object, index) in paginated(
                                        'result'
                                    )"
                                    :key="index"
                                >
                                    <a
                                        :href="'/documentViewpdf/' + object.id"
                                        style="color: black !important;"
                                    >
                                        <li
                                            :href="
                                                '/documentViewpdf/' + object.id
                                            "
                                            style="margin-top:2%"
                                        >
                                            <img
                                                style="width: 62px !important;"
                                                :src="object.imgdesmostrativa"
                                                :href="
                                                    '/documentViewpdf/' +
                                                        object.id
                                                "
                                            />
                                            <h3>{{ object.nombre }}</h3>
                                            <p>Ver detalle</p>
                                        </li>
                                    </a>
                                </div>
                            </ul>
                        </paginate>
                        <div
                            class="centrar"
                            style="width: 50%; margin: 0 auto;"
                        >
                            <paginate-links
                                for="result"
                                :classes="{
                                    ul: 'pagination',
                                    li: 'page-item',
                                    a: 'page-link',
                                    center: 'width: 50%; margin: 0 auto;'
                                }"
                            ></paginate-links>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <popularPost></popularPost>
                    </div>
                </div>
            </div>

            <!-- Todos las acciones -->
            <div v-if="allActionsFlag">
                <paginate name="result" :list="resultados" :per="9" tag="div">
                    <h4 class="p-title" style="margin-bottom: 2%">
                        <b>Publicaciones</b>
                    </h4>
                    <div class="row">
                        <div
                            v-for="(person, index) in paginated('result')"
                            :key="index"
                            class="col-12 col-lg-4 col-md-6 box"
                            @click="goToActionView(person)"
                        >
                            <img
                                :src="person.imgdesmostrativa"
                                alt
                                style="width: 100%; height: 300px;"
                            />
                            <h4 class="pt-20">
                                <a href="#">
                                    <b style="color: black;">
                                        {{ person.titulo }}
                                    </b>
                                </a>
                            </h4>
                            <!-- <ul style="margin-left: -48px;"> -->
                            <ul style="margin-left: -8px">
                                <li class="color-lite-black">
                                    Autor:
                                    <a href="#" class="color-black">
                                        <b>{{ person.autor }},</b>
                                    </a>
                                    <br />
                                    {{ person.fecha }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </paginate>

                <div class="container h-100" style="margin-top: 3%">
                    <div
                        class="row h-100 justify-content-center align-items-center"
                    >
                        <div>
                            <paginate-links
                                for="result"
                                :classes="{
                                    ul: 'pagination',
                                    li: 'page-item',
                                    a: 'page-link'
                                }"
                            ></paginate-links>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Todos las acciones END -->
        </div>
        <!-- DOCUMENTS END -->

        <!-- <div class="row my-4">
    <div class="col-lg-12">-->
        <Footer class="my-3" />
        <!-- </div>
    </div>-->
    </div>
</template>

<script>
import logito from "../media/home.png";
import Header from "./header";
import Footer from "./footer";
import Searchcard from "./searchcard";
import VueLoading from "vuejs-loading-plugin";
Vue.use(VueLoading, {
    text: "Cargando"
});

import VuePaginate from "vue-paginate";
Vue.use(VuePaginate);

// import pencil from "img/pencil.png";

// import { bus } from "../media/bus";

export default {
    name: "searchview",
    props: {
        querystring: {
            required: false
        },

        author: {
            requiered: false
        },

        theme: {
            requiered: false
        },

        typeofsearch: {
            requiered: false
        }
    },
    components: {
        Header,
        Footer,
        Searchcard
    },
    methods: {
        goToSecondPage() {
            if (this.$refs.paginator) {
                this.$refs.paginator.goToPage(2);
            }
        },

        fetchAuthor(author) {
            console.log(author);
            location.replace("/search/all/" + author);
        },

        goToDocumentView(person) {
            location.replace("/documentView/" + person.id);
        },
        goToActionView(person) {
            location.replace("/actionView/" + person.id);
        },

        goToNewview(person) {
            location.replace("/newView/" + person.id);
        },

        getNoticias(page) {
            axios({
                method: "post",
                url: "/allnews",
                data: {
                    page: page
                }
            })
                .then(resp => {
                    // this.newsFlag = true;
                    this.resultados = resp.data.noticias.data;
                    this.pagination = resp.data.pagination;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        },

        getNotas(page) {
            axios({
                method: "post",
                url: "/recentdata",
                data: {
                    page: page
                }
            })
                .then(resp => {
                    // this.newsFlag = true;
                    this.resultados = resp.data.notas.data;
                    this.pagination = resp.data.pagination;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        },

        changePage(page) {
            this.pagination.current_page = page;
            this.getNoticias(page);
        },

        changePageNota(page) {
            this.pagination.current_page = page;
            this.getNotas(page);
        },

        //NOTE
        getNuevaNoticia(page) {
            axios({
                method: "post",
                url: "/temaNoticias",
                data: {
                    page: page
                }
            })
                .then(resp => {
                    // this.newsFlag = true;
                    this.resultadosNoticias = resp.data.noticias.data;
                    this.paginationNoticias = resp.data.paginationNoticias;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        },
        changePageNoticia(page) {
            this.paginationNoticias.current_page = page;
            this.getNuevaNoticia(page);
        },
        //FIXME
        getNuevaPublicacion(page) {
            axios({
                method: "post",
                url: "/temaPublicaciones",
                data: {
                    page: page
                }
            })
                .then(resp => {
                    // this.newsFlag = true;
                    this.resultadosPublicaciones = resp.data.publicaciones.data;
                    this.paginationPublicaciones =
                        resp.data.paginationPublicaciones;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        },
        changePagePublicacion(page) {
            this.paginationPublicaciones.current_page = page;
            this.getNuevaPublicacion(page);
        },

        cambiaNoticias() {
            if (this.showPublicaciones == true) {
                this.showPublicaciones = false;
                this.showNoticias = true;
            } else {
                this.showNoticias = true;
            }
        },

        cambiaPublicaciones() {
            if (this.showNoticias == true) {
                this.showNoticias = false;
                this.showPublicaciones = true;
            } else {
                this.showPublicaciones = true;
            }
        }
    },
    data() {
        return {
            myString: null,
            notFound: false,
            resultados: [],
            resultadosAtores: [],
            paginate: ["result"],
            searchFlag: false,
            all_authors_flag: false,
            publicacionFlag: false,
            all_documents: false,
            order: "default",
            allActionsFlag: false,
            sendData: [],
            newsFlag: false,
            pagination: {
                total: 0,
                current_page: 0,
                per_page: 0,
                last_page: 0,
                from: 0,
                to: 0
            },
            isNoticia: false,
            isPublicacion: false,
            newsNotes: false,
            showNoticias: true,
            showPublicaciones: false,
            resultadosNoticias: null,
            resultadosPublicaciones: null,
            paginationPublicaciones: {
                total: 0,
                current_page: 0,
                per_page: 0,
                last_page: 0,
                from: 0,
                to: 0
            },
            paginationNoticias: {
                total: 0,
                current_page: 0,
                per_page: 0,
                last_page: 0,
                from: 0,
                to: 0
            }
        };
    },

    computed: {
        isActived: function() {
            return this.pagination.current_page;
        },
        pagesNumber: function() {
            if (!this.pagination.to) {
                return [];
            }

            let from = this.pagination.current_page - 2;
            if (from < 1) {
                from = 1;
            }

            let to = from + 2 * 2;
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }

            let pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }

            return pagesArray;
        },
        isActivedPublicaciones: function() {
            return this.paginationPublicaciones.current_page;
        },
        pagesNumberPublicaciones: function() {
            if (!this.paginationPublicaciones.to) {
                return [];
            }

            let from = this.paginationPublicaciones.current_page - 2;
            if (from < 1) {
                from = 1;
            }

            let to = from + 2 * 2;
            if (to >= this.paginationPublicaciones.last_page) {
                to = this.paginationPublicaciones.last_page;
            }

            let pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }

            return pagesArray;
        },
        isActivedNoticias: function() {
            return this.paginationNoticias.current_page;
        },
        pagesNumberNoticias: function() {
            if (!this.paginationNoticias.to) {
                return [];
            }

            let from = this.paginationNoticias.current_page - 2;
            if (from < 1) {
                from = 1;
            }

            let to = from + 2 * 2;
            if (to >= this.paginationNoticias.last_page) {
                to = this.paginationNoticias.last_page;
            }

            let pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }

            return pagesArray;
        }
    },

    created() {
        this.$loading(true);

        if (this.querystring == "get_all_docs") {
            axios({
                method: "post",
                url: "/recentdata",
                data: {
                    type: this.order
                }
            })
                .then(resp => {
                    this.searchFlag = true;
                    this.resultados = resp.data.notas.data;
                    this.pagination = resp.data.pagination;
                    console.log(this.pagination);

                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        } else if (this.typeofsearch == "noticias") {
            axios({
                method: "post",
                url: "/buscaEnNoticias",
                data: {
                    busqueda: this.querystring,
                    page: 1
                }
            })
                .then(resp => {
                    this.newsFlag = true;
                    this.resultados = resp.data.noticias.data;
                    this.pagination = resp.data.pagination;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        } else if (this.typeofsearch == "publicaciones") {
            axios({
                method: "post",
                url: "/buscaEnPublicaciones",
                data: {
                    busqueda: this.querystring,
                    page: 1
                }
            })
                .then(resp => {
                    this.searchFlag = true;
                    this.resultados = resp.data.notas.data;
                    this.pagination = resp.data.pagination;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        } else if (this.querystring == "get_all_acciones") {
            axios({
                method: "post",
                url: "/getAllActions",
                data: {
                    orden: this.order
                }
            })
                .then(resp => {
                    this.allActionsFlag = true;
                    this.resultados = resp.data;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        } else if (this.querystring == "get_all_news") {
            axios({
                method: "post",
                url: "/allnews",
                data: {
                    page: 1
                }
            })
                .then(resp => {
                    this.newsFlag = true;
                    this.resultados = resp.data.noticias.data;
                    this.pagination = resp.data.pagination;
                    this.$loading(false);
                })
                .catch(Error => console.log(Error));
        } else {
            if (this.author != undefined) {
                this.searchFlag = true;
                axios({
                    method: "post",
                    url: "/allfromAuthor",
                    data: {
                        author: this.author
                    }
                })
                    .then(resp => {
                        this.resultados = resp.data;
                        this.$loading(false);
                        this.resultados.length == undefined ||
                        this.resultados.length <= 0
                            ? (this.notFound = true)
                            : (this.notFound = false);

                        // console.log(this.resultados.length);
                    })
                    .catch(Error => console.log(error));
            } else if (this.theme) {
                axios({
                    method: "post",
                    url: "/temaNoticias",
                    data: {
                        tema: this.theme,
                        page: 1
                    }
                })
                    .then(resp => {
                        this.resultadosNoticias = resp.data.noticias.data;
                        this.paginationNoticias = resp.data.paginationNoticias;
                        axios({
                            method: "post",
                            url: "/temaPublicaciones",
                            data: {
                                tema: this.theme,
                                page: 1
                            }
                        }).then(resp => {
                            this.resultadosPublicaciones =
                                resp.data.publicaciones.data;
                            this.paginationPublicaciones =
                                resp.data.paginationPublicaciones;
                            this.newsNotes = true;
                            this.$loading(false);
                        });
                        // this.resultados.length == undefined ||
                        // this.resultados.length <= 0
                        //     ? (this.notFound = true)
                        //     : (this.notFound = false);
                    })
                    .catch(Error => console.log(Error));
            } else {
                if (this.querystring == "all") {
                    this.all_authors_flag = true;
                    axios({
                        method: "post",
                        url: "/allAuthors"
                    })
                        .then(resp => {
                            console.log(resp.data);
                            this.$loading(false);
                            this.resultados = resp.data;

                            console.log(
                                "ijasdiojaiodjaiojsdoajodjajsdjasdjajo"
                            );
                            this.resultadosAtores = [
                                ...new Set(this.resultados)
                            ];
                            console.log(this.resultadosAtores);
                            console.log(
                                "ijasdiojaiodjaiojsdoajodjajsdjasdjajo"
                            );
                        })
                        .catch(Error => console.log(Error));
                } else {
                    axios({
                        method: "post",
                        url: "/getsearch",
                        data: {
                            q_string: this.querystring
                        }
                    })
                        .then(resp => {
                            if (this.querystring == "allDocuments") {
                                console.log(resp.data);

                                this.all_documents = true;
                                this.resultados = resp.data;

                                this.$loading(false);

                                // console.log(resp.data);
                                // this.resultados = resp.data;
                                // this.resultados.length == undefined ||
                                // this.resultados.length <= 0
                                //     ? (this.notFound = true)
                                //     : (this.notFound = false);
                            } else {
                                this.searchFlag = true;
                                this.resultados = resp.data;
                                this.$loading(false);
                                console.log(resp.data);

                                // console.log(resp.data);
                                this.resultados.length == undefined ||
                                this.resultados.length <= 0
                                    ? (this.notFound = true)
                                    : (this.notFound = false);
                                // console.log(this.resultados.length);
                            }
                        })
                        .catch(Error => console.log(error));
                }
            }
        }
    }
};
</script>

<style lang="scss" scoped>
.active {
    background-color: rgba(57, 164, 235, 0.747) !important;
}

.query-container {
    height: 100vh !important;
}

.author-card {
    height: 15em;
    width: 55%;
    border: 2px solid #151515;
}

@import url("https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700");
@import url("https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");

* {
    box-sizing: border-box;
}

.box:hover {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    animation-name: example;
    animation-duration: 0.25s;
    margin-bottom: 20px;
    //   border-left: 2px solid blue;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.pt-20 {
    padding-top: 20px !important;
}

.list-li-mr-20 > li {
    margin-right: 20px;
}

.color-primary {
    color: #f9b500;
}

.mr-5 {
    margin-right: 5px !important;
}

.paginate-result {
    width: 100%;
    text-align: center;
    margin-bottom: 1rem;
}

.font-12 {
    font-size: 1.2em;
}

.cards {
    width: 100%;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    -webkit-justify-content: center;
    max-width: 820px;
}

.card__like {
    width: 18px;
}

.card__clock {
    width: 15px;
    vertical-align: middle;
    fill: #ad7d52;
}

.card__time {
    font-size: 12px;
    color: #ad7d52;
    vertical-align: middle;
    margin-left: 5px;
}

.card__clock-info {
    float: right;
}

.card__img {
    visibility: hidden;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    // width: 100%;
    height: 360px;
    // height: 235px;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

.card__info-hover {
    position: absolute;
    padding: 16px;
    width: 100%;
    opacity: 1;
    color: #fff;
    top: 0;
}

.card__img--hover {
    transition: 0.2s all ease-out;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    position: absolute;
    height: 235px;
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    top: 0;
    color: #fff;
}

.card {
    margin-right: 25px;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0, 1);
    background-color: #fff;
    height: 360px;
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 0.1);
}

.card:hover {
    box-shadow: 0px 30px 18px -8px rgba(0, 0, 0, 0.1);
    transform: scale(1.1, 1.1);
    color: #fff;
}

.card__info {
    z-index: 2;
    background-color: #fff;
    border-bottom-left-radius: 12px;
    border-bottom-right-radius: 12px;
    padding: 16px 24px 24px 24px;
}

.card__category:hover {
    font-family: "Raleway", sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
    color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: "Roboto Slab", serif;
}

.card__by {
    font-size: 12px;
    font-family: "Raleway", sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #ad7d52;
}

.card__author:hover {
    font-weight: 600;
    text-decoration: none;
    color: #fff;
}

.card:hover .card__img--hover {
    height: 100%;
    opacity: 0.3;
}

.card:hover .card__info {
    background-color: transparent;
    position: relative;
}

.card:hover .card__info-hover {
    opacity: 1;
}

ul {
    list-style-type: none;
    width: 100%;
}

h3 {
    font: bold 20px/1.5 Helvetica, Verdana, sans-serif;
}

li img {
    float: left;
    margin: 0 15px 0 0;
}

li p {
    font: 200 12px/1.5 Georgia, Times New Roman, serif;
}

li {
    padding: 10px;
    overflow: auto;
}

li:hover {
    background: #eee;
    cursor: pointer;
}

.p-title {
    position: relative;
    padding-bottom: 20px;
    margin-bottom: 4px;
}

.p-title:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #ccc;
}

.p-title:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 5px;
    background: #f9b500;
    z-index: 1;
}

.color-lite-black {
    color: #888;
}

.color-black {
    color: #111;
}

.wh-100x {
    height: 100px;
    width: 100px !important;
}

.abs-tlr {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1;
}

.ml-120 {
    margin-left: 120px !important;
}

.mycursor {
    cursor: pointer;
}

// BOTH
.mybtn {
    margin: 1em 0 3em 0;
}
.botones {
    margin: 0.2em 0 0.1em 0;
    cursor: pointer;
}
</style>
