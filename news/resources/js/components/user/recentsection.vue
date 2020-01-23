<template>
<section>
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8">
                <h4 class="p-title"><b>PUBLICACIONES RECIENTES</b></h4>
                <div class="row">

                    <div class="col-sm-6" @click="goToDocumentView(recientes[0].id)">
                        <img :src="recientes[0].imgdesmostrativa" alt="">
                        <h4 class="pt-20"><a @click="goToDocumentView(recientes[0].id)"><b>{{recientes[0].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 pb-20">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[0].autor}}</b></a>
                                {{recientes[0].fecha}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6">
                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[1].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[1].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[1].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[1].autor}},</b></span>{{recientes[1].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[2].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[2].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[2].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[2].autor}},</b></span> {{recientes[2].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[3].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[3].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[3].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[3].titulo}},</b></span> {{recientes[3].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[4].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[4].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[4].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[4].autor}},</b></span> {{recientes[4].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->
                    </div><!-- col-sm-6 -->

                </div><!-- row -->

                <h4 class="p-title mt-30"><b>PUBLICACIONES</b></h4>
                <div class="row">

                    <div class="col-sm-6 box" @click="goToDocumentView(recientes[5].id)">
                        <img :src="recientes[5].imgdesmostrativa" alt="" style="width: 100%;height: 300px;display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a><b>{{recientes[5].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a class="color-black"><b>{{recientes[5].autor}},</b></a>
                                {{recientes[5].fecha}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 box" @click="goToDocumentView(recientes[6].id)">
                        <img :src="recientes[6].imgdesmostrativa" alt="" style="width: 100%;height: 300px; display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a href="#"><b>{{recientes[6].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[6].autor}},</b></a>
                                {{recientes[6].fecha}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 box " @click="goToDocumentView(recientes[7].id)">
                        <img :src="recientes[7].imgdesmostrativa" alt="" style="width: 100%;height: 300px; display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a href="#"><b> <br />{{recientes[7].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[7].autor}},</b></a>
                                {{recientes[7].fecha}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 box" @click="goToDocumentView(recientes[8].id)">
                        <img :src="recientes[8].imgdesmostrativa" alt="" style="width: 100%;height: 300px; display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a href="#"><b> <br />{{recientes[8].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[8].autor}},</b></a>
                                {{recientes[8].fecha}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 box" @click="goToDocumentView(recientes[9].id)">
                        <img :src="recientes[9].imgdesmostrativa" alt="" style="width: 100%;height: 300px; display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a href="#"><b> <br />{{recientes[9].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[9].autor}},</b></a>
                                {{recientes[5].titulo}}</li>

                        </ul>
                    </div><!-- col-sm-6 -->

                    <div class="col-sm-6 box" @click="goToDocumentView(recientes[10].id)">
                        <img :src="recientes[10].imgdesmostrativa" alt="" style="width: 100%;height: 300px; display: block;margin: 0 auto;">
                        <h4 class="pt-20"><a href="#"><b>{{recientes[10].titulo}}</b></a></h4>
                        <ul class="list-li-mr-20 pt-10 mb-30">
                            <li class="color-lite-black">Por <a href="#" class="color-black"><b>{{recientes[10].autor}},</b></a>
                                {{recientes[10].fecha}}</li>
                        </ul>
                    </div><!-- col-sm-6 -->

                </div><!-- row -->

                <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="/search/get_all_docs"><b>Ver más publicaciones.</b></a>
            </div><!-- col-md-9 -->

            <div class="d-none d-md-block d-lg-none col-md-3"></div>
            <div class="col-md-6 col-lg-4">
                <div class="pl-20 pl-md-0">


                    <div class="mtb-50">
							<h4 class="p-title"><b>NOTICIAS</b></h4>
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img :src="noticias[0].imgdesmostrativa" alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{noticias[0].titulo}}</b></h5>
									<h6 class="color-lite-black pt-10"><span v-if="noticias[0].autor == 'Sin Autor' " class="color-black">by <b> Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img :src="noticias[1].imgdesmostrativa"  alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{noticias[1].titulo}}</b></h5>
									<h6 class="color-lite-black pt-10"><span  v-if="noticias[1].autor == 'Sin Autor' "  class="color-black">by <b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img :src="noticias[2].imgdesmostrativa"  alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{noticias[2].titulo}}</b></h5>
									<h6 class="color-lite-black pt-10"><span  v-if="noticias[2].autor == 'Sin Autor' " class="color-black">by <b>Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							
							<a class="oflow-hidden pos-relative mb-20 dplay-block" href="#">
								<div class="wh-100x abs-tlr"><img :src="noticias[3].imgdesmostrativa"  alt=""></div>
								<div class="ml-120 min-h-100x">
									<h5><b>{{noticias[3].titulo}}</b></h5>
									<h6 class="color-lite-black pt-10"><span v-if="noticias[3].autor == 'Sin Autor' " class="color-black">by <b >Danile Palmer,</b></span> Jan 25, 2018</h6>
								</div>
							</a><!-- oflow-hidden -->
							<a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="/search/get_all_news"><b>Ver más noticias.</b></a>
						</div>


                    <div class="mtb-50">
                        <h4 class="p-title"><b>PUBLICACIONES QUE PUEDEN INTERESARTE</b></h4>
                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[10].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[10].imgdesmostrativa"></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[10].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[10].autor}},</b></span> {{recientes[11].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[11].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[12].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[11].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[11].autor}},</b></span>{{recientes[12].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[12].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[13].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[12].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[12].autor}},</b></span> {{recientes[13].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                        <a class="oflow-hidden pos-relative mb-20 dplay-block" @click="goToDocumentView(recientes[14].id)">
                            <div class="wh-100x abs-tlr"><img :src="recientes[14].imgdesmostrativa" alt=""></div>
                            <div class="ml-120 min-h-100x">
                                <h5><b>{{recientes[14].titulo}}</b></h5>
                                <h6 class="color-lite-black pt-10">Por <span class="color-black"><b>{{recientes[14].autor}},</b></span>{{recientes[14].fecha}}</h6>
                            </div>
                        </a><!-- oflow-hidden -->

                    </div><!-- mtb-50 -->

                    <div class="mtb-50 mb-md-0">
                        <h4 class="p-title"><b>NEWSLETTER</b></h4>
                        <p class="mb-20">Suscribete y obten la información más relevante de nuestro sitio web</p>
                        <form class="nwsltr-primary-1">
                            <input type="mail" v-model="email" placeholder="Correo electrónico" />
                            <button type="submit"><i class="ion-ios-paperplane"></i></button>
                        </form>
                    </div><!-- mtb-50 -->

                    <div class="mtb-50 .embed-responsive ">
                        <h4 class="p-title "><b>Multimedia</b> <a style="font-size:12px">Ver todo</a></h4>
                        <iframe class="my-3" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                        </iframe>
                        <h5><b>Nombre de video</b></h5>
                        <h6 class="color-lite-black pt-10 ">Tipo:  <span class="color-black"><b>Multimedia</b></span> Video</h6>
						     <iframe class="my-3" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                        </iframe>
                        <h5><b>Nombre de video</b></h5>
                        <h6 class="color-lite-black pt-10 ">Tipo:  <span class="color-black"><b>Multimedia</b></span> Video</h6>
						     <iframe class="my-3" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1">
                        </iframe>
                        <h5><b>Nombre de video</b></h5>
                        <h6 class="color-lite-black pt-10">Tipo:  <span class="color-black"><b>Multimedia</b></span> Video</h6>
                    </div>

                </div><!--  pl-20 -->
            </div><!-- col-md-3 -->

        </div><!-- row -->
    </div><!-- container -->
</section>
</template>

<script>
export default {
    name: "recentsection",

    data() {
        return {
            recientes: [],
            noticias: [],
            email: '',
        }
    },
    methods: {
        goToDocumentView(id) {
            location.replace("/documentView/" + id);
        },
        saveEmail() {
            console.log(this.email);

            axios.post('/saveEmail', this.email)
                .then(resp => {
                    this.$swal(
                        'Registrado!',
                        'Ahora ya puedes esperar nuestra información en tu correo electronico!',
                        'success'
                    )
                }).catch(error => {
                    console.log(error);
                });
        }
    },
    created() {
        axios({
                method: "post",
                url: "/recent"
            })
            .then(resp => {

                this.recientes = resp.data;

                axios({
                     method: "post",
                       url: "/getNews"
                })
                .then(resp =>{
                    this.noticias = resp.data;
                    console.log(this.noticias);
                    
                })

                
                // this.recientes = resp.data
                // console.log(this.recientes);

            })
            .catch(Error => console.log(Error))

    }
}
</script>

<style>

</style>
