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
