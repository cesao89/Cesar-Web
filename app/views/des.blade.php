<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Example of desaturate and switch between gray and color images</title>
    {{ HTML::script('http://dev.artutkin.ru/desaturate/jquery.js') }}
    {{ HTML::script('http://dev.artutkin.ru/desaturate/jQuery.desaturate.js') }}
    <script type="text/javascript">
      var paircount = 0;

      /* If you want to desaturate after page loaded - use onload event
       * of image.
      */
      jQuery(function($)
      {
        $(".des").each(function() {
          var $newthis = $(this);
          // class for easy switch between color/gray version
          $newthis.addClass("pair_" + ++paircount);
          var $cloned = $newthis.clone().attr('id', '');
          // add cloned after original image, we will switch between
          // original and cloned later
          $cloned.insertAfter($newthis).addClass("color").hide();
          // desaturate original
          $newthis.desaturate({
            onswitch: function() {
              // this functon called after replace image with canvas
            }
          });
          // add events for switch between color/gray versions
          $cloned.closest(".switched_images").bind("mouseenter mouseleave", desevent);
        });
      });

      function desevent(event) 
      {
        var classString = new String($(this).attr('class'));
        var pair = classString.match(/pair_\d+/);

        if (event.type == 'mouseenter')
          if ($("#fade:checked").size())
             $(".des.color", this).fadeIn(500);
          else
             $(".des.color", this).show();

        if (event.type == 'mouseleave')
          if ($("#fade:checked").size())
            $(".des.color", this).fadeOut(500);
          else
            $(".des.color", this).hide();
      }

    </script>
    
    <style type="text/css">
      
    </style>

    
</head>
<body>

<!-- example can fail with security error if you open it as local file -->
<div class="switched_images">
<img src="/img/portfolio/ioliveira_thumb.jpg" class="des" style="width:329px;height:274px;">
</div>

<div class="switched_images">
<img src="/img/portfolio/callix1.jpg" class="des" style="width:411px;height:274px;">
</div>

<input type="checkbox" name="fade" value="1" id="fade"> Use fadeIn/fadeOut

</body>
</html>