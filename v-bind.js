new Vue({
    el: '#demo-1',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'b-avatar.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        }
    }
});

new Vue({
    el: '#demo-2',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'cute.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        },

    }
});

new Vue({
    el: '#demo-3',
    data: {
        profile: {
            name: 'Leeroy Jenkins',
            avatar: 'cute.jpg',
            bio: 'Leeeeeeeeerrrrrrrooooyyyyyy Jenkins'
        }
    },
    methods: {
        changeAvatar() {
            this.profile.avatar = 'avatar.png';
        }
    }
});
