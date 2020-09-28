<template>
    <div class="container mx-auto px-6">
        <h1 class="py-5">Products</h1>
        <hr>

        <div class="grid grid-cols-3 gap-4">
            <div v-for="singleProduct in productList" :key="singleProduct.id">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="rounded-lg md:w-56" :src="'/' + singleProduct.image_url" width="448" height="299" alt="Woman paying for a purchase">
                    </div>
                    <div class="mt-4 md:mt-0 md:ml-6">
                        <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">{{ singleProduct.name }}</div>
                        <p class="mt-2 text-gray-600">{{ singleProduct.price }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            productList: null
        }
    },
    methods: {
        getProducts() {
             this.$http.get('/api/products')
                .then(res => {
                    this.productList = res.data;
                    console.log(res.data);
                }).catch(err => {
                console.log(err)
            })
        }
    }, 
    mounted() {
        this.getProducts();
    }
}
</script>