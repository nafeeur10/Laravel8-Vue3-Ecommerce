<template>
  <main>
    <header>
      <app-navbar />
    </header>
    <article>
      <main-content />
    </article>
    <app-footer />
  </main>
</template>

<script>
import AppNavbar from './StoreFront/Layout/AppNavbar.vue'
import AppFooter from './StoreFront/Layout/AppFooter.vue'
import MainContent from './StoreFront/Views/MainContent.vue'
  export default {
    metaInfo() {
      return {
        title: `Lavecart`,
      }
    },
    components: {
        AppNavbar,
        MainContent,
        AppFooter
    },
    watch: {
      title: {
        immediate: true,
        handler(title) {
          document.title = 'Lavecart'
        },
      },
    },
  }
</script>