<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Comentarios</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Comentarios</h1>
        <button @click="fetchComentarios">Obtener Comentarios</button>
        <div v-if="comentarios.length">
            <h2>Comentarios:</h2>
            <ul>
                <li v-for="comentario in comentarios" :key="comentario._id">
                    {{comentario}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                comentarios: []
            },
            methods: {
                fetchComentarios() {
                    axios.get('http://localhost:8080/comentarios')
                        .then(response => {
                            this.comentarios = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los comentarios:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
