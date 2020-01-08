<template>
    <div class="container query-container">
        <div class="row my-4">
            <div class="col-lg-12">
                <Header />
            </div>
        </div>
        <div class="row my-lg-3">
            <div class="col-lg-12">
                <h2>
                    Resultados para: <b>{{ this.querystring }}</b>
                </h2>
            </div>
        </div>

        <div v-show="notFound" class="row">
            <div class="col-lg-12">
                <h3>
                    No se han encontrado resultados. Intenta con otro término.
                </h3>
            </div>
        </div>
        <!-- ALL SEARCH START -->
        <div v-if="searchFlag">
            <div v-for="(object, index) in resultados" :key="index">
                <div class="row my-4">
                    <div class="col-lg-12">
                        <Searchcard
                            :queries_array="resultados"
                            :index_queries="index"
                        />
                    </div>
                </div>
            </div>
        </div>
        <!-- ALL SEARCH END -->
        <!-- AUTHORS START -->
        <div v-if="all_authors_flag">
            <div v-for="(object, index) in resultados" :key="index">
                <div class="row my-4">
                    <div class="col-lg-12">
                        <div class=" container author-card">
                            <div class="row">
                                <div class="col-12">
                                    <a :href="'/search/all/' + object">
                                        {{ object }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- AUTHORS END -->
        <!-- DOCUMENTS START -->
        <div v-if="all_documents">
            <div v-for="(object, index) in resultados" :key="index">
                <div class="row my-4">
                    <div class="col-4">
                        <div class=" container author-card">
                            <img
                                style="height: 100%"
                                :src="object.imgdesmostrativa"
                                alt=""
                                class="img-thumbnail"
                            />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <p class="h2">
                                        <a
                                            :href="
                                                '/documentViewpdf/' + object.id
                                            "
                                        >
                                            {{ object.nombre }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- DOCUMENTS END -->
        <div class="row my-4">
            <div class="col-lg-12">
                <Footer />
            </div>
        </div>
    </div>
</template>

<script>
import logito from "../media/home.png";
import Header from "./header";
import Footer from "./footer";
import Searchcard from "./searchcard";

// import { bus } from "../media/bus";

export default {
    name: "searchview",
    props: {
        querystring: {
            required: true
        },
        author: {
            requiered: false
        }
    },
    components: {
        Header,
        Footer,
        Searchcard
    },
    data() {
        return {
            myString: null,
            notFound: false,
            resultados: [],
            searchFlag: false,
            all_authors_flag: false,
            all_documents: false
        };
    },

    created() {
        if (this.author) {
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
                    console.log(resp.data);
                    this.resultados.length == undefined ||
                    this.resultados.length <= 0
                        ? (this.notFound = true)
                        : (this.notFound = false);

                    console.log(this.resultados.length);
                })
                .catch(Error => console.log(error));
        } else {
            if (this.querystring == "all") {
                axios({
                    method: "post",
                    url: "/allAuthors"
                })
                    .then(resp => {
                        console.log(resp.data);
                        this.resultados = resp.data;
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
                            this.all_documents = true;
                            this.resultados = resp.data;
                            console.log(resp.data);
                            // this.resultados = resp.data;
                            // this.resultados.length == undefined ||
                            // this.resultados.length <= 0
                            //     ? (this.notFound = true)
                            //     : (this.notFound = false);
                        } else {
                            this.searchFlag = true;
                            this.resultados = resp.data;
                            console.log(resp.data);
                            this.resultados.length == undefined ||
                            this.resultados.length <= 0
                                ? (this.notFound = true)
                                : (this.notFound = false);
                            console.log(this.resultados.length);
                        }
                    })
                    .catch(Error => console.log(error));
            }
        }
    }
};
</script>

<style>
.query-container {
    height: 100vh !important;
}

.author-card {
    height: 15em;
    width: 100%;
    border: 2px solid #151515;
}
</style>
