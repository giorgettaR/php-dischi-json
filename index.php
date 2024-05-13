<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Discs</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <header>
        </header>
        
        <main>
            <div class="container pt-5">
                <div class="row">
                    <div v-for="disc in discs" class="col-4 p-5">
                        <div class="disc d-flex flex-column text-center align-items-center h-100 w-100 p-5 text-white">
                            <div class="img-box mb-4">
                                <img :src="disc.poster" alt="">
                            </div>
                            <div class="fs-5">{{ disc.title }}</div>
                            <div class="fs-6">{{ disc.author }}</div>
                            <div class="fs-6 fw-bold">{{ disc.year }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>




    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>