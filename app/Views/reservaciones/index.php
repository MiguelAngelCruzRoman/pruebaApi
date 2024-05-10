<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <title>Documentación de Reservaciones</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
        }
        #app {
            padding: 20px;
        }
        h1, h2 {
            margin: 0;
            padding: 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        .banner {
            background-color: #f2f2f2;
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .banner h1, .banner h2 {
            color: #333;
        }
        .reservations {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="banner">
            <h1>Documentación de Reservaciones</h1>
        </div>
        <button @click="fetchReservaciones">Obtener Reservaciones</button>
        <div class="reservations" v-if="reservaciones.length">
            <h2>Reservaciones:</h2>
            <ul>
                <li v-for="reserva in reservaciones" :key="reserva._id">
                    {{ reserva }}
                </li>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                reservaciones: []
            },
            methods: {
                fetchReservaciones() {
                    axios.get('http://localhost:8080/reservaciones')
                        .then(response => {
                            this.reservaciones = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los reservaciones:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
