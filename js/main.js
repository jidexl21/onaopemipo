// optional
// $('#blogCarousel').carousel({
//     interval: 5000
// });

jQuery(function($) {

  $("[role=tab-btn]").each(function(){
    var target = $(this).attr("target"); 

    $(this).unbind("click").bind("click", function(curr){
      $(this)
        .parent().parent().addClass("bg-white").siblings().removeClass("bg-white")

      curr.preventDefault()
        $(target).addClass("active").siblings().hide().removeClass("active").end().show();
        
    })
  })

  $(document).on("hidden.bs.modal", function(){
    var curr = $("div.bubble.round.viewing");
    var all = $(".tab-pane.active div.bubble.round");
    var last = all.length -1; 
    var lastLi = all.eq(last)
    curr.insertAfter(lastLi);
  })

  $("div.bubble.round").click(function(){
    var curr = this;
    $(this).addClass("viewing").siblings().removeClass("viewing")

    $(".tab-pane.active div.bubble.round").eq(0).each(function(){
      if(this == curr){ 
        var headline = $(this).find("span.headline").text();
        console.log(headline)
        var cont = $(this).find(".d-none").html();

        var modal = new bootstrap.Modal(document.getElementById('staticBackdrop2312'), {
          keyboard: false
        }); 
       
        $("#staticBackdrop2312 .modal-body").each(function(){
          $(this).empty().append(cont);
        })
        modal.show();

      
      return 
    }
      $(curr).insertBefore(this);
    })
  })


});
var myCarousel = document.querySelector('#blogCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
}); 
