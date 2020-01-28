<template>
<div class="daots">
    <Header />

    <div class="container">

        <div class="col-md-12 col-lg-12">
            <h4 class="p-title"><b>Multimedia</b></h4>

            <div class="row">
                <div class="col-12">
                    <ul id="tabs" class="nav nav-tabs">
                        <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase active">Videos</a></li>
                        <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Podcast</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div id="profile1" class=" row tab-pane fade active show">
                    <div class="multimedia col-lg-4" style="margin-top: 3%" v-for="(data, index) in resgistrosMulti" :key="`data-${index}`">
                        <iframe width="360" height="240" :src="'https://www.youtube.com/embed/'+ data.url" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h6 class="color-lite-black pt-10 ">Tipo: <span class="color-black"><b>Multimedia</b></span> Video</h6>
                        <h5><b>{{data.nombre}}</b></h5>
                    </div>
                </div>

                <div id="messages1" class="tab-pane fade">
                    <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
                </div>

            </div>

            <!-- <div id="tabsContent" class="tab-content">
              
            </div> -->

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
