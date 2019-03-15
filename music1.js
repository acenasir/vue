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
Vue.component('button-counter', {
  data: function () {
    return {
      count: 0
    }
  },
  template: '<button v-on:click="count++">Sunflower {{ count }} spiderman.</button>'
})
new Vue({ el: '#button' })
// Vue.component('nav-bar', {
//     props: ['menu'],
//     template: `
//         <nav>
//             <ul class="list-group">
//                 <nav-button v-for="(button, index) in menu" :arrayIndex="index" :button="button" @buttonChanged="setActiveButton" :class=" activeButton == index ? 'selected' : '' "></nav-button>
//             </ul>
//         </nav>
//     `,
//     methods: {
//         setActiveButton(index) {
//             this.activeButton = index;
//         }
//     },
//     data() {
//         return {
//             activeButton: false
//         }
//     }
// });
//
// Vue.component('nav-button', {
//     props: [ 'button', 'arrayIndex' ],
//     template: `
//         <li class="list-group-item">
//             <a :href="button.link" @click="$emit('buttonChanged', arrayIndex)">{{ button.label }}</a>
//         </li>
//     `
// });
//
// new Vue({
//     el: '#demo-1',
//     data: {
//         menu: [
//             { label: 'Home', link:'#home' },
//             { label: 'Services', link:'#services' },
//             { label: 'About', link:'#about' },
//             { label: 'Contact', link:'#contact' }
//         ]
//     }
// });


Vue.component('song', {
    props: ['time', 'completed', 'description'],
    template: `
        <li class="list-group-item" :class="{ 'green-background' : completed }">
            {{ description }} | {{ time }} minutes
        </li>
    `
});

Vue.component('song-list', {
    template: `
        <ul class="list-group">
            <song
                v-for="song in songs"
                :description="song.description"
                :completed="song.completed"
                :time="song.time">
            </song>
        </ul>
    `,
    data() {
        return {
            songs: [
                { description: 'Sunflower', completed: false, time: 5 },
                { description: 'Happier', completed: false, time: 10 },
                { description: 'Human', completed: false, time: 1 }
            ]
        }
    }
});

new Vue({
    el: '#demo-1'
});


// Vue.component('song', {
//     template: `
//         <div class="song">
//             <slot></slot>
//         </div>
//     `
// });
//
// new Vue({
//     el: '#demo-1',
//     data: {
//         songs: [
//             'Sunflower',
//             'Human',
//             'Happier',
//             'white'
//         ]
//     }
// });
//
// Vue.component('song', {
//     template: `
//         <li class="list-group-item">
//             <slot></slot>
//         </li>
//     `
// });
//
// Vue.component('song-list', {
//     template: `
//         <ul class="list-group">
//             <song v-for="song in songs">{{ song }}</song>
//
//         </ul>
//     `,
//     data(){
//         return {
//             songs: [
//                 'Sunflower',
//                 'Human',
//                 'Happier',
//                 'white'
//             ]
//         }
//     }
//
// });
//
// new Vue({
//     el: '#demo-1'
// });
//
//
// function myFunction(x) {
//   x.classList.toggle("fa-thumbs-down");
// }
