 
 <template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Agregar evaluación</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="row">
                <div class="col-md-3 pr-1">
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="form-control" placeholder="Company" value />
                  </div>
                </div>
                <div class="col-md-3 px-1">
                  <div class="form-group">
                    <label>Importancia</label>
                    <input type="text" class="form-control" placeholder="Username" value />
                  </div>
                </div>
                <div class="col-md-6 pl-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre documento</label>
                    <input type="email" class="form-control" placeholder />
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Agregar Docuemento</label>
                    <br />
                    <input type="file" accept="image/*" />
                    <!-- @change="previewImage" 
                                                    <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                    -->
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12"></div>
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
            <img
              src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"
              alt="..."
            />
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <h5 class="title">Mike Andrew</h5>
              </a>
              <p class="description">michael24</p>
            </div>
            <p class="description text-center">
              "Lamborghini Mercy
              <br />Your chick she so thirsty
              <br />I'm in that two seat Lambo"
            </p>
          </div>
          <hr />
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
import Editor from "@tinymce/tinymce-vue";
export default {
  mounted() {
    console.log("Component mounted.");
  },
  components: {
    editor: Editor
  }
};
</script>