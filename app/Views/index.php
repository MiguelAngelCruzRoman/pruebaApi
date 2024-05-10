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
        .elementotions {
            margin-top: 20px;
        }
        .url-section {
            margin-top: 20px;
            display: flex;
            align-items: center;
        }
        .url-input {
            flex: 1;
            margin-right: 10px;
            padding: 8px;
        }
        .url-box {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="banner">
            <h1>Documentación de la API</h1>
        </div>
        <form @submit.prevent="fetchElementos">
            <div class="url-section">
                <div class="url-box">
                    <span hidden>Resource URL:</span>http://localhost:8080/
                </div>
                <input type="text" class="url-input" v-model="url" placeholder="Introduce la URL">
                <button type="submit">Hacer consulta</button>
            </div>
        </form>
        <div class="elementotions" v-if="elementos.length">
            <h2>Elementos:</h2>
            <ul>
                <li v-for="elemento in elementos" :key="elemento._id">
                    {{ elemento }}
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
                elementos: [],
                url: ''
            },
            methods: {
                fetchElementos() {
                    axios.get(this.url)
                        .then(response => {
                            this.elementos = response.data;
                        })
                        .catch(error => {
                            console.error('Error al obtener los elementos:', error);
                        });
                }
            }
        });
    </script>
</body>
</html>
