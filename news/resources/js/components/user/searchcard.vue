<template>
    <div class="container">
        <div class="row searchcard ">
            <div class="col-4 ">
                <img :src="logito" alt="" class="myimg img-thumbnail" />
            </div>
            <div class="col-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="h4">Lorem ipsum loret ago entus</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 description-container">
                            <p class="text-truncate text-justify">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Doloribus eaque facilis autem
                                magni ipsa amet sunt
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class=" searchcard">
        <img :src="logito" alt="" class=" myimg img-thumbnail" />
    </div> -->
</template>

<script>
import logito from "../media/home.png";

export default {
    name: "searchcard",

    data() {
        return {
            logito: logito
        };
    }
};
</script>

<style>
.searchcard {
    height: 10em;
    /* width: 100%; */
    /* background-color: violet; */
}

.myimg {
    /* height: 100%; */
    height: 10em;
    width: 100%;
    background-position: center;
    background-size: cover;
}

.description-container {
    height: 5em;
    /* background-color: #151515; */
}
</style>
