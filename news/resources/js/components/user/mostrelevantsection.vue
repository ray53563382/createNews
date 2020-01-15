<template>
    <div class="container">
                <!-- <h1>{{$store.state.numero}}</h1> -->

        <div class="h-600x h-sm-auto">
            <div class="h-2-3 h-sm-auto oflow-hidden">
                <div
                    class="pb-5 pr-5 pr-sm-0 float-left float-sm-none w-2-3 w-sm-100 h-100 h-sm-300x relevant"
                >
                    <a
                        class="pos-relative h-100 dplay-block"
                        @click="goToDocumentView(relevantes[0].id)"
                    >
                        <div
                            :style="{
                                backgroundImage:
                                    'url(' +
                                    relevantes[0].imgdesmostrativa +
                                    ' ) '
                            }"
                            class="img-bg  bg-grad-layer-6"
                        ></div>

                        <div class="abs-blr color-white p-20 bg-sm-color-7">
                            <h3 class="mb-15 mb-sm-5 font-sm-13">
                                <b>{{ relevantes[0].titulo }}</b>
                            </h3>
                            <ul class="list-li-mr-20">
                                <li>
                                    Por:
                                    <span class="color-primary"
                                        ><b>{{ relevantes[0].autor }}</b></span
                                    >
                                    {{ relevantes[0].fecha }}
                                </li>
                            </ul>
                        </div>
                        <!--abs-blr --> </a
                    ><!-- pos-relative -->
                </div>
                <!-- w-1-3 -->

                <div
                    class="float-left float-sm-none w-1-3 w-sm-100 h-100 h-sm-600x"
                >
                    <div class="pl-5 pb-5 pl-sm-0 ptb-sm-5 pos-relative h-50">
                        <a class="pos-relative h-100 dplay-block" @click="goToDocumentView(relevantes[1].id)">

                           
                            <div
                                :style="{
                                    backgroundImage:
                                        'url(' +
                                        relevantes[1].imgdesmostrativa +
                                        ' ) '
                                }"
                                class="img-bg bg-2 bg-grad-layer-6"
                            ></div>

                            <div class="abs-blr color-white p-20 bg-sm-color-7">
                                <h4 class="mb-10 mb-sm-5">
                                    <b>{{ relevantes[1].titulo }}</b>
                                </h4>
                                <ul class="list-li-mr-20">
                                    <li>
                                        Por:
                                        <span class="color-primary"
                                            ><b>{{
                                                relevantes[1].autor
                                            }}</b></span
                                        >
                                        {{ relevantes[1].fecha }}
                                    </li>
                                </ul>
                            </div>
                            <!--abs-blr --> </a
                        ><!-- pos-relative -->
                    </div>
                    <!-- w-1-3 -->

                    <div class="pl-5 ptb-5 pl-sm-0 pos-relative h-50">
                        <a class="pos-relative h-100 dplay-block"  @click="goToDocumentView(relevantes[2].id)">
                            <div
                                :style="{
                                    backgroundImage:
                                        'url(' +
                                        relevantes[2].imgdesmostrativa +
                                        ' ) '
                                }"
                                class="img-bg bg-3 bg-grad-layer-6"
                            ></div>

                            <div class="abs-blr color-white p-20 bg-sm-color-7">
                                <h4 class="mb-10 mb-sm-5">
                                    <b>{{ relevantes[2].titulo }}</b>
                                </h4>
                                <ul class="list-li-mr-20">
                                    <li>
                                        Por:
                                        <span class="color-primary"
                                            ><b>{{
                                                relevantes[2].autor
                                            }}</b></span
                                        >
                                        {{ relevantes[2].fecha }}
                                    </li>
                                </ul>
                            </div>
                            <!--abs-blr --> </a
                        ><!-- pos-relative -->
                    </div>
                    <!-- w-1-3 -->
                </div>
                <!-- float-left -->
            </div>
            <!-- h-2-3 -->

            <div class="h-1-3 oflow-hidden">
                <div
                    class="pr-5 pr-sm-0 pt-5 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x"
                >
                    <a class="pos-relative h-100 dplay-block" @click="goToDocumentView(relevantes[3].id)">
                        <div
                            :style="{
                                backgroundImage:
                                    'url(' +
                                    relevantes[3].imgdesmostrativa +
                                    ' ) '
                            }"
                            class="img-bg bg-4 bg-grad-layer-6"
                        ></div>

                        <div class="abs-blr color-white p-20 bg-sm-color-7">
                            <h4 class="mb-10 mb-sm-5">
                                <b>{{ relevantes[3].titulo }}</b>
                            </h4>
                            <ul class="list-li-mr-20">
                                <li>
                                    Por:
                                    <span class="color-primary"
                                        ><b>{{ relevantes[3].autor }}</b></span
                                    >
                                    {{ relevantes[3].fecha }}
                                </li>
                            </ul>
                        </div>
                        <!--abs-blr --> </a
                    ><!-- pos-relative -->
                </div>
                <!-- w-1-3 -->

                <div
                    class="plr-5 plr-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x"
                >
                    <a class="pos-relative h-100 dplay-block" @click="goToDocumentView(relevantes[4].id)">
                        <div
                            :style="{
                                backgroundImage:
                                    'url(' +
                                    relevantes[4].imgdesmostrativa +
                                    ' ) '
                            }"
                            class="img-bg bg-5 bg-grad-layer-6"
                        ></div>

                        <div class="abs-blr color-white p-20 bg-sm-color-7">
                            <h4 class="mb-10 mb-sm-5">
                                <b>{{ relevantes[4].titulo }}</b>
                            </h4>
                            <ul class="list-li-mr-20">
                                <li>
                                    Por:
                                    <span class="color-primary"
                                        ><b>{{ relevantes[4].autor }}</b></span
                                    >
                                    {{ relevantes[4].fecha }}
                                </li>
                            </ul>
                        </div>
                        <!--abs-blr --> </a
                    ><!-- pos-relative -->
                </div>
                <!-- w-1-3 -->

                <div
                    class="pl-5 pl-sm-0 pt-5 pt-sm-10 float-left float-sm-none pos-relative w-1-3 w-sm-100 h-100 h-sm-300x"
                >
                    <a class="pos-relative h-100 dplay-block" @click="goToDocumentView(relevantes[5].id)">
                        <div
                            :style="{
                                backgroundImage:
                                    'url(' +
                                    relevantes[5].imgdesmostrativa +
                                    ' ) '
                            }"
                            class="img-bg bg-6 bg-grad-layer-6"
                        ></div>

                        <div class="abs-blr color-white p-20 bg-sm-color-7">
                            <h4 class="mb-10 mb-sm-5">
                                <b>{{ relevantes[5].titulo }}</b>
                            </h4>
                            <ul class="list-li-mr-20">
                                <li>
                                    Por:
                                    <span class="color-primary"
                                        ><b>{{ relevantes[5].autor }}</b></span
                                    >
                                    {{ relevantes[5].fecha }}
                                </li>
                            </ul>
                        </div>
                        <!--abs-blr --> </a
                    ><!-- pos-relative -->
                </div>
                <!-- w-1-3 -->
            </div>
            <!-- h-2-3 -->
        </div>
        <!-- h-100vh -->
    </div>
    <!-- container -->
</template>

<script>
export default {
    name: "mostrelevantsection",

    data() {
        return {
            relevantes: [],
            publicacionFlag:false
        };
    },

    methods: {
        goToDocumentView(id) {
            location.replace("/documentView/" + id);
        },
    },

    created() {
        axios({
            method: "post",
            url: "/relevant"
        }).then(resp => {
            this.relevantes = resp.data;
            console.log("ijsaodjsiadjfiosjfiosdjfiojsdiofjiosdfjojfjsfjosdi");
            console.log(this.relevantes);
        });
    }
};
</script>

<style></style>
