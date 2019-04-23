function Menu() {
    this.menudom = document.getElementById('menudom');
    this.menulist = '';
    this.path = '';
    this.menuhtml = '';

    this.getMenu = function () {
        var menusto = localStorage.getItem('menu');
        if (menusto){
            this.menulist = JSON.parse(menusto)
        } else {
            fetch('getmenu')
                .then(response => response.text())
                .then(function(res) {
                    localStorage.setItem('menu',res)
                    this.menulist = JSON.parse(res)
                });
        }
    }
    this.getPath = function () {
        var route = new Router();
        this.path = route.getHash(window.location.hash)
    }
    this.relMenu = function () {

    }
    this.menuhtml = function () {
        this.getMenu();
        console.log(this.menulist)
        for (i in this.menulist){
            console.log(i)
        }
    }
    this.init = function () {
        this.getPath();
        this.menuhtml();
    }
}
var menu = new Menu();
menu.init();
