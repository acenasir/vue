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
    <br /> <br />
    <ul>
        <li>
            <a href="data-binding.php"> Data Binding </a>
        </li>
        <li>
            <a href="mounted.php"> Mounted </a>
        </li>
        <li>
            <a href="events.php"> Events </a>
        </li>
        <li>
            <a href="v-for.php"> V-For </a>
        </li>
    </ul>
    <br />
    <div class="card-body" id="demo-1">
                 <fieldset>
                     <div class="profile text-center">
                         <img v-bind:src="profile.avatar" width="300" />
                         <h3>{{ profile.name }}</h3>
                         <p>{{ profile.bio }}</p>

                     </div>
                 </fieldset>
             </div>


                <div class="card-body" id="demo-2">
                    <fieldset>
                        <div class="profile text-center">
                            <img :src="profile.avatar" width="300" />
                            <h3>{{ profile.name }}</h3>
                            <p>{{ profile.bio }}</p>
                        </div>
                    </fieldset>
                </div>

                <div class="card-body" id="demo-3">
                  <fieldset>
                      <div class="profile text-center">
                          <img :src="profile.avatar" width="300" />
                          <h3>{{ profile.name }}</h3>
                          <p>{{ profile.bio }}</p>
                          <button @click="changeAvatar">Change Avatar</button>
                      </div>
                  </fieldset>
              </div>


    <script type="text/javascript" src="vue.min.js"></script>
    <script "text/javascript" src="v-bind.js"></script>
</body>
</html>
