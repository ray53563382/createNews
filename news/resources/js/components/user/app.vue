<template>
    <div class="container">
        <div class="row  ">
            <div class="col-12">
                <Header />
            </div>
        </div>

        <div class="row mt-3 mx-3">
            <div class="col-12">
                <div class="relevant mx-3 my-2 text-center">
                    <!-- <p> -->
                    <a class="" href="#">LO MÁS RELEVANTE DE LA SEMANA.</a>
                    <!-- </p> -->
                </div>
            </div>
        </div>

        <div class="row mx-md-0 mx-3 ">
            <div
                v-for="(object, index) in cards"
                class="col-md p-0 my-2 mx-md-2"
                :key="index"
            >
                <Card :arrayindex="index" />
            </div>
        </div>

        <div class="row mx-2 mt-4">
            <div class="col-md-8">
                <Body />
            </div>

            <div class=" col-md-4">
                <Sidebar />
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <Footer />
            </div>
        </div>
    </div>
</template>

<script>
// Import header component.
import Header from "./header";
import Card from "./card";
import Body from "./body";
import Sidebar from "./sidebar";
import Footer from "./footer";

import { bus } from "../media/bus";

export default {
    name: "App",

    components: {
        Header,
        Card,
        Body,
        Sidebar,
        Footer
    },

    data() {
        return {
            cards: ["1", "2"]
        };
    },

    created() {
        axios.get("/relevant").then(resp => {
            // console.log(resp.data);

            bus.$emit("bus_relevants", resp.data);
        });
    }
};
</script>

<style lang="scss" scoped>
.relevant {
    background-color: rgba(21, 21, 21, 0.808);
    border: 1px solid rgba(255, 255, 255, 0.89);

    -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    // justify-content: center;
    a {
        font-weight: bolder;
        font-size: 1.2em;
        text-decoration: none;
        color: aliceblue;
    }
}

.side-bar {
    // position: fixed;
    height: 90em;
    width: 5em;
    background-color: aliceblue;
}

.container {
    // position: relative !important;
    padding: 0 0 0 0;
}

.sticked {
    position: fixed;
    top: 0;
}

.relevant-container {
    // display: flex;
    width: 100%;
    // height: fit-content;
    background-color: #fff;
    -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
}
</style>
