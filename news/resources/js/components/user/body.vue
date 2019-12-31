<template>
    <div class="body-main container">
        <div class="row pt-lg-4 pr-lg-5">
            <div class="col-lg-9 pl-lg-5">
                <h1>Publicaciones recientes</h1>
            </div>

            <div class="col-3">
                <div class="dropdown">
                    <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        Ordernar por
                    </button>
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                    >
                        <a class="dropdown-item" href="#">Fecha</a>
                        <a class="dropdown-item" href="#">Relevancia</a>
                        <a class="dropdown-item" href="#">Tema</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-0 px-2">
            <div
                class="col-md-6"
                v-for="(object, index) in publicacionesRecientes"
                :key="index"
            >
                <Minicard />
            </div>
        </div>

        <div class="row my-3">
            <div class="col-12 d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"
                                >Anterior</a
                            >
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">
                                2
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import Minicard from "./miniCard";
import { bus } from "../media/bus";

export default {
    name: "body",

    data() {
        return {
            publicacionesRecientes: [1, 2, 3, 4, 5, 6, 7, 8]
        };
    },

    components: {
        Minicard
        // Sidebar
    }

    // created() {
    //     axios.get("/recent").then(resp => {
    //         console.log(resp.data);
    //     });
    // }
};
</script>

<style lang="scss" scoped>
@media only screen and (max-width: 600px) {
    .body-main {
        background-color: transparent !important;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
    }
}

.body-main {
    // position: relative;
    height: 100%;
    width: 100%;
    background-color: aliceblue;
    -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
    box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
}
</style>
