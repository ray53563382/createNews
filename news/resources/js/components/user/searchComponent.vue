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
            resultados: []
        };
    },

    created() {
        axios({
            method: "post",
            url: "/getsearch",
            data: {
                q_string: this.querystring
            }
        })
            .then(resp => {
                this.resultados = resp.data;
                console.log(resp.data.lenght);

                resp.data.lenght == 0 || resp.data.lenght == undefined
                    ? (this.notFound = true)
                    : (this.notFound = 0);

                // EventBus.$emit("bus_queries", resp.data);
            })
            .catch(Error => console.log(error));
    }
};
</script>

<style>
.query-container {
    height: 100vh !important;
}
</style>
