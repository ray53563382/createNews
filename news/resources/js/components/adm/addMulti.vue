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
                                    <input type="text" class="form-control" v-model="nombre">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 pr-1">
                                <div class="form-group">
                                    <label>Url</label>
                                    <select class="form-control" v-model="audio">
                                        <option value="1">Video</option>
                                        <option value="2">Audio</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 pr-1">
                                <div class="form-group">
                                    <label>Url</label>
                                    <input type="text" class="form-control" v-model="url">
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

                        <!-- <tr v-for="(item, index) in notas" :key="index"> -->
                        <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <!-- <td>{{item.titulo}}</td>
                            <td v-if="item.importancia == 1" style="color:green">Alta</td>
                            <td v-else-if="item.importancia == 2" style="color: orange;">Media</td>
                            <td v-else-if="item.importancia == 3" style="color: red">Baja</td>
                            <td>{{item.autor}}</td>
                            <td>
                                <div>
                                    Para ver información click en editar
                                </div>
                            </td>
                            <td>
                                <button type="button" @click="editar(item)" data-toggle="modal" data-target="#exampleModalLong" class="btn btn-labeled btn-success">
                                    <span class="btn-label"><i class="fa fa-pencil-square-o"></i></span></button>
                                <button type="button" @click="eliminar(item,index)" class="btn btn-labeled btn-danger" style="margin-left: 4%;">
                                    <span class="btn-label"><i class="fa fa-remove"></i></span></button>
                            </td> -->
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
            nomre: '',
            url: '',
        }
    },
    methods: {
        agregar() {
            console.log("hola we");
        }
    }
}
</script>

<style scoped>
</style>
