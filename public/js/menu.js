function Menu() {
    this.path = '';

    this.getPath = function () {
        var route = new Router();
        this.path = route.getHash(window.location.hash)
    }
    this.isactive = function (list) {
        if(list.level){
            for(j in list.level){
                level = list.level[j];
                if (this.path == level.path) {
                    return 'active';
                }
            }
        }else{
            return;
        }
    }
    this.secondmenu = function (list) {
        var html = '';
        for(j in list.level){
            level = list.level[j];
            if(level.status == 1){
                html += '<li><a href="#/'+level.path+'"><i class="fa fa-circle-o"></i> '+level.name+'</a></li>';
            }
        }
        return html;
    }
    this.menuhtml = function (menulist) {
        this.getPath();
        var html = '';
        for (i in menulist){
            var list = menulist[i];
            var active = this.isactive(list);
            if (list.status) {
                html += '<li class="treeview ' + active + '"><a href="javascript:;' + list.path + '">' +
                    '<i class="' + list.icon + '"></i> ' +
                    '<span>' + list.name + '</span> ' +
                    '<i class="fa fa-angle-right pull-right"></i></a>' +
                    (active == 'active' ? '<ul class="treeview-menu menu-open" style="display: block;">' :
                        '<ul class="treeview-menu" style="display: none;">') +
                    this.secondmenu(list) +
                    '</ul></li>';
            }
        }
        return html;
    }
    this.init = function () {
        var menusto = localStorage.getItem('menu');
        if (menusto){
            menulist = JSON.parse(menusto)
            $('#menudom').html(menu.menuhtml(menulist))
            $.sidebarMenu($('.sidebar-menu'))
        } else {
            fetch('/getmenu',{cache: 'no-cache'})
                .then(response => response.text())
                .then(function(res) {
                    localStorage.setItem('menu',res)
                    res = JSON.parse(res)
                    var menu = new Menu();
                    $('#menudom').html(menu.menuhtml(res))
                    $.sidebarMenu($('.sidebar-menu'))
                    return;
                });
        }
    }
    this.relMenu = function () {
        localStorage.removeItem('menu');
        this.init();
    }
}
