$(function(){
  //Cache the window object
  var $window = $(window);

  //Parallax background effect
  $('section[data-type="background"]').each(function(){
    var $bg_obj = $(this); //assigning the object

    $(window).scroll(function(){
      //scroll the background at var speed
      //the yPos is a negative value because we are scrolling it UP

      var yPos = -($window.scrollTop() / $bg_obj.data('speed'));

      //Put together our final background position
      var coords = '50% ' + yPos + 'px';

      //Move the background
      $bg_obj.css({ backgroundPosition: coords });

    }); // end window scroll
  });
});
