<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Vue Components</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>

    <body>
        <div class="container">
            <h1 class="title">Components</h1>

            <div class="card">


                <div class="card-body" id="demo-1">
                    <fieldset>
                        <h5>Tasklist</h5>
                        <ul class="list-group">
                            <task v-for="task in tasks">{{ task }}</task>
                        </ul>
                    </fieldset>
                    <div class="card-body" id="demo-1">
                    <fieldset>
                        <h5>Tasklist</h5>
                        <task-list></task-list>
                    </fieldset>
                </div>
                </div>
            </div>

        </div>

        <script src="vue.min.js"></script>
        <script src="components.js"></script>
    </body>
</html>
