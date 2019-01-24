$(function(){
  var now = new Date();
  var wd = ['日', '月', '火', '水', '木', '金', '土'];

  $('.dateSlideList li').text(function(){
    var m=now.getMonth()+1;
    var d=now.getDate();
    var w=wd[now.getDay()];
    now.setDate(now.getDate()+1);
    return m+"月"+d+"日"+"("+w+")";
  });
});

//function save(){
