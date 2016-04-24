<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Clinica Cavane</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
</head>
<body>

<div id="bg">
<div id="bg_top_bg">
<div id="bg_top">
<div id="bg_bot">


<div id="main">
<!-- header begins -->
<div id="header">
  <div id="logo">

      <a href="#"> </br> Clinica Cavane</a>
        <h2><a href="#"><small> A soluҫão da saúde e estética feminina </small></a></h2>
    </div>
	<div id="buttons">
      <a href="{{url('lissaneclinica')}}" class="but but_t"  title="">Pagina Inicial</a>
      <a href="{{url('consultas')}}" class="but" title="">Consultas</a>
      <a href="{{url('disponibilidade')}}"  class="but" title="">Medicos </a>

                    
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <a href="{{ url('home') }}" class="but">Sair</a>
                    

    </div>
	
	
</div>
<!-- header ends -->
<div class="top">

			<div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/top_dois.jpg" alt="" />
                <img src="images/top_um.jpg" alt=""/>
                <img src="images/top_tres.jpg" alt="" />
            </div>
			        
        </div>

<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

</div>

<div style="height: 47px"></div>
        <!-- content begins -->
        		@yield('content')
    <!-- content ends --> 
    <div style="height:40px"></div>
    <!-- bottom begin -->
    <div id="bottom_bot">
        <div id="bottom">
        <div id="b_col1">
              </br><h1>Serviҫos</h1>
                <div style="height:10px"></div>
                    <ul class="spis_bot">
                        <li><a href="#">Ginecologia</a></li>
                        <li><a href="#">Obstetrícia</a></li>
                        <li><a href="#">Estética</a></li>
                        <li><a href="#">Reproduҫão Humana </a></li>
                        <li><a href="#">Nutriҫão </a></li>
                    </ul>
                </div>
                <div id="b_col2">
                    </br><h1>Contacte-nos</h1>
                    <div style="height:20px"></div>
                    <div style="padding-left:10px">
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us1.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">Av. Eduardo Mondlane,N. 1945</b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us2.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">Telefone:  +258 21 123 123<br />
                                        Fax: +258 21 123 123
                                    </b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                        <div  class="box_us">
                              <div  class="box_us_l">
                                <img src="images/fish_us3.png" alt="" />
                              </div>
                              <div  class="box_us_r">
                                    <b class="lh">E-mail: Cavaneclinica@yahoo.com</b>
                              </div>
                              <div style="clear: both; height:10px;"></div>
                        </div>
                    </div>
            </div>
    
            <div id="b_col3">
            	</br><h1>Partilhe</h1>
              	<div style="height:15px"></div>
                    <ul>
                        <li><img src="images/fu_i1.png" class=" fu_i" alt="" /><a href="#">Subscreva no Blog</a></li>
                        <li><img src="images/fu_i2.png" class=" fu_i" alt="" /><a href="#"> Encontre-nos no Facebook</a></li>
                        <li><img src="images/fu_i3.png" class=" fu_i" alt="" /><a href="#">RSS Feed</a></li>
                        <li><img src="images/fu_i4.png" class=" fu_i" alt="" /><a href="#">Siga-nos no Twitter</a></li>
                    </ul>  
                        
                </div>
          	<div style="clear: both; height:20px;"></div>
        </div>
    </div>
<!-- bottom end --> 
<!-- footer begins -->
            <div id="footer">
          		Copyright  2016. <!-- Do not remove --><a href="#" >Grupo9_WebTrainnig</a><!-- end --><br />
                <a href="#">Politicas de Privacidade</a> | <a href="#">Termos de Uso</a>
             </div>
        <!-- footer ends -->
</div>
</div>
</div>
</div>
</div>
</body>
</html>
