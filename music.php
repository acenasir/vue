<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <head>
        <meta charset="utf-8">
        <title>Music</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
</head>

<body >
    <h1 id="title">Music</h1>
    <br /> <br />

    <br />
     <fieldset>
    <div class="card-body" id="playlist-div">
        <ul>

                     <li v-for = "song in playlist">
                        Artist:{{ song.artist }}
                        Title: {{ song.title }}

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






    <script type="text/javascript" src="vue.min.js"></script>
    <script "text/javascript" src="music.js"></script>
</body>
</html>
