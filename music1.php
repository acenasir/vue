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

                     <div class="card-body" id="demo-1">
                         <!-- <fieldset>
                             <h5>Tasklist</h5>
                             <ul class="list-group">
                                 <task v-for="task in tasks">{{ task }}</task>
                             </ul>
                         </fieldset> -->
                         <div class="card-body" id="demo-1">
                         <fieldset>
                             <h5>Tasklist</h5>
                             <task-list></task-list>
                         </fieldset>
                     </div>
                     </div>





    <script type="text/javascript" src="vue.min.js"></script>
    <script "text/javascript" src="music1.js"></script>
</body>
</html>
