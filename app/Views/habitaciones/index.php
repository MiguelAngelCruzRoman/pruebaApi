<!DOCTYPE html>
<html>
<head>
    <title>Documentación de Habitaciones</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">
        <h1>Documentación de Habitaciones</h1>
        <button @click="fetchHabitaciones">Obtener Habitaciones</button>
        <div v-if="habitaciones.length">
            <h2>Habitaciones:</h2>
            <ul>
                <li v-for="habitaciones in habitaciones" :key="habitaciones._id">
                    {{habitaciones}}
                </li>
            </ul>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                habitaciones: []
            },
            methods: {
                fetchHabitaciones() {
                    axios.get('http://localhost:8080/habitaciones')
                        .then(response => {
                            this.habitaciones = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los habitaciones:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
