<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <Header></Header>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-5">
                            <p class="h1 text-muted">{{ docTitle }}</p>
                            <!-- <p class="h1 text-muted">{{docTitle}}</p> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-4">
                                    <p>Por: {{ docAutor }}</p>
                                </div>
                                <!-- <div class="col-4">
                                    <p class="h5">Tema: {{ docTheme }}</p>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <p class="h6">{{ docDate }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img
                                        :src="docImage"
                                        alt
                                        class="img-fluid img-thumbnail"
                                    />
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="container">
                                    <div
                                        v-html="docTextBody"
                                        class="col-12"
                                    ></div>
                                </div>
                            </div>
                            <div class="row my-5">
                                <div class="col-4">
                                    <p>
                                        <a ref="downloadpdf">descarga pdf</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <Footer></Footer>
            </div>
        </div>
    </div>
</template>

<script>
// import logito from "../media/home.png";
import Header from "./header";
import Footer from "./footer";

export default {
    name: "pdfview",
    props: {
        myid: {
            required: true
        }
    },
    components: {
        Header,
        Footer
    },
    data() {
        return {
            docTitle: null,
            docDate: null,
            docAutor: null,
            docTags: ["America", "Asia", "Mexico"],
            docDownloadURL: "http://someurl.com",
            docTheme: null,
            docImage: null,
            docTextBody: null,
            // logito: logito,
            dataID: "hey",
            pdfdown: null,
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

    methods: {},

    created() {
        // this.dataID = this.myid;
        // console.log(this.myid);
        console.log(this.myid);

        axios({
            method: "post",
            url: "/getpdf",
            data: {
                id: this.myid
            }
        })
            .then(resp => {
                console.log(resp.data);

                // console.log(resp.data[0].titulo);
                this.docTitle = resp.data[0].nombre;
                this.docDate = resp.data[0].fecha;
                // this.docAutor = resp.data[0].autor;
                // this.docTheme = this.categorias[resp.data[0].idcategoria];
                this.docImage = resp.data[0].imgdesmostrativa;
                this.docTextBody = resp.data[0].informacion;

                // this.pdfdown = URL.createObjectURL(resp.data[0].pdf);
                console.log(this.$refs.downloadpdf);

                // this.binaryConversion = atob(resp.data[0].pdf);
                this.$refs.downloadpdf.download = "documento.pdf";
                this.$refs.downloadpdf.href = resp.data[0].pdf;
            })
            .catch(Error => console.log(Error));
    }
};
</script>

<style lang="scss" scoped>
.placeholder {
    height: fit-content;
    width: 100%;
    // background-color: #151515;
}
</style>
