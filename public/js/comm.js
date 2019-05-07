var new_scroll_position = 0;
var last_scroll_position;
var num1 = 0;
var num2 = 0;
var header = document.getElementById("header");
var html = "<nav>\n" +
  "        <h2 id=\"mnavh\"><span class=\"navicon\"></span></h2>\n" +
  "        <ul id=\"starlist\">\n" +
  "        </ul>\n" +
  "    </nav>";
var head = $(header);
var starlist = $('#starlist').html();
var old = head.html();
window.addEventListener('scroll', function(e) {
    if(parseInt($(window).scrollTop())>180&& num1 ==0){
        head.addClass('header-navigation');
        head.html(html);
      $('#starlist').html(starlist)
        num1++;
        num2 = 0;
    }else if (parseInt($(window).scrollTop())<180&& num2 ==0) {
        head.removeClass();
        head.html(old);
        num2++;
        num1 = 0;
    }else if (num1!=0&&num2==0) {
        last_scroll_position = window.scrollY;
        // Scrolling down
        if (new_scroll_position < last_scroll_position && last_scroll_position > 180) {
            // header.removeClass('slideDown').addClass('slideUp');
            header.classList.remove("slideDown");
            header.classList.add("slideUp");
            // Scrolling up
        } else if (new_scroll_position > last_scroll_position) {
            // header.removeClass('slideUp').addClass('slideDown');
            header.classList.remove("slideUp");
            header.classList.add("slideDown");
        }
        new_scroll_position = last_scroll_position;
    }
});
$("body").niceScroll({cursorcolor:"#bebebe",cursorwidth:'5px'});
new hcSticky('aside', {
    stickTo: 'main',
    innerTop: 200,
    followScroll: false,
    // queries: {
    //     480: {
    //         disable: true,
    //         stickTo: 'body'
    //     }
    // }
});
var obj=null;
var As=document.getElementById('nav').getElementsByTagName('a');
obj = As[0];
for(i=1;i<As.length;i++){if(window.location.href.indexOf(As[i].href)>=0)
    obj=As[i];}
obj.id='selected'
$("body").niceScroll({cursorcolor:"#bebebe",cursorwidth:'5px'});
//回到顶部
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
  //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
  offset_opacity = 1200,
  //duration of the top scrolling animation (in ms)
  scroll_top_duration = 700,
  //grab the "back to top" link
  $back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function () {
  ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
  if ($(this).scrollTop() > offset_opacity) {
    $back_to_top.addClass('cd-fade-out');
  }
});
//smooth scroll to top
$back_to_top.on('click', function (event) {
  event.preventDefault();
  $('body,html').animate({
      scrollTop: 0,
    }, scroll_top_duration
  );
});
