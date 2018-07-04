//checks if element it is called on is visible (only checks horizontally
(function($) {
  var $window = $(window);
  
  $.fn.isVisible = function(){
    var $this = $(this),
      Left = $this.offset().left,
      visibleWidth = $window .width();

    return Left < visibleWidth;  
  }
})(jQuery);

(function($){
  var list = $('.portfolio-items'),
      showVisibleItems = function(){
      list.children('.item:not(.falldown)').each(function(el, i){
          var $this = $(this);
          if($this.isVisible()){
            $this.addClass('falldown');
          }
        });
      };
  
  //initially show all visible items before any scroll starts
  showVisibleItems();
  
  //then on scroll check for visible items and show them
  list.scroll(function(){
    showVisibleItems();
  });
  
  //image hover pan effect

  
  //add mouse wheel support with the jquery.mousewheel plugin
  list.mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 60);
    
      event.preventDefault();

   });
  
})(jQuery);

 