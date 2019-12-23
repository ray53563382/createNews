 
 <template>
 <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Agregar articulo</h4>
                                </div>
                                <div class="card-body">
                                    <form enctype="multipart/form-data" @submit.prevent="agregar()">
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Fecha</label>
                                                    <input type="date" style="font-size: 14px;" class="form-control" placeholder="Company" v-model="registro.fecha">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pr-1">
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
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Categoria</label>
                                                     <select class="form-control" v-model="registro.idcategoria">
                                                        <option value="1">Cat 1</option>
                                                        <option value="2">Cat 2</option>
                                                        <option value="3">Cat 3</option>
                                                        <option value="4">Cat 4</option>
                                                        <option value="5">Cat 5</option>
                                                        <option value="6">Cat 6</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Autor</label>
                                                    <input type="text" class="form-control"  v-model="registro.autor">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Nombre de publicación</label>
                                                    <input type="text" class="form-control" placeholder="" v-model="registro.titulo">
                                                </div>
                                            </div>
                                        </div>

                                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Agregar imagen </label><br>
                                                    <input type="file"  accept="image/*" @change="obtenerImagen">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                    <editor v-model="registro.informacionArt"
       api-key="no-api-key"
       initialValue="<p>This is the initial content of the editor</p>"
       :init="{
         height: 500,
         menubar: false,
         plugins: [
           'advlist autolink lists link image charmap print preview anchor',
           'searchreplace visualblocks code fullscreen',
           'insertdatetime media table paste code help wordcount'
         ],
         toolbar:
           'undo redo | formatselect | bold italic backcolor | \
           alignleft aligncenter alignright alignjustify | \
           bullist numlist outdent indent | removeformat | help'
       }"
       ></editor>
                                            </div>
                                        </div>
                                      
                                      
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Agregar evaluación</button>
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
    import Datepicker from 'vuejs-datepicker';
    import Vue from 'vue';
    import VueSweetalert2 from 'vue-sweetalert2';
    import 'sweetalert2/dist/sweetalert2.min.css';
    Vue.use(VueSweetalert2);

 
    export default {

        data(){
        return {
            registros: [],
            registro: {titulo:'',fecha:'', autor:'', importancia:'' ,idcategoria:'',informacionArt:'',imgdesmostrativa:''}
        }
        },
        mounted() {
            console.log('Component mounted.');
             axios.get('/notas').then(res=>{
               console.log(res);
            })

        },
        methods:{
        agregar(){
            axios.post('/notas', this.registro)
                .then(resp => {
                    console.log(resp);
                    this.$swal(
                        'Articulo guardado!',
                        'Ahora ya puedo visualizarlo en su página web!',
                        'success'
                    )
                }).catch(error => {
                    console.log(error);
            });
        },

        obtenerImagen(e){
          let fileReader = new FileReader();
          fileReader.readAsDataURL(e.target.files[0]);
          fileReader.onload = (e)=>{
              this.registro.imgdesmostrativa = e.target.result
          }
        }
        },
        components: {
        'editor': Editor,
         Datepicker
   }
    }
</script>
