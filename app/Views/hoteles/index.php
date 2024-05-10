<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Hoteles</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Hoteles</h1>
        <button @click="fetchHoteles">Obtener Hoteles</button>
        <div v-if="hoteles.length">
            <h2>Hoteles:</h2>
            <ul>
                <li v-for="hoteles in hoteles" :key="hoteles._id">
                    {{hoteles}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                hoteles: []
            },
            methods: {
                fetchHoteles() {
                    axios.get('http://localhost:8080/hoteles')
                        .then(response => {
                            this.hoteles = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los hoteles:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
