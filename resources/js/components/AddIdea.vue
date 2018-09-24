<template>
    <div class="modal" :class="openModal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Modal title</p>
                <button class="delete" aria-label="close" @click="close"></button>
            </header>
            <section class="modal-card-body">
                <b-field label="Title">
                    <b-input type="text"
                             minlength="4"
                             maxlength="255"
                             v-model="idea.ideaTitle"></b-input>
                </b-field>
                <b-field label="Idea">
                    <b-input type="textarea"
                             minlength="10"
                             maxlength="2000"
                             placeholder="Explain your idea shortly here."
                             v-model="idea.ideaContent">
                    </b-input>
                </b-field>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click="save">Save changes</button>
                <button class="button" @click="close">Cancel</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        name: "AddIdea",
        props: ['openModal'],
        data() {
            return {
                idea: {
                    ideaTitle: '',
                    ideaContent: '',
                },
                errors: {}
            }
        },
        methods: {
            close() {
                this.$emit('closeRequest');
            },
            save() {
                axios.post('/idea', this.$data.idea)
                    .then((response) => {
                        this.close();
                        this.idea = "";
                    })
                    .catch((error) => this.errors = error.response.data);
            }
        }
    }
</script>
