<template>
    <div>
        <nav class="panel column is-offset-2 is-8">
            <p class="panel-heading">
                Idėjų turgavietė
                <button class="button is-primary is-outlined" @click="openAdd">Add New</button>
            </p>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-small" type="text" placeholder="search">
                    <span class="icon is-small is-left">
        <i class="fa fa-search" aria-hidden="true"></i>
      </span>
                </p>
            </div>
            <p class="panel-tabs">
                <a class="is-active">all</a>
                <a>public</a>
                <a>private</a>
                <a>sources</a>
                <a>forks</a>
            </p>
            <list-item></list-item>
        </nav>
        <add-idea :openModal="addActive" @closeRequest="close"></add-idea>
    </div>

</template>

<script>
    import ListItem from '../components/ListItem'

    let AddIdea = require('../components/AddIdea.vue');

    export default {
        name: "HomePage",
        components: {AddIdea, ListItem},
        data() {
            return {
                addActive: ""
            }
        },
        methods: {
            openAdd() {
                this.addActive = 'is-active';
            },
            close() {
                this.addActive = '';
            }
        }
    }
</script>