<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <Header />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-4">
                <div class="relevant px-3 py-2">
                    <p>
                        <a href="#">LO MÁS RELEVANTE DE LA SEMANA.</a>
                    </p>
                </div>
            </div>

            <div class="col-4"></div>
        </div>

        <div class="row mt-3">
            <div class="col-12 py-3 relevant-container">
                <div class="col-6">
                    <Card />
                </div>

                <div class="col-6">
                    <Card />
                </div>
            </div>
        </div>

        <!-- <div class="row rel">
      <div class="col-9 fix">
        
          <div class="side-bar">
            hello
          </div>
     
      </div>
    </div>-->

        <div class="row mt-4">
            <div class="col-8">
                <Body />
            </div>

            <div class="col-4">
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

export default {
    name: "App",

    components: {
        Header,
        Card,
        Body,
        Sidebar,
        Footer
    }
};
</script>

<style lang="scss" scoped>
.relevant {
    background-color: rgba(21, 21, 21, 0.808);
    border: 1px solid rgba(255, 255, 255, 0.89);
    height: fit-content;
    width: fit-content;
    // background-color: aliceblue;
    -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    justify-content: center;
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
    display: flex;
    width: fit-content;
    height: fit-content;
    background-color: #fff;
    -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
}
</style>
