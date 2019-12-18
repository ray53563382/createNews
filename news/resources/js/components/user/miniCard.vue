<template>
  <div class="mini-card ml-5 mr-5 my-3">
    <div ref="transElement" class="transition-element">
      <p
        class="pl-3 pt-2"
      >Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quas minus similique at. Autem expedita, quam reiciendis incidunt soluta blanditiis hic voluptas suscipit deserunt, harum, velit sapiente. Nihil, quidem corporis!Nulla deleniti eaque autem harum...</p>
    </div>

    <div @mouseenter="displayElement" class="box">
      <div></div>

      <div class="white-bg pt-3">
        <div class="tag-box ml-3">
          <div class="px-2">
            <p>AMERICA LATINA Y EL CARIBE</p>
          </div>
        </div>

        <P
          class="title-box ml-3 turn-black"
        >Pronunciamiento:La defensa de los territorios ante el nuevo gobierno</P>

        <p class="autor-box ml-3 turn-black">Por Heber Uc Rivero</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "minicard",

  data() {
    return {
      // image: image
    };
  },

  methods: {
    displayElement() {
      // let transElement = this.$refs['transElement']
      // transElement.classList.add('display-class')
      // console.log(transElement);
    }
  }
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100i,400,700&display=swap");

.mini-card {
  position: relative;
  height: 30em;
  width: 22em;
  background-color: aliceblue;
  background-image: url("http://source.unsplash.com/random/660x600");

  // z-index: 10;

  .transition-element {
    position: absolute;
    display: block;
    height: inherit;
    width: 0em;
    transition: width 1s;
    // z-index: 9;
    background-color: aliceblue;
    overflow: hidden;

    p {
      opacity: 0;
      animation: opacity 1s;
    }
  }
}

.mini-card:hover > .transition-element {
  width: 22em;
}

.mini-card:hover > .box > .turn-black {
  color: black;
}
.mini-card:hover > .transition-element > p {
  opacity: 1;
}

.mini-card:hover {
  -webkit-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
  box-shadow: 2px 3px 10px -1px rgba(0, 0, 0, 0.75);
}

.box {
  height: inherit;
  width: inherit;
  display: grid;
  grid-template-columns: 100%;
  grid-template-rows: repeat(2, 50%);
  background: rgb(0, 0, 0);
  background: linear-gradient(
    0deg,
    rgba(0, 0, 0, 0.7679446778711485) 0%,
    rgba(0, 0, 0, 0.0760679271708683) 67%
  );

  .white-bg {
    z-index: 999;
    height: 100%;
    width: fit-content;
    background-color: aliceblue;
    border: 1px solid rgba(0, 0, 0, 0.4);
    border-radius: 3px;
  }

  .tag-box {
    font-family: "Barlow Semi Condensed", sans-serif;
    font-weight: 400;
    z-index: 999;
    color: rgb(238, 237, 237);

    div {
      height: fit-content;
      width: fit-content;
      background-color: rgba(21, 21, 21, 0.808);
      border: 1px solid rgba(255, 255, 255, 0.89);

      p {
        margin: 0 0 0 0;
      }
    }
  }

  .title-box {
    font-family: "Barlow Semi Condensed", sans-serif;
    font-weight: 700;
    z-index: 999;
    color: #151515;
    font-size: 1.5em;
  }

  .autor-box {
    font-family: "Barlow Semi Condensed", sans-serif;
    font-weight: 100;
    font-style: italic;
    z-index: 999;
    color: #151515;
    font-size: 1.1em;
  }

  .display-class {
    display: block;
    width: 38em;
    height: 22em;
  }
}
</style>