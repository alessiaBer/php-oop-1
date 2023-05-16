const { createApp } = Vue;

createApp({
  data() {
    return {
      $movies: null,
      $getAPI: ''
    };
  },
  mounted() {
    axios.get()
    .then()
    .catch(error => {
        console.error(error.message)
    })
  }
}).mount("#app");
