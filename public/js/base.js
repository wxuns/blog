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
		fetch(this.hash)
		  .then(function(response) {
		  	return response.text();
		  })
		  .then(function(response) {
		    $('#app').html(response)
		    return;
		  })
	}
	this.init = function() {
		window.addEventListener("load",this.refresh.bind(this),false)
		window.addEventListener("hashchange",this.refresh.bind(this),false)
	}
}
