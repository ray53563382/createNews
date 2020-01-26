<template>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Agregar Multimedía</h4>
                </div>

                <div class="card-body">
                    <form novalidate="true">
                        <div class="row">
                            <div class="col-lg-12 pr-1">
                                <div class="form-group">
                                    <label>Nombre de archivo</label>
                                    <input type="text" class="form-control" v-model="registro.nombre">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 pr-1">
                                <div class="form-group">
                                    <label>Url</label>
                                    <select class="form-control" v-model="registro.data">
                                        <option value="1">Video</option>
                                        <option value="2">Audio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-1">
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" v-model="registro.url">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Agregar multimedia</button>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th style="width: 5%;">No.</th>
                        <th style="width: 70%;">Nombre multimedia</th>
                        <th style="width: 25%;">Url</th>

                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    data() {
        return {

             registro: {
                nombre: '',
                data: '',
                url: '',
            },
        }
    }, mounted() {
        axios.get('/multimedia').then(res => {
         console.log(res);
        });
    },
    methods: {
        agregar() {

            // if(nombre != '' && data != '' && url != ''){
                

            // }else{
            //     console.log("error")
            // }
        }
    }
}
</script>

<style scoped>
</style>
