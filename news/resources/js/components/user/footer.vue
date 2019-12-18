<template>
  <div class="container footer-main mb-4">
    <div class="row mx-2 py-3">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-3 pt-5">
              <img class="footer-logo" :src="logo" alt />
            </div>

            <div class="col-4">
              <div class="d-flex flex-column">
                <a href>
                  <p class="p-footer">TEMA 1</p>
                </a>
                <a href>
                  <p class="p-footer">TEMA 2</p>
                </a>
                <a href>
                  <p class="p-footer">TEMA 3</p>
                </a>
                <a href>
                  <p class="p-footer">TEMA 4</p>
                </a>
                <a href>
                  <p class="p-footer">TEMA 5</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row my-3">
      <div class="col-12">
        <div class="d-flex justify-content-around">
          <a href>
            <img class="icon-footer" src="../media/facebook.png" alt />
          </a>
          <a href>
            <img class="icon-footer" src="../media/instagram.png" alt />
          </a>
          <a href>
            <img class="icon-footer" src="../media/linkedin.png" alt />
          </a>
          <a href>
            <img class="icon-footer" src="../media/twitter.png" alt />
          </a>
          <a href>
            <img class="icon-footer" src="../media/youtube.png" alt />
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import logo from "../media/logo.png";

export default {
  data() {
    return {
      logo: logo
    };
  }
};
</script>

<style lang="scss" scoped>
.footer-main {
  width: 100%;
  height: 20em;
  background-color: #15151511;
}

.icon-footer {
  height: 1.8em;
}

.footer-logo {
  height: 5em;
}

.p-footer {
  color: black;
  font-weight: bold;
}
</style>