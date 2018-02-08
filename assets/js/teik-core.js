(function($) {
  $.fn.teik_menu = function(openClass, target) {
    var $this = $(this);
    defaultClass = {
      button: "nav__toggle--isOpened",
      menu: "nav__menu--open"
    };
    $.extend(defaultClass, openClass);
    if (null === target || undefined === target) {
      $target = $(".teik-menu");
    }
    $this.click(function(event) {
      event.preventDefault();
      console.log(defaultClass);
      $this.toggleClass(defaultClass.button);
      $target.toggleClass(defaultClass.menu);
    });
  };
})(jQuery);
