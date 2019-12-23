 
 <template>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Agregar documento</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Fecha</label>
                                                    <input type="date" style="font-size: 14px;" class="form-control" placeholder="Company" v-model="registro.fecha">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                  <div class="form-group">
                                                    <label>Importancia</label>
                                                    <select class="form-control" v-model="registro.importancia">
                                                        <!-- <option selected>Selecciona</option> -->
                                                        <option value="1">Alta importancia</option>
                                                        <option value="2">Media importancia</option>
                                                        <option value="3">Baja importancia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nombre documento</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agregar imagen de pdf </label><br>
                                                    <input type="file"  accept="image/*" @change="obtenerImagen">
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Agregar Docuemento</label><br>
                                                    <input type="file"  accept="image/*">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="comment">Información:</label>
                                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Agregar pdf</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <h5 class="title">Mike Andrew</h5>
                                        </a>
                                        <p class="description">
                                            michael24
                                        </p>
                                    </div>
                                    <p class="description text-center">
                                        Registra articulos y novedades de tu página web 
                                        <br> Valida que tus datos esten correctos para el correcto guardado
                                        <br> Despues de guardar valida tus cambios en tu página web
                                    </p>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</template>

<script>
    import Editor from '@tinymce/tinymce-vue'
    export default {

        data(){
        return {
            registros: [],
            registro: {titulo:'',fecha:'', autor:'', importancia:'' ,idcategoria:'',informacionArt:'',imgdesmostrativa:''}
        }

        },
        mounted() {
            console.log('Component mounted.')
        },


          methods:{
            obtenerImagen(e){
            let fileReader = new FileReader();
            fileReader.readAsDataURL(e.target.files[0]);
            fileReader.onload = (e)=>{
                this.registro.imgdesmostrativa = e.target.result
            }
            }
        },

        components: {
     'editor': Editor
   }
    }
</script>