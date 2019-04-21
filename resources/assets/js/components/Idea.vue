<template>
    <div>
        <h2 class="text-center">Captura tus ideas</h2>
        <div class="well">
            <h4>En que estas pensando?</h4>
            <form @submit.prevent="saveIdea()" method="post" accept-charset="utf-8">
                <div class="input-group">
                    <input type="text" v-model="idea" class="form-control input-sm" maxlength="256" placeholder="Escribe tu idea">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-sm">Agregar</button>
                    </span>
                </div>
            </form>
            <hr>
            <ul class="list-unstyled">
                <li v-for="idea in ideas">
                    <p>
                        <small class="text-muted">
                            <em>{{ since(idea.created_at) }}</em>
                        </small>
                        <i>{{ idea.descripcion }}</i>
                        <span class="pull-right">
                            <a class="eliminar" href="#" @click.prevent="deleteIdea(idea.id)" title="Eliminar idea!">X</a>
                        </span>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                ideas: [],
                idea : ''
            }
        },
        created: function(){
            this.getIdeas();
        },
        methods: {
            getIdeas: function(){
                var me = this;
                var url = "/mis-ideas";
                axios.get(url).then(function(response){
                    me.ideas = response.data;
                }); 
            },
            since: function(d){
                return moment(d).fromNow();
            },
            validatedIdea: function(){
                if (this.idea == '') {
                    alertify.error('El campo no puede estar vacio!');
                    return;
                }
            },
            saveIdea: function(){
                var me = this;
                var url = "/guardar-idea";

                me.validatedIdea();

                axios.post(url,{'descripcion':me.idea})
                .then(function(response){
                        alertify.success('Idea guardada con exito!');
                        me.idea = '';
                        me.getIdeas();
                    })
                .catch(function(error){
                    alertify.error('Error al guardar idea!');
                });
            },
            deleteIdea(id){
                var me = this;
                var url = '/eliminar-idea/'+id;
                axios.delete(url)
                .then(function(response){
                    me.getIdeas();
                    alertify.success('Idea eliminada con exito!');
                })
                .catch(function(error){
                    console.log(error);
                });
            }
        },
        mounted: function() {
        }
    }
</script>
<style>
    .eliminar{
        color: red;
    }
</style>
