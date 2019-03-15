<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <head>
        <meta charset="utf-8">
        <title>Shopping List</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
</head>

<body >
    <h1 id="title">Bushra</h1>

    <div id="profile">
        <div class="left">
            <div >
                <a href="#">
                    <img v-bind:src="newHref" width="300" />
                </a>
            </div>
        </div>
        <br /><br />
        <div class="right">
            <strong>New Image Href</strong>
            <input type="text" v-model="newHref" /><br /><br />
            <strong> New Image Saurce </strong>
            <input type="text" v-model="newSrc" /><br /><br />
            <button class="btn btn-primary" @click="changePic">Change Pic</button>
        </div>

    </div>





    <script  src="vue.min.js"></script>
    <script  src="v-bind2.js"></script>
</body>
</html>
