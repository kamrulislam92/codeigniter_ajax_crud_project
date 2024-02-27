<!--Inspired from Themeforest Template-->

<div class="portfolio">
  <ul>
    <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
      <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
      <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
      <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
        <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
        <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
        <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
        <li><a href="#"><img src="http://marshall-design.com/codepen/item.png"/></a>
      <div class="caption">
        <i class="fa fa-pencil fa-lg"></i>
        <h1>Portfolio Item</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed laoreet dui non tortor feugiat</p>
      </div>
    </li>
  </ul>
</div>
<script>
    
$( "li" ).hover(
  function() {
      $(this).find("a").css("color","#FFF");
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"1",
    }, 600, function () {
        // Animation complete.
        // Show Navigation
    })
  }, function() {
      $(this).find("a").css("color","#555");
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 600, function () {
        // Animation complete.
        // Show Navigation
    })
  }
);

 $(function() {
    $( ".portfolio li" ).draggable();
    $( ".portfolio li" ).on( "dragstart", function( event, ui ) {
      $(this).addClass("active-drag");
    } );
  });
</script>
