<template>
    <div class="content" v-if="showQuiz">
        <p class="title has-text-centered">{{ current_question.question }}</p>
        <div class="columns is-centered" v-for="answer in current_question.answers">
            <div class="column is-desktop is-half-desktop" style="word-wrap: break-word">
                <a @click="answerQuestion(current_question.id, answer.id)" class="button is-large is-fullwidth"
                   style="color: black; display: inline-table; white-space: normal">
                    {{ answer.answer }}
                </a>
            </div>
        </div>
        <p class="has-text-centered">
            Remaining Questions: {{ remaining+1 }}
        </p>
    </div>
    <div class="content" v-else>
        <!-- Winning Restaurant -->
        <p class="title has-text-centered">Your Result Is...</p>
        <p class="title has-text-centered">{{ result }}</p>
        <hr>

        <!-- Top 5 Picks -->
        <p class="title has-text-centered">Top 5 Picked Restaurants</p>
        <div class="columns is-centered" v-for="stat in stats">
            <div class="column is-desktop is-half-desktop" style="word-wrap: break-word">
                <div class="button is-large is-fullwidth" style="height: 115%">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">{{ stat.name }}</p>
                            <p class="title">{{ stat.picks }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showQuiz: true,
                questions: [],
                current_question: "",
                remaining: "",
                endpoint: "api/questions",
                weights_endpoint: "api/quiz/new",
                post_answer: "api/quiz/answer",
                weights: [],
                result: "",
                stats: []
            };
        },

        created() {
            // Initialize Weights
            axios.get(this.weights_endpoint).then(({ data }) => {
                this.weights = data;
            });

            // Load Questions & Answers
            axios.get(this.endpoint).then(({ data }) => {
                this.questions = data.data;
                this.current_question = this.questions[0];
                this.remaining = this.questions.length - 1;
            });
        },

        methods: {

            // Answer a Question
            answerQuestion(question_id, answer_id) {
                // Store Answer
                axios.post(this.post_answer, {
                    answer: answer_id,
                     weights: this.weights
                })
                .then(({ data }) => {
                    this.weights = data;
                });

                // Remove question from remaining question array
                this.removeQuestion(question_id);
            },

            // Remove an answered Question and check if Quiz is finished
            removeQuestion(question_id) {
                this.questions = _.remove(this.questions, function(question) {
                    return question.id !== question_id;
                });

                // Check for more questions
                if (Object.keys(this.questions).length === 0) {
                    // no more questions, get result
                    this.weights = this.sortProperty(this.weights);
                    this.result = this.weights[0].name;
                    this.showQuiz = false;

                    // Post picked Restaurant to update pick rate
                    axios.post('/api/quiz/final', {
                        restaurant_id: this.weights[0].id
                    });

                    // Show other User's picked answers
                    this.displayStats();
                } else {
                    // Access the next Question
                    this.current_question = this.questions[0];
                    this.remaining = this.questions.length - 1;
                }
            },

            // Sort Restaurant weights
            sortProperty(weights) {
                return _.orderBy(weights, "weight", "desc");
            },

            // Display top picked Restaurants
            displayStats() {
                // Get sorted Answers
                axios.get('/api/answers').then(({ data }) => {
                    this.stats = data;
                });
            }
        }
    };
</script>
