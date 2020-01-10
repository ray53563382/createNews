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
                    <!-- Resultados para: <b>{{ this.querystring }}</b> -->

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
        <paginate name="result" :list="resultados" :per="9"  tag="div">
 <div class="row">
    <div v-for="(person, index) in paginated('result')" :key="index" class="col-lg-4 col-md-6 col-sm-12" @click="goToDocumentView(person)" style="margin-bottom: 4%;">
        <article class="card card--1" v-bind:style="{ 'background-image': 'url(' + person.imgdesmostrativa + ')' ,'border-color': 'gray' ,'-webkit-box-shadow': '4px 2px 3px 0px rgba(0,0,0,0.84)'}">
            <div class="card__info-hover">
                <svg class="card__like"  viewBox="0 0 24 24">
                    <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                </svg>
                <div class="card__clock-info">
                    <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                    </svg><span class="card__time">{{person.fecha}}</span>
                </div>
            </div>
            <div class="card__img"></div>
            <a href="#" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> {{person.idcategoria}}</span>
                <h3 class="card__title" style="font-size: 19px !important;">{{person.titulo}}</h3>
                <span class="card__by">Autor: <a class="card__author" title="author">{{person.autor}}</a></span>
            </div>
        </article>
        </div>
 </div>

        </paginate> 

        <div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-1">
            <paginate-links for="result" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

    </div>   
  </div>
</div>
 
        </div>
        <!-- ALL SEARCH END -->
        <!-- AUTHORS START -->
         <div v-if="all_authors_flag">
            <paginate name="result" :list="resultados" :per="1" >

            <div v-for="(object, index) in paginated('result')" :key="index">
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

            </paginate> 

        <paginate-links for="result" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

        </div> 
        <!-- AUTHORS END -->
        <!-- DOCUMENTS START -->
        <div v-if="all_documents">
            <paginate name="result" :list="resultados" :per="5" >
            <div class="row">
                <ul>
                    <div v-for="(object, index) in paginated('result')" :key="index" class="col-12">
                        <a :href="'/documentViewpdf/' + object.id" style="color: black !important;">
                            <li :href="'/documentViewpdf/' + object.id" style="margin-top:2%">
                                <img :src="object.imgdesmostrativa" :href="'/documentViewpdf/' + object.id" />
                                <h3>{{ object.nombre }}</h3>
                                <p>Ver detalle</p>
                            </li>
                        </a>            
                    </div>
                </ul>
            </div> 
            </paginate> 
            <paginate-links for="result" :classes="{'ul': 'pagination', 'li': 'page-item', 'a': 'page-link'}"></paginate-links>

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

import VuePaginate from 'vue-paginate'
Vue.use(VuePaginate)

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
        }
    },
    components: {
        Header,
        Footer,
        Searchcard
    },methods: {
  goToSecondPage () {
    if (this.$refs.paginator) {
      this.$refs.paginator.goToPage(2)
    }
  },

    goToDocumentView(person) {
        console.log(person);
        location.replace("/documentView/" + person.id);
    }


},
    data() {
        return {
            myString: null,
            notFound: false,
            resultados: [],
            paginate: ['result'],
            searchFlag: false,
            all_authors_flag: false,
            all_documents: false,
            order: "default"
        };
    },

    created() {
        // console.log(this.author);
        // console.log(this.theme);
        // console.log(this.querystring);

        if (this.querystring == "get_all_docs") {
            axios({
                method: "post",
                url: "/allrecent",
                data: {
                    type: this.order
                }
            })
                .then(resp => {
                    this.searchFlag = true;
                    this.resultados = resp.data;
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
                        // console.log(resp.data);
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
                    url: "/gettheme",
                    data: {
                        idcategoria: this.theme
                    }
                })
                    .then(resp => {
                        this.searchFlag = true;
                        this.resultados = resp.data;
                        console.log(resp.data);
                        this.resultados.length == undefined ||
                        this.resultados.length <= 0
                            ? (this.notFound = true)
                            : (this.notFound = false);
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
                                // console.log(resp.data);
                                // this.resultados = resp.data;
                                // this.resultados.length == undefined ||
                                // this.resultados.length <= 0
                                //     ? (this.notFound = true)
                                //     : (this.notFound = false);
                            } else {
                                this.searchFlag = true;
                                this.resultados = resp.data;
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
.query-container {
    height: 100vh !important;
}

.author-card {
    height: 15em;
    width: 55%;
    border: 2px solid #151515;
}

@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

*{
  box-sizing: border-box;
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
    fill: #AD7D52;
}
.card__time {
    font-size: 12px;
    color: #AD7D52;
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
  transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
  background-color: #fff;
  height: 360px;
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0px 13px 10px -7px rgba(0, 0, 0,0.1);
}
.card:hover {
    box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
    transform: scale(1.10, 1.10);
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
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 12px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author{
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}


.card__author:hover{
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

</style>
