<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <head>
        <meta charset="utf-8">
        <title>Music</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .fa {
            font-size: 50px;
            cursor: pointer;
            user-select: none;
        }

        .fa:hover {
            color: darkblue;
        }
        </style>
    </head>
</head>

<body >
    <h1 id="title">Music</h1>
    <br />

    <fieldset>
        <div class="card-body" id="playlist-div">
            <ul>

                <li v-for = "song in playlist">
                    Artist:{{ song.artist }}
                    Title: {{ song.title }}
                    <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>
                    <script>
                    function myFunction(x) {
                        x.classList.toggle("fa-thumbs-down");
                    }
                    </script>
                </li>

            </ul>
            <input type="text" v-model='newArtist' />
            <BR/>
            <input type="text" v-model='newTitle' />
        </br>
        <button @click = 'addSong' >add</button>
        <button @click = 'removeSong' >Remove</button>
        

    </div>
</fieldset>
<div class="card-body" id="demo-1">
    <fieldset>

        <h5>Songlist</h5>
        <song-list></song-list>

    </fieldset>
</div>


<script type="text/javascript" src="vue.min.js"></script>
<script "text/javascript" src="music1.js"></script>
</body>
</html>
