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

Vue.component('task', {
    template: `
        <div class="task">
            <slot></slot>
        </div>
    `
});

new Vue({
    el: '#demo-1',
    data: {
        tasks: [
            'study',
            'Shower',
            'walk',
            'Nap'
        ]
    }
});

Vue.component('task', {
    template: `
        <li class="list-group-item">
            <slot></slot>
        </li>
    `
});

Vue.component('task-list', {
    template: `
        <ul class="list-group">
            <task v-for="task in tasks">{{ task }}</task>
        </ul>
    `,
    data(){
        return {
            tasks: [
                'Make bed',
                'Shower',
                'Feed cats',
                'Nap'
            ]
        }
    }
});

new Vue({
    el: '#demo-1'
});
