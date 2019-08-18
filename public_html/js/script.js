$(document).on("scroll", function () {
	var pageTop = $(document).scrollTop()
	var pageBottom = pageTop + $(window).height()
	var tags = $(".section")

	for (var i = 0; i < tags.length; i++) {
		var tag = tags[i]

		if ($(tag).position().top < pageBottom) {
			$(tag).addClass("visible")
		} else {
			$(tag).removeClass("visible")
		}
	}
})






/* This section calls the onLoad animation for the header section
@keyframes onLoad {
	0% {
		opacity:0;
	}
	100% {
		opacity:1;
	}
}

.header {
	animation: 5.5s linear 0s 1 onLoad;
}

.navbar-collapse.bottom {
	position: fixed;
	bottom: 60px;
	left: 0;
	padding-left: 15px;
	padding-right: 15px;
	padding-bottom: 15px;
	width: 100%;
}
.navbar-collapse.collapsing.bottom {
	height: auto;
	-webkit-transition: bottom 0.8s ease-in;
	-o-transition: bottom 0.8s ease-in;
	-moz-transition: bottom 0.8s ease-in;
	transition: bottom 0.8s ease-in;
	bottom: -50%;
}

.navbar-collapse.show.bottom {
	bottom: 50px;
	-webkit-transition: bottom 0.7s ease;
	-o-transition: bottom 0.7s ease;
	-moz-transition: bottom 0.7s ease;
	transition: bottom 0.7s ease;
} */