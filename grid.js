var blog_list = new Vue({
	el: '#js-grid-list',
	data: {
		// The layout mode, possible values are "grid" or "list".
		layout: 'grid',

		// demo data
		blog_posts: [{
			title: 'Art in our park',
			url: 'http://www.artinourpark.ca/?fbclid=IwAR3Wi_gtKxKEC5VgAEwKCImqQPW7TcOe9kXVETAEfGLTW43K_I1iArtpgyU',
			image: {
				'large': 'http://www.artinourpark.ca/img/portfolio/3.jpg',
				'small': 'http://www.artinourpark.ca/img/portfolio/3.jpg'
			}
		}, {
			title: 'ok webside',
			url: 'http://www.bushrayousaf.com/214183-2/',
			image: {
				'large': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/about58.jpg',
				'small': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/about58.jpg'
			}
		}, {
			title: 'same website!',
			url: 'http://www.bushrayousaf.com/214183-2/',
			image: {
				'large': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/about65.jpg',
				'small': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/about65.jpg'
			}
		}, {
			title: 'what you think.',
			url: 'http://www.bushrayousaf.com/214183-2/',
			image: {
				'large': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/20180427_171343.jpg',
				'small': 'http://www.bushrayousaf.com/wp-content/uploads/2018/06/20180427_171343.jpg'
			}
		}, {
			title: 'I am Awsome and i know it hahah',
			url: 'http://www.bushrayousaf.com/214183-2/',
			image: {
				'large': 'http://www.artinourpark.ca/img/portfolio/14.jpg',
				'small': 'http://www.artinourpark.ca/img/portfolio/14.jpg'
			}
		}, {
			title: 'love this photo',
			url: 'http://www.bushrayousaf.com/214183-2/',
			image: {
				'large': 'http://www.artinourpark.ca/img/music/10.jpg',
				'small': 'http://www.artinourpark.ca/img/music/10.jpg'
			}
		}]
	}
});
