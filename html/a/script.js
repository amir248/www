const EventHandlingApp = {
    data() {
      return {
        message: 'Hello Vue.js!'
      }
    },
    methods: {
      reverseMessage() {
        this.message = this.message
          .split('')
          .reverse()
          .join('')
      }
    }
  }
  
  Vue.createApp(EventHandlingApp).mount('#event-handling')

  const Counter = {
    data() {
      return {
        counter: 0
      }
    },
    mounted() {
      setInterval(() => {
        this.counter++
      }, 99)
    }
  }

  Vue.createApp(Counter).mount('#counter')