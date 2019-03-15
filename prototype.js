
var demo = new Vue({
el: '#demo',
data: {
active: false
},
methods: {
mouseOver: function(){
this.active = !this.active;
}
}
})
var example1 = new Vue({
el: '#example-1',
data: {
counter: 0
}
})
