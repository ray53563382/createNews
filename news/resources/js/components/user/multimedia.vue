<template>
<div class="daots">
    <Header />

    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-12">
                <h4 class="p-title"><b>Multimedia</b></h4>
                <div class="row">

                    <div class="multimedia col-lg-4 col-md-6 col-4 col-sm-12" style="margin-top: 3%" v-for="(data, index) in resgistrosMulti" :key="`data-${index}`">
                        <iframe width="360" height="240" :src="'https://www.youtube.com/embed/'+ data.url" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h6 class="color-lite-black pt-10 ">Tipo: <span class="color-black"><b>Multimedia</b></span> Video</h6>
                        <h5><b>{{data.nombre}}</b></h5>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <Footer class="my-3" />
</div>
</template>

<script>
import Header from "./header";
import Footer from "./footer";

export default {
    components: {
        Header,
        Footer,
    },
    data() {
        return {
            resgistrosMulti: [],
        }
    },
    mounted() {
        this.resgistrosMulti = [];

        axios.get('/multimedia').then(res => {

            res.data.forEach(element => {
                let url = element.url.split('v=');
                console.log(url);
                element.url = url[1];
                this.resgistrosMulti.push(element)
            });

            console.log("**********************");
            console.log(this.resgistrosMulti);
        });
    }
};
</script>

<style lang="scss" scoped>

</style>
