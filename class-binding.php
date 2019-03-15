<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Vue Class Binding</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <div class="container">
            <h1 class="title">Class binding </h1>

            <div class="card">

                <div class="card-body" id="demo-class">
                    <fieldset>
                        <button class="btn" :class="{ 'btn-success' : buttonGreen }" @click="toggleButton">Click Me</button>
                    </fieldset>
                </div>
            </div>
        </div>

        <script src="vue.min.js"></script>
        <script src="class-binding.js"></script>
    </body>
</html>
