<template>
    <div @click="goToDocumentView" class="card  mt-lg-3 mx-lg-3 ">
        <div ref="transElement" class="transition-element">
            <p class="pl-3 pt-2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                quas minus similique at. Autem expedita, quam reiciendis
                incidunt soluta blanditiis hic voluptas suscipit deserunt,
                harum, velit sapiente. Nihil, quidem corporis!Nulla deleniti
                eaque autem harum corrupti odit labore incidunt voluptates nisi?
                Fuga ratione hic architecto sit corporis commodi quasi
                distinctio exercitationem quae molestias et eveniet, neque
                reprehenderit perferendis magni. Possimus.
            </p>
        </div>

        <div @mouseenter="displayElement" class="box">
            <div></div>

            <div class="tag-box ml-3">
                <div class="px-2">
                    <p>Derechos indígenas y territorio</p>
                </div>
            </div>

            <P class="title-box ml-3 turn-black"
                >El derecho al territorio, frente a la soya transgénica en
                Bacalar, Quintana Roo</P
            >

            <p class="autor-box ml-3 turn-black">Por Heber Uc Rivero</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "card",

    data() {
        return {
            // image: image
        };
    },

    methods: {
        displayElement() {
            // let transElement = this.$refs['transElement']
            // transElement.classList.add('display-class')
            // console.log(transElement);
        },
        goToDocumentView() {
            let docId = 1234;
            location.replace("/documentView/" + docId);
        }
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

.card {
    // position: relative;
    height: 15em;
    // width: 38em;
    width: 100%;
    background-color: aliceblue;
    background-image: url("https://source.unsplash.com/user/wsanter");
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
