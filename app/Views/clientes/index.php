<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Clientes</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Clientes</h1>
        <button @click="fetchClientes">Obtener Clientes</button>
        <div v-if="clientes.length">
            <h2>Clientes:</h2>
            <ul>
                <li v-for="cliente in clientes" :key="cliente._id">
                    {{cliente}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                clientes: []
            },
            methods: {
                fetchClientes() {
                    axios.get('http://localhost:8080/clientes')
                        .then(response => {
                            this.clientes = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los clientes:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
