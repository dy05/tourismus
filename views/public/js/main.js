var url = document.getElementsByClassName("active")[0].getAttribute('href');

function HeightBackground() {
	var height = window.innerHeight;
    if (url == 'index.html') {
        document.getElementById('cover').style.height = height / 1.6 + 'px'
    }
}

function navBar() {
	if(document.documentElement.scrollTop > 40){
		document.getElementById('navbar').classList.remove('full');
		document.getElementById('navbar').classList.add('unfull');
	}else{
		document.getElementById('navbar').classList.remove('unfull');
		document.getElementById('navbar').classList.add('full');
	}
}

function cMr() {
    if (url == 'index.html') {
        if (document.documentElement.scrollTop > 80) {
            document.getElementById('cmr').classList.remove('ok');
            document.getElementById('cmr').classList.add('go');
        } else {
            document.getElementById('cmr').classList.remove('go');
            document.getElementById('cmr').classList.add('ok');
        }
    }
}

function contactSend() {
    window.alert("Pas encore disponible !");
}

function testJavascript() {
}

window.onload = function () {
//    testJavascript();
	HeightBackground();
	window.onresize = function () {
        HeightBackground();
	};
	window.onscroll = function () {
        cMr();
		navBar();
	}
};

document.getElementById("menuToggle").onclick = function (e) {
    e.preventDefault();
    document.getElementById("navbar").classList.toggle("responsive-menu");
    document.querySelector("body").classList.toggle("body")
};

function lieuxFunction() {
    document.getElementById("lieuxDropBtn").classList.toggle("show");
}

function servicesFunction() {
    document.getElementById("servicesDropBtn").classList.toggle("show");
}
/*

window.onclick = function(e) {
    var services = document.getElementById("servicesDropBtn");
    var lieux = document.getElementById("lieuxDropBtn");

    // Ceci stop le click si il ságit d'un menu entre sservices et lieux
    if (e.target.matches('#lieuxDropBtn') || e.target.matches('#servicesDropBtn')) {
        e.preventDefault();
    }

    // Si ce nest pas Lieux qui affiche le menu et que lieux a la class show, on retire
    if (!e.target.matches('#lieuxDropBtn')) {
        if (lieux.classList.contains('show')) {
            lieux.classList.remove('show');
        }
    }
    // Si ce nest pas Services qui qffiche le sous menu et que lieux a la class show, on retire
    if (!e.target.matches('#servicesDropBtn')) {
        if (services.classList.contains('show')) {
            services.classList.remove('show');
        }
    }
};

*/