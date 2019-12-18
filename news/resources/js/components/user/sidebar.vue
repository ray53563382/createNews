<template>
  <div class="container sidebar-main">
    <div class="row pl-3 pt-3">
      <div class="col">
        <h1>Noticias</h1>
      </div>
    </div>

    <div class="row">
      <div class="col d-flex flex-column">
        <Newscards />
        <Newscards />
        <Newscards />
        <Newscards />
        <Newscards />

        <div class="col-12 d-flex justify-content-center">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
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
  </div>
</template>

<script>
import Newscards from "./newscard";

export default {
  name: "sidebar",

  components: {
    Newscards
  }
};
</script>

<style lang="scss" scoped>
.sidebar-main {
  // position: sticky;
  // top: 0;
  height: 100%;
  width: 100%;
  // background-color: rgba(20, 121, 189, 0.241);
  background-color: white;
}
</style>