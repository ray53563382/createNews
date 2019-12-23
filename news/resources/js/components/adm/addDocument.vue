<template> </template>

<script>
import Editor from "@tinymce/tinymce-vue";
export default {
    data() {
        return {
            registros: [],
            registro: {
                titulo: "",
                fecha: "",
                autor: "",
                importancia: "",
                idcategoria: "",
                informacionArt: "",
                imgdesmostrativa: ""
            }
        };
    },
    mounted() {
        console.log("Component mounted.");
    },

    methods: {
        obtenerImagen(e) {
            let fileReader = new FileReader();
            fileReader.readAsDataURL(e.target.files[0]);
            fileReader.onload = e => {
                this.registro.imgdesmostrativa = e.target.result;
            };
        }
    },

    components: {
        editor: Editor
    }
};
</script>
