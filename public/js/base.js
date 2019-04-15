function Router() {
	this.hash = '';
	this.html = ''
	this.getHash = function(hash) {
		hash = hash.substr(2)
		if (!hash) {
			window.location.hash = '#/'
			hash = 'home'
		}
		return hash
	}
	this.refresh = function() {
		this.hash = this.getHash(window.location.hash)
		this.ajax();
	}
	this.ajax = function() {
		req = new XMLHttpRequest();
		req.open('get',this.hash);
		req.send();
		req.onreadystatechange = function() {
			if (req.readyState == 4 && req.status == 200) {
				document.getElementById('app').innerHTML = req.responseText
			}
		}
	}
	this.init = function() {
		window.addEventListener("load",this.refresh.bind(this),false)
		window.addEventListener("hashchange",this.refresh.bind(this),false)
	}
}
var route = new Router();
route.init()