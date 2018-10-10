<template>
    <div class="content">
        <div class="columns is-centered" v-for="stat in restaurant_stats">
            <div class="column is-desktop is-half-desktop" style="word-wrap: break-word">
                {{ stat }}
            </div>
        </div>
        <br>
        <div class="columns is-centered" v-for="stat in answer_stats">
            <div class="column is-desktop is-half-desktop" style="word-wrap: break-word">
                {{ stat }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                restaurant_stats: [],
                answer_stats: [],
                restaurant_endpoint: "api/restaurants/all",
                answer_endpoint: "api/answers/all"
            };
        },

        created() {
            // Get Restaurant statistics
            axios.get(this.restaurant_endpoint).then(({ data }) => {
                this.restaurant_stats = data;
            });

            // Get Answer statistics
            axios.get(this.answer_endpoint).then(({ data }) => {
                this.answer_stats = data;
            });
        },

        methods: {
            //
        }
    };
</script>
