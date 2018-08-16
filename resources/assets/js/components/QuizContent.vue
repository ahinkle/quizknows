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
            Remaining Questions: {{ remaining }}
        </p>
    </div>
    <div class="content" v-else>
        <p class="title has-text-centered">Your Result Is...</p>
        <p class="title has-text-centered">{{ result }}</p>
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
      result: ""
    };
  },

  mounted() {
    console.log("Quiz Component mounted");
  },

  created() {
    this.fetch();
  },

  methods: {
    fetch() {
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

    answerQuestion(question_id, answer_id) {
      // Store Answer
      axios
        .post(this.post_answer, {
          answer: answer_id,
          weights: this.weights
        })
        .then(({ data }) => {
          this.weights = data;
        });

      // Remove question from remaining question array
      this.removeQuestion(question_id);
    },

    removeQuestion(question_id) {
      this.questions = _.remove(this.questions, function(question) {
        return question.id !== question_id;
      });

      // Check for more questions
      if (Object.keys(this.questions).length === 0) {
        // no more question, get result

        // 1. Sort `this.weights` by weight (remember, it's an Object)
        // 2. store the top weighted Object into another variable and display it

        this.result = "TODO";
        this.weights = this.sortProperty(this.weights);
        console.log(this.weights);
        this.showQuiz = false;
      } else {
        // Access the next Question
        this.current_question = this.questions[0];
        this.remaining = this.questions.length - 1;
      }
    },
    sortProperty(weights) {
      return _.orderBy(weights, "weight", "desc");
    }
  }
};
</script>
