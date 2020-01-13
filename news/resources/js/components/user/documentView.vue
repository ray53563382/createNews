<template>
    <div class="cont">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <img :src="sendData.imgdesmostrativa" alt="" />
                <h3 class="mt-30">
                    <b>{{ sendData.titulo }}</b>
                </h3>
                <ul class="list-li-mr-20 mtb-15">
                    <li>
                        Por: <b>{{ sendData.autor }} </b>{{ sendData.fecha }}
                    </li>
                </ul>
                <div
                    v-html="sendData.informacionArt"
                    class="col-12"
                    style="margin-bottom:5%"
                ></div>
                <div class="brdr-ash-1 opacty-5"></div>
            </div>
            <!-- col-md-9 -->

            <div class="d-none d-md-block d-lg-none col-md-3"></div>
            <div class="col-md-6 col-lg-4">
                <div class="pl-20 pl-md-0">
                    <div class="mtb-50"><popularPost></popularPost>></div>
                    <!-- mtb-50 -->
                </div>
                <!--  pl-20 -->
            </div>
            <!-- col-md-3 -->
        </div>
        <!-- row -->

        <h4 class="p-title mt-50"><b>Te podría interesar</b></h4>
        <div class="row">
            <div
                class="col-12 col-lg-3 col-md-6 box"
                @click="goToDocumentView(registros[0])"
            >
                <img
                    :src="registros[0].imgdesmostrativa"
                    alt=""
                    style="width: 100%; height: 300px;"
                />
                <h4 class="pt-20">
                    <a href="#"
                        ><b style="color: black;">{{
                            registros[0].titulo
                        }}</b></a
                    >
                </h4>
                <ul style="margin-left: 0px;">
                    <li class="color-lite-black">
                        Autor:
                        <a href="#" class="color-black"
                            ><b>{{ registros[0].autor }},</b></a
                        >
                        <br />
                        Jan 25, 2018
                    </li>
                </ul>
            </div>
            <div
                class="col-12 col-lg-3 col-md-6 box"
                @click="goToDocumentView(registros[1])"
            >
                <img
                    :src="registros[1].imgdesmostrativa"
                    alt=""
                    style="width: 100%; height: 300px;"
                />
                <h4 class="pt-20">
                    <a href="#"
                        ><b style="color: black;">{{
                            registros[1].titulo
                        }}</b></a
                    >
                </h4>
                <ul style="margin-left: 0px;">
                    <li class="color-lite-black">
                        Autor:
                        <a href="#" class="color-black"
                            ><b>{{ registros[1].autor }},</b></a
                        >
                        <br />
                        Jan 25, 2018
                    </li>
                </ul>
            </div>
            <div
                class="col-12 col-lg-3 col-md-6 box"
                @click="goToDocumentView(registros[2])"
            >
                <img
                    :src="registros[2].imgdesmostrativa"
                    alt=""
                    style="width: 100%; height: 300px;"
                />
                <h4 class="pt-20">
                    <a href="#"
                        ><b style="color: black;">{{
                            registros[2].titulo
                        }}</b></a
                    >
                </h4>
                <ul style="margin-left: 0px;">
                    <li class="color-lite-black">
                        Autor:
                        <a href="#" class="color-black"
                            ><b>{{ registros[2].autor }},</b></a
                        >
                        <br />
                        Jan 25, 2018
                    </li>
                </ul>
            </div>
            <div
                class="col-12 col-lg-3 col-md-6 box"
                @click="goToDocumentView(registros[3])"
            >
                <img
                    :src="registros[3].imgdesmostrativa"
                    alt=""
                    style="width: 100%; height: 300px;"
                />
                <h4 class="pt-20">
                    <a href="#"
                        ><b style="color: black;">{{
                            registros[3].titulo
                        }}</b></a
                    >
                </h4>
                <ul style="margin-left: 0px;">
                    <li class="color-lite-black">
                        Autor:
                        <a href="#" class="color-black"
                            ><b>{{ registros[3].autor }},</b></a
                        >
                        <br />
                        Jan 25, 2018
                    </li>
                </ul>
            </div>
        </div>
        <!-- row -->
    </div>
</template>

<script>
import logito from "../media/home.png";
import Header from "./header";
import Footer from "./footer";

export default {
    name: "documentview",
    props: ["sendData"],

    components: {
        Header,
        Footer
    },
    data() {
        return {
            docTitle: null,
            docDate: null,
            docAutor: null,
            // docTags: ["America", "Asia", "Mexico"],
            // docDownloadURL: "http://someurl.com",
            docTheme: null,
            docImage: null,
            docTextBody: null,
            logito: logito,
            dataID: "hey",
            registros: [],
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
            ]
        };
    },
    methods: {
        goToDocumentView(data) {
            console.log(data);
        }
    },
    created() {
        axios
            .post("/popularPostMedium")
            .then(resp => {
                resp.data.forEach(element => {
                    this.registros.push(element);
                });
                console.log(this.registros);
            })
            .catch(error => {
                console.log(error);
            });
    }
};
</script>

<style lang="scss" scoped>
.placeholder {
    height: fit-content;
    width: 100%;
    // background-color: #151515;
}

.mt-30 {
    margin-top: 30px !important;
}

.list-li-mr-20 > li {
    margin-right: 20px;
}

.mtb-15 {
    margin-top: 15px !important;
    margin-bottom: 15px !important;
}

.brdr-ash-1 {
    height: 1px;
    background: #aaa;
}

.opacty-5 {
    opacity: 0.5;
}

.p-title {
    position: relative;
    padding-bottom: 20px;
    margin-bottom: 40px;
}

.p-title:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 1px;
    background: #ccc;
}

.p-title:before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 5px;
    background: #f9b500;
    z-index: 1;
}

.mt-50 {
    margin-top: 50px !important;
}

.pt-20 {
    padding-top: 20px !important;
}

.pt-10 {
    padding-top: 10px !important;
}

.list-a-pt-10 > li > a {
    padding-top: 10px;
}

.list-li-pt-10 > li {
    padding-top: 10px;
}

.mb-30 {
    margin-bottom: 30px !important;
}

.color-lite-black {
    color: #888;
}

.color-black {
    color: #111;
}

.color-primary {
    color: #f9b500;
}

.mr-5 {
    margin-right: 5px !important;
}
</style>
