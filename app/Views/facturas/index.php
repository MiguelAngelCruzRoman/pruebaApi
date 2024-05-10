<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Facturas</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Facturas</h1>
        <button @click="fetchFacturas">Obtener Facturas</button>
        <div v-if="facturas.length">
            <h2>Facturas:</h2>
            <ul>
                <li v-for="factura in facturas" :key="factura._id">
                    {{factura}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                facturas: []
            },
            methods: {
                fetchFacturas() {
                    axios.get('http://localhost:8080/facturas')
                        .then(response => {
                            this.facturas = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los facturas:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
