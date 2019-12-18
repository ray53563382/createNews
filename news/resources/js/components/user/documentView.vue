<template>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <Header></Header>
      </div>
    </div>
    <div class="row my-5">
      <div class="col-12">
        <div class="container">
          <div class="row">
            <div class="col-12 my-5">
              <p class="h1 text-muted">{{docTitle}}</p>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="row">
                <div class="col-4">
                  <p>Por: {{docAutor}}</p>
                </div>
                <div class="col-4">
                  <p>Etiquetas: {{docTags}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <p class="h6">{{docDate}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <img :src="logito" alt class="img-fluid img-thumbnail" />
                </div>
              </div>
              <div class="row my-5">
                <div class="container">
                  <div class="col-12">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni molestiae praesentium quisquam asperiores aliquid consequatur quos minima, est voluptas similique voluptates nostrum quam velit neque earum quas quae quasi cum.
                    Asperiores ipsum deleniti molestias nobis qui aut ad sint, pariatur molestiae dolores, ullam nesciunt perspiciatis voluptate iste architecto ut magni corporis ea dignissimos recusandae doloremque, mollitia omnis! Dicta, suscipit porro?
                    Officiis, voluptatum? Quo perspiciatis quidem sed nobis facere adipisci harum, quod architecto libero culpa temporibus nemo! Beatae, ea veritatis. Ut, provident perspiciatis doloremque sint officia id. Numquam exercitationem odio quisquam.
                    Impedit, obcaecati! Quo, corrupti inventore alias dolores deserunt excepturi quas ullam! Eum repellendus a magni cumque quidem esse blanditiis! Obcaecati numquam asperiores animi eveniet esse fugiat, voluptatem quisquam quos beatae!
                    Debitis saepe porro possimus eveniet culpa commodi beatae ut similique, praesentium magnam molestiae blanditiis temporibus sed enim suscipit quibusdam magni optio cumque deleniti? Quo, minima veritatis voluptas pariatur maiores praesentium.
                    Amet animi ex nostrum aliquam, accusantium cum ipsa et magni eligendi perspiciatis similique commodi quod, nesciunt veritatis culpa blanditiis unde, fuga quo. Ipsum excepturi architecto illum nulla illo corrupti. Aperiam?
                    Ex, sequi ut. Maxime odit quo, atque quas assumenda eligendi praesentium esse iste pariatur accusamus alias autem natus labore culpa hic debitis eaque veniam nam aliquid sit necessitatibus tempore quod.
                    Quo quos dicta eaque velit commodi culpa eos iste, illo doloribus minima nam laboriosam doloremque quidem consectetur deleniti pariatur, nostrum, in accusantium dignissimos asperiores repudiandae. Voluptates modi accusamus ea! Molestiae?
                    Obcaecati suscipit praesentium quasi nulla similique rerum, nobis cupiditate repellat accusamus consectetur quibusdam explicabo doloribus exercitationem animi cumque? Quaerat harum vero recusandae esse magnam labore vel cupiditate nostrum, earum sunt!
                    Beatae et vitae rerum quos porro inventore magni architecto voluptate in facere, eos perspiciatis? Quod animi aliquam provident beatae commodi harum nostrum, quasi eum laboriosam quaerat et, iure nam ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis at esse tempora vel nisi amet asperiores pariatur error. Rerum autem ea animi iste aliquid magnam non sit voluptatem harum odio!
                    Facere ex eius nam eveniet hic dignissimos eligendi recusandae totam debitis natus, quia sint labore illum perspiciatis iusto iste optio soluta quibusdam reprehenderit voluptas nemo adipisci. Rem doloremque a exercitationem.
                    Dolores dicta soluta minus? Illo cum quis molestiae ipsa iure repellat perferendis cupiditate accusantium odit fugiat error et natus quia autem eveniet non, nemo labore quasi provident. Optio, iste enim.
                    Repudiandae ex officia sint deleniti praesentium laborum dolore maiores similique nobis nulla illum, aspernatur voluptatum iusto repellat dolorem iure, neque officiis in tenetur aut! Neque harum enim illo labore nam!
                    Labore quasi quam magni, commodi recusandae impedit eligendi aliquid porro corporis modi quis deleniti odit fugiat maiores fuga aut quos sed dolor necessitatibus. Cumque minus aperiam labore, consectetur facilis illum.
                    Ex beatae, culpa laborum neque repellat blanditiis cumque architecto sit eaque esse, ipsa est quia tempora corrupti. Tempora incidunt atque laboriosam eos accusantium id iste quia nam amet delectus. Hic?
                    Deleniti adipisci ut quis eligendi voluptatum totam provident consequuntur eveniet placeat et, distinctio quia odio modi repellat magni itaque numquam soluta esse? Aspernatur magni, assumenda nemo ex recusandae reprehenderit ad?
                    Laudantium suscipit maxime, aliquid enim molestias velit eius neque, blanditiis quod deserunt iste? Dolor quia eaque facilis aliquid placeat dignissimos quo repellendus at temporibus id voluptate unde autem, laboriosam sunt.
                    Minus dignissimos incidunt asperiores nisi harum. Commodi ad corrupti perspiciatis? Distinctio rerum perferendis hic nulla deserunt eius voluptate, quisquam eaque asperiores officia quidem, quod libero non est iusto dolore doloremque.
                    Et fugiat hic molestiae odio excepturi? Ipsa libero aliquid molestias atque eius! Illum ipsam odio illo dicta cupiditate. Debitis suscipit explicabo incidunt facere repudiandae ducimus unde dolores nesciunt minima recusandae.
                  </div>
                </div>
              </div>
              <div class="row my-5">
                <div class="col-4">
                  <p class="h5">Tema: {{docTheme}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <Footer></Footer>
      </div>
    </div>
  </div>
</template>

<script>
import logito from "../media/home.png";
import Header from "./header";
import Footer from "./footer";

export default {
  name: "documentview",
  components: {
    Header,
    Footer
  },
  data() {
    return {
      docTitle: "¿Agua o Minería? Resistencias comunitarias en América Latina",
      docDate: "11.02.2019",
      docAutor: "Daniel DRNTS",
      docTags: ["America", "Asia", "Mexico"],
      docDownloadURL: "http://someurl.com",
      docTheme: "CrisisClimaticaTema",
      docImages: ["url1", "url2", "url3", "url4"],
      logito: logito
    };
  }
};
</script>

<style lang="scss" scoped>
.placeholder {
  height: fit-content;
  width: 100%;
  // background-color: #151515;
}
</style>