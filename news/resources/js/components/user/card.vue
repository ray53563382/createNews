<template>
    <div
        @click="goToDocumentView"
        :style="{ backgroundImage: 'url(' + card_imagen + ' )' }"
        class="card  mt-lg-3 mx-lg-3 "
    >
        <div ref="transElement" class="transition-element">
            <p class="pl-3 pt-2  wraptext">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque
                officiis sed temporibus perferendis, ipsa velit illo, atque
                eligendi impedit enim libero veritatis praesentium modi minus
                recusandae inventore. Non, eveniet sunt.
            </p>
        </div>

        <div @mouseenter="displayElement" class="box">
            <div></div>

            <div class="tag-box ml-3">
                <div class="px-2">
                    <p>{{ card_category }}</p>
                </div>
            </div>

            <P v-html="card_title" class="title-box ml-3 turn-black"></P>

            <p class="autor-box ml-3 turn-black">{{ card_autor }}</p>
        </div>
    </div>
</template>

<script>
import { bus } from "../media/bus";

export default {
    name: "card",

    props: {
        arrayindex: {
            required: true
        }
    },

    data() {
        return {
            card_title: null,
            card_description: null,
            card_autor: null,
            card_imagen: null,
            card_category: null,
            card_id: null,
            categorias: [
                "null",
                "Crisis climática y conservación",
                "Minería",
                "Hidroeléctricas y eólicas",
                "Petróleo fracking y gasoductos",
                "Derechos indígenas",
                "Tierra y territorio",
                "Agua",
                "Bosques y deforestación",
                "Megaproyectos"
            ],
            relevantes: [],
            index_carousel: 0
            // arrindex: null
        };
    },

    methods: {
        displayElement() {
            // let transElement = this.$refs['transElement']
            // transElement.classList.add('display-class')
            // console.log(transElement);
        },
        goToDocumentView() {
            location.replace("/documentView/" + this.card_id);
        },

        carousel() {
            this.index_carousel >= this.relevantes.length - 1
                ? (this.index_carousel = 0)
                : this.index_carousel++;

            this.card_title = this.relevantes[this.index_carousel].titulo;
            this.card_description = this.relevantes[
                this.index_carousel
            ].informacionArt;
            this.card_autor = this.relevantes[this.index_carousel].autor;
            this.card_imagen = this.relevantes[
                this.index_carousel
            ].imgdesmostrativa;
            this.card_category = this.categorias[
                this.relevantes[this.index_carousel].idcategoria
            ];
            this.card_id = this.relevantes[this.index_carousel].id;

            setTimeout(this.carousel, 6000);
        },

        runCarousel() {
            this.carousel();
        }
    },

    created() {
        bus.$on("bus_relevants", data => {
            this.card_title = data[this.arrayindex].titulo;
            this.card_description = data[this.arrayindex].informacionArt;
            this.card_autor = data[this.arrayindex].autor;
            this.card_imagen = data[this.arrayindex].imgdesmostrativa;
            this.card_id = data[this.arrayindex].id;
            this.card_category = this.categorias[
                data[this.arrayindex].idcategoria
            ];
            this.relevantes = data;
            this.index_carousel = this.arrayindex;
            // console.log(this.relevantes);
        });
    },

    mounted() {
        let vm = this;
        setTimeout(function() {
            vm.runCarousel();
        }, 9000);
    }
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100i,400,700&display=swap");

// @media only screen and (max-width: 600px) {
//     .box {
//         display: none;
//     }
//     .title-box {
//         font-size: 1em;
//     }
// }

.wraptext {
    text-overflow: hidden;
}

.card {
    // position: relative;
    height: 15em;
    // width: 38em;
    width: 100%;
    background-color: aliceblue;
    // background-image: url("https://source.unsplash.com/user/wsanter");
    // z-index: 10;

    .transition-element {
        position: absolute;
        display: block;
        height: inherit;
        width: 0em;
        transition: width 1s;
        // z-index: 9;
        background-color: aliceblue;
        overflow: hidden;

        p {
            opacity: 0;
            animation: opacity 1s;
        }
    }
}

.card:hover > .transition-element {
    // width: 38em;
    width: 100%;
}

.card:hover > .box > .turn-black {
    color: black;
}
.card:hover > .transition-element > p {
    opacity: 1;
}

.box {
    height: inherit;
    width: inherit;
    display: grid;
    grid-template-columns: 100%;
    // grid-template-rows: 55% 10% 20% 10%;
    grid-template-rows: 45% 13% 25% 10%;

    background: rgb(0, 0, 0);
    background: linear-gradient(
        0deg,
        rgba(0, 0, 0, 0.7679446778711485) 0%,
        rgba(0, 0, 0, 0.0760679271708683) 67%
    );

    .tag-box {
        font-family: "Barlow Semi Condensed", sans-serif;
        font-weight: 400;
        z-index: 999;
        color: rgb(238, 237, 237);

        div {
            height: fit-content;
            width: fit-content;
            background-color: rgba(21, 21, 21, 0.808);
            border: 1px solid rgba(255, 255, 255, 0.89);

            p {
                margin: 0 0 0 0;
            }
        }
    }

    .title-box {
        font-family: "Barlow Semi Condensed", sans-serif;
        font-weight: 700;
        z-index: 999;
        color: rgb(238, 237, 237);
        font-size: 1.2em;
    }

    .autor-box {
        font-family: "Barlow Semi Condensed", sans-serif;
        font-weight: 100;
        font-style: italic;
        z-index: 999;
        color: rgb(238, 237, 237);
    }

    .display-class {
        display: block;
        width: 38em;
        height: 22em;
    }

    // @media only screen and (device-width: 375px) and (device-height: 812px) {
    //     .box {
    //         display: none !important;
    //     }
    // }
}
</style>
