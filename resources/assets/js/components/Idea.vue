<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="well">
            <h4>En que estas pensando?</h4>
            <form method="post" accept-charset="utf-8">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" maxlength="256" placeholder="Escribe tu idea">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-primary btn-sm">Agregar</button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">
                <li v-for="idea in ideas">
                <p>
                    <small class="text-muted">
                        <em>{{ idea.created_at }}</em>
                    </small>
                    {{ idea.descripcion }}
                </p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        data(){
            return {
                ideas: []
            }
        },
        created: function(){
            this.getIdeas()
        },
        methods: {
            getIdeas: function(){
                var me = this;
                var url = "/mis-ideas";
                axios.get(url).then(function(response){
                    me.ideas = response.data;
                    console.log(response.data);
                }); 
            }
        },
        mounted: function() {
        }
    }
</script>
