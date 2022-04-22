<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap 5.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- custom styles -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Vue.js -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
        <title>PHP Dischi</title>
    </head>
    <body>
        <header>

        </header>
        <main id="app" class="container p-2">
            <?php include_once __DIR__ . '/server/data.php';?>
            <div class="row">
                <div class="col-12 d-flex flex-wrap">
                        <div class="card" v-for="cardDisk in disks">
                            <img :src="cardDisk.poster"  :alt="cardDisk.title">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{cardDisk.title}}
                                </h5>
                                <p class="card-text">
                                    {{cardDisk.author}}
                                </p>
                                <p class="card-text">
                                    {{cardDisk.year}}
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>