<template>
  <div class="container">
    <h1 class="mt-4 text-center">Простой калькулятор</h1>
    <div class="mt-4 row justify-content-center">
      <div class="col-md-2">
        <div class="form-group">
          <label for="a">Число a:</label>
          <input type="number" id="a" class="form-control" v-model="a">
        </div>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="b">Число b:</label>
          <input type="number" id="b" class="form-control" v-model="b">
        </div>
      </div>
    </div>
    <div class="row mt-4 justify-content-center">
      <button class="btn btn-secondary mx-2" @click="addition">+</button>
      <button class="btn btn-secondary mx-2" @click="subtract">-</button>
      <button class="btn btn-secondary mx-2" @click="multiply">*</button>
      <button class="btn btn-secondary mx-2" @click="division">/</button>
    </div>

    <div class="row mt-4 justify-content-center text-danger" v-if="error">
      <strong>{{ error }}</strong>
    </div>
    <div v-else="" class="row justify-content-center mt-4">
      <div class="form-group justify-content-center">
        <label for="result">Результат:</label>
        <input type="number" id="result" class="form-control" v-model="result">
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        a: 0,
        b: 0,
        result: 0,
        error: '',
      }
    },
    methods: {
      errorReset() {
        this.error = '';
      },
      addition() {
        axios.get(`/api/calc/add/${this.a}/${this.b}`)
          .then((res) => {
            this.result = res.data;
            this.errorReset();
          })
          .catch((err) => { console.log(err);});
      },
      subtract() {
        axios.get(`/api/calc/subtract/${this.a}/${this.b}`)
          .then((res) => {
            this.result = res.data;
            this.errorReset();
          })
          .catch((err) => { console.log(err);});
      },
      multiply() {
        axios.get(`/api/calc/multiply/${this.a}/${this.b}`)
          .then((res) => {
            this.result = res.data;
            this.errorReset();
          })
          .catch((err) => { console.log(err);});
      },
      division() {
        axios.get(`/api/calc/division/${this.a}/${this.b}`)
          .then((res) => {
            if(res.data.error) {
              this.error = res.data.error;
              return;
            }
            this.result = res.data;
            this.errorReset();
          })
          .catch((err) => { console.log(err);});
      },

    }
  }
</script>
