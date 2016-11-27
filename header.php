
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato|Raleway:400,300italic|Ubuntu' rel='stylesheet' type='text/css'>
               
<script>
        $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
    
</script>

<style>
    .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
                text-decoration: underline;
                color:white;
                
    }
    li a{
                font-family: 'Raleway', sans-serif;
                color:white;
                font-size: 130%;
                font-weight: bold;
            }
 
 .searchbox{
     padding-bottom: 0px;
     margin:0px;
    position:relative;
    min-width:50px;
    
    width:0%;
    height:50px;
    float:right;
    overflow:hidden;
    
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    -ms-transition: width 0.3s;
    -o-transition: width 0.3s;
    transition: width 0.3s;
}

.searchbox-input{
    top:0;
    right:0;
    border:0;
    outline:0;
    background:white;
    width:500px;
    height:50px;
    margin:0;
    padding:0px 20px 0px 20px;
    font-size:20px;
    color:black;
    
}
.searchbox-input::-webkit-input-placeholder {
    color: #d74b4b;
}
.searchbox-input:-moz-placeholder {
    color: #d74b4b;
}
.searchbox-input::-moz-placeholder {
    color: #d74b4b;
}
.searchbox-input:-ms-input-placeholder {
    color: #d74b4b;
}

.searchbox-icon,
.searchbox-submit{
    width:50px;
    height:50px;
    display:block;
    position:absolute;
    top:0;
    font-family:verdana;
    font-size:22px;
    right:0;
    padding:0;
    margin:0;
    border:0;
    outline:0;
    line-height:50px;
    text-align:center;
    cursor:pointer;
    color:#dcddd8;
    background:#172b3c;
}



.searchbox-open{
    width:100%;
}

.byline{
  position:absolute;
  top:150px;
  left:30%;
  text-align:center;
  font-size:18px;
}
.byline a{
  text-decoration:none;
  color: #d74b4b;
}


        
</style>
<script>
 $(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
        });
            function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
</script>



<nav style="background-color: black; " class="navbar navbar-fixed-top navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
      <img alt="Brand" src="Untitled.png" height="20px">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fashion <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mensarticle.php/?maker=1">Mens</a></li>
            <li><a href="mensarticle.php/?maker=2">Womens</a></li>
           
          </ul>
        </li>
        <li><a href="#">Sale</a></li>
        <li><a href="#">Food</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mensarticle.php/?maker=3">Bollwood</a></li>
            <li><a href="mensarticle.php/?maker=4">Cricket</a></li>
            <li><a href="mensarticle.php/?maker=5">Desi</a></li>
            <li><a href="mensarticle.php/?maker=6">Tech</a></li>
            <li><a href="mensarticle.php/?maker=7">Knowledge</a></li>
            <li><a href="mensarticle.php/?maker=8">Inspirational</a></li>
           
          </ul>
        </li>
        
        
        </ul>
        <ul style="padding:0px; margin:0px;  " class="nav navbar-nav navbar-right">
            <li>
                <form class="searchbox">
                    <input type="search" placeholder="Search" name="search" class="searchbox-input" onkeyup="buttonUp();" required>
                    <input type="submit" class="searchbox-submit" value="GO">
                    <span class="searchbox-icon" >GO</span>
        
                </form>
          </li>
        
        </ul>
         
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

