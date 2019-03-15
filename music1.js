new Vue({
    el: '#playlist-div',
    data:{
        newArtist:'',
        newTitle:'',
        playlist:[

        ]

    },
    methods:{
        addSong(){
                    this.playlist.push({ "artist": this.newArtist,"title": this.newTitle});
                    console.log(this.playlist);

            // this.artistName.push(this.newArtist);
            // this.songTitle.push(this.newSong);
        },
        removeSong(){
            this.playlist.pop();
            // this.songTitle.pop(this.newmusic);
        }
    }

})

Vue.component('song', {
    template: `
        <div class="song">
            <slot></slot>
        </div>
    `
});

new Vue({
    el: '#demo-1',
    data: {
        songs: [
            'Sunflower',
            'Human',
            'Happier',
            'white'
        ]
    }
});

Vue.component('song', {
    template: `
        <li class="list-group-item">
            <slot></slot>
        </li>
    `
});

Vue.component('song-list', {
    template: `
        <ul class="list-group">
            <song v-for="song in songs">{{ song }}</song>
            
        </ul>
    `,
    data(){
        return {
            songs: [
                'Sunflower',
                'Human',
                'Happier',
                'white'
            ]
        }
    }

});

new Vue({
    el: '#demo-1'
});


function myFunction(x) {
  x.classList.toggle("fa-thumbs-down");
}
