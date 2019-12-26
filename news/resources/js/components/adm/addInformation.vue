   <template>

  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Registro de artículos</h4>
                                    <p class="card-category">Si no encuentra su información recargue la página web</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>No.</th>
                                            <th style="width: 20%;">Nombre de publicación</th>
                                            <th>Importancia</th>
                                            <th>Autor</th>
                                            <th style="width: 29%;">Información</th>
                                            <th style=" width:100%; border-bottom: 0px solid #dee2e6;">Editar</th>
                                        </thead>
                                        <tbody>
                                             <tr  v-for="(item, index) in notas" :key="index" >
                                                <td>{{index + 1}}</td>
                                                <td>{{item.titulo}}</td>
                                                <td>{{item.importancia}}</td>
                                                <td>{{item.autor}}</td>
                                                <td>
                                                  <div style="height: 60px; overflow-y: auto;">
                                                     {{item.informacionArt}}
                                                  </div>
                                                </td>
                                                  <td>
                                                    <button type="button" class="btn btn-labeled btn-success">
                                                     <span class="btn-label"><i class="fa fa-pencil-square-o"></i></span></button>
                                                    <button type="button" class="btn btn-labeled btn-danger" style="margin-left: 4%;">
                                                    <span class="btn-label"><i class="fa fa-remove"></i></span></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>

</template>
<script>
    export default {
        data() {
          return {
            notas: [],
          }
        },
        created(){
          axios.get('/notas').then(res=>{
            this.notas = res.data;
            console.log(this.notas);
          })
        },
        mounted() {
        }
    }
</script>