<header>
<div class="index">
<div class="menu_bar">
			<a href="#"  class="bt-menu"><span ><img src="img/logo_do.png"/></span>Menu</a>
		</div>
    <section class="container" >
        <div class="row">
        <div class="logo col-sm-12 col-lg-6" style="padding: 10px;">
            <img src="img/logo_do.png" alt="">
        </div>
            <div class="col-sm-12 col-lg-6">
                <div>
                    <br>
                    <nav>
                        <ul id=”button”>
                            
                            <li><a href='goodbye.php'>Contacto</a></li>                      
                            <li><a href='ilike.php'>Academia</a></li>
                            <li><a href='index_academia.php'>Reg&iacute;strate</a></li>
                            <li><a href='index.php'>Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>   
    </section>
</div>

<script>
    
    $(document).ready(main);		
    var contador = 1;		
    function main(){
        $('.index').click(function(){
            // $('nav').toggle(); 	
            if(contador == 1){
                $('nav').animate({
                    left: '0'
                });
                contador = 0;
            } else {
                contador = 1;
                $('nav').animate({
                    left: '-100%'
                });
            }	
        });	
    };
    </script>

</header>