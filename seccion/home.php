<a href="javascript:closeVideo();" class="close">X</a>    

<section class="banner_home">
    <div class="texto">
        <div class="left w100">
            <img src="images/logo.png" class="left img_respon" />
            <img src="images/logo_falck.png" class="right img_respon" />     
            <img src="images/logo_mb.png" class="logo_mb" />
        </div>
        <div class="titulo_banner left">
            <p>Conoce cómo llegamos<br> a ti <strong>para cuidarte</strong></p>
            <p class="ver_video">Ver video</p>
            <a href="javascript:openVideo();" class="video_link">Video </a>
        </div>
    </div>
    <div class="cont_animacion">
      <?php include 'banner.php';?>  
    </div>
    <div class="cont_ambu">
        <img src="images/ambulancia.png" class="moviluna" />
    </div>  
    
</section>
<script>
        // init controller
        var controller = new ScrollMagic.Controller();
    </script>
<section class="servicio_emi">
    <h2 class="tit_servicio">¿Cómo pedir <br>
        tu servicio <i>emi</i>?</h2>
    <div class="cont_servicios clearfix">
        <?php include 'servicios.php';?>  
    </div>
</section>
<section class="infografia">
    <h2 >Haz clic sobre nuestros servicios y beneficios para conocer más información.</h2>
    <div class="cont_infogra">
        
        <div class="cont_tooltip">
            <div id="tool-tip-1" class="tool-tip tool-tip-1">
                <p class="descrip_serv">
                        
                    <span class="bold_osc">Llegaremos a ti</span> <span class="naranja">de manera oportuna</span> para atender <br>tu situación de salud.
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-2" class="tool-tip tool-tip-2">
                <p class="descrip_serv">
                    Puedes pedir tu servicio <strong><i>emi</i></strong><br> desde la comodidad de <span class="naranja">tu casa,<br> oficina o donde te encuentres</span><br> siempre que estés dentro <br>
                        del <span class="bold_osc">área de cobertura.</span> 
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-3" class="tool-tip tool-tip-3">
                <p class="descrip_serv">
                    Resuelve tus <span class="naranja">inquietudes<br> sobre salud.</span> Consulta la línea<br> de atención médica 
                    de tu ciudad<br> en <span class="bold_osc">www.grupoemi.com</span><br> o a través de nuestra app.<br>
                    
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-4" class="tool-tip tool-tip-4">
                <p class="descrip_serv">
                    Podrás <span class="naranja">acceder a citas con<br> especialistas</span> a una tarifa<br> preferencial ingresando <br>
                        a nuestro sitio web<br> <span class="bold_osc">www.grupoemi.com</span><br> o a través de nuestra app.
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-5" class="tool-tip tool-tip-5">
                <p class="descrip_serv">
                    <span class="naranja">Disfruta de los descuentos</span><br> en establecimientos de salud<br> 
                    y bienestar. Conoce el <span class="bold_osc">amplio<br> directorio de beneficios</span> visitando <span class="bold_osc">www.grupoemi.com</span><br> o a través de nuestra app.
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-6" class="tool-tip tool-tip-6">
                <p class="descrip_serv">
                    Tienes <span class="naranja">cobertura en las<br> ciudades y países</span> donde <strong><i>emi</i></strong><br> <span class="bold_osc">tiene presencia</span> y a través de<br> la <span class="bold_osc">red SIEM</span> en más de <span class="bold_osc">14<br> países de Latinoamérica.</span>
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
            
            <div id="tool-tip-7" class="tool-tip tool-tip-7">
                <p class="descrip_serv">
                    <span class="naranja">Descarga nuestra app</span><br> en  <span class="bold_osc">App store o Google play</span> y accede a nuestros servicios  <span class="bold_osc">desde tu móvil.</span>
                </p>
                <img src="images/back_text_info_infer.png" />
            </div>
        </div>
        
        <div class="items_super">
            <div class="item_serv">
                <a href="javascript:openSerInfo(1);"><img src="images/serv_ben_1.png" alt=""></a>
                <p>Atención de <span>emergencias y urgencias</span> médicas a domicilio.</p>
            </div>
            
            <div class="item_serv">
                <a href="javascript:openSerInfo(2);"><img src="images/serv_ben_2.png" alt=""></a>
                <p><span>Consulta médica</span> domiciliaria.</p>
            </div>
            
            <div class="item_serv">
                <a href="javascript:openSerInfo(3);"><img src="images/serv_ben_3.png" alt=""></a>
                <p><span>Línea telefónica</span> <br>de orientación médica.</p>
            </div>
        </div>        
        <div class="items_infer">
            <div class="item_serv">
                <a href="javascript:openSerInfo(4);"><img src="images/serv_ben_4.png" alt=""></a>
                <p>Consulta con <span>médicos especialistas</span> a una tarifa preferencial.</p>
            </div>
            
            <div class="item_serv">
                <a href="javascript:openSerInfo(5);"><img src="images/serv_ben_5.png" alt=""></a>
                <p><span><strong><i>emi</i></strong> beneficios</span> <strong>descuentos</strong> en establecimientos <br>de salud y bienestar.</p>
            </div>
            
            <div class="item_serv">
                <a href="javascript:openSerInfo(6);"><img src="images/serv_ben_6.png" alt=""></a>
                <p><span>Cobertura</span> nacional <br>e internacional.</p>
            </div>
            
            <div class="item_serv">
                <a href="javascript:openSerInfo(7);"><img src="images/serv_ben_7.png" alt=""></a>
                <p><span>App <strong><i>emi</i></strong></span> todos nuestros servicios en <br>tu mano.</p>
            </div>
        </div>
        
        
        <div class="slider_info_mb">
            <div class="control">
                <a href="#" class="num_control" data-target="1">1</a>
                <a href="#" class="num_control" data-target="2">2</a>
                <a href="#" class="num_control" data-target="3">3</a>
                <a href="#" class="num_control" data-target="4">4</a>
                <a href="#" class="num_control" data-target="5">5</a>
                <a href="#" class="num_control" data-target="6">6</a>
                <a href="#" class="num_control" data-target="7">7</a>
            </div>
            <div id="slider_1">
                <div class="item_serv">
                    <img src="images/serv_ben_1.png" class="icono" alt="">
                    <p class="frase">Atención de <span>emergencias y urgencias</span> médicas a domicilio.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        
                        <span class="bold_osc">Llegaremos a ti</span> <span class="naranja">de manera oportuna</span> para atender tu situación de salud.
                    </p>
                </div>

                <div class="item_serv">
                    <img src="images/serv_ben_2.png" class="icono" alt="">
                    <p class="frase"><span>Consulta médica</span> domiciliaria.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        Puedes pedir tu servicio <strong><i>emi</i></strong> desde la comodidad de <span class="naranja">tu casa, oficina o donde te encuentres</span> siempre que estés dentro 
                        del <span class="bold_osc">área de cobertura.</span>                        
                    </p>
                    
                </div>

                <div class="item_serv">
                    <img src="images/serv_ben_3.png" class="icono" alt="">
                    <p class="frase"><span>Línea telefónica</span> de orientación médica.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        Resuelve tus <span class="naranja">inquietudes sobre salud.</span> Consulta la línea de atención médica 
                        de tu ciudad en <span class="bold_osc">www.grupoemi.com</span> o a través de nuestra app.<br>
                        </p>
                </div>
                <div class="item_serv">
                    <img src="images/serv_ben_4.png" class="icono" alt="">
                    <p class="frase">Consulta con <span>médicos especialistas</span> a una tarifa preferencial.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        Podrás <span class="naranja">acceder a citas con especialistas</span> a una tarifa preferencial ingresando 
                        a nuestro sitio web <span class="bold_osc">www.grupoemi.com</span> o a través de nuestra app.
                    </p>
                </div>
                <div class="item_serv">
                    <img src="images/serv_ben_5.png" class="icono" alt="">
                    <p class="frase"><span><strong><i>emi</i></strong> beneficios</span> <strong>descuentos</strong> en establecimientos de salud y bienestar.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        <span class="naranja">Disfruta de los descuentos</span> en establecimientos de salud 
                        y bienestar. Conoce el <span class="bold_osc">amplio directorio de beneficios</span> visitando <span class="bold_osc">www.grupoemi.com</span> o a través de nuestra app.
                    </p>
                </div>

                <div class="item_serv">
                    <img src="images/serv_ben_6.png" class="icono" alt="">
                    <p class="frase"><span>Cobertura</span> nacional e internacional.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        Tienes <span class="naranja">cobertura en las ciudades y países</span> donde <strong><i>emi</i></strong> <span class="bold_osc">tiene presencia</span> y a través de la <span class="bold_osc">red SIEM</span> en más de <span class="bold_osc">14 países de Latinoamérica.</span>
                    </p>
                </div>

                <div class="item_serv">
                    <img src="images/serv_ben_7.png" class="icono" alt="">
                    <p class="frase"><span>App <strong><i>emi</i></strong></span> todos nuestros servicios en tu mano.</p>
                    <p style="line-height: 0px;"><img src="images/back_text_info.png" width="26" /></p>
                    <p class="descrip_serv">
                        
                        <span class="naranja">Descarga nuestra app</span> en  <span class="bold_osc">App store o Google play</span> y accede a nuestros servicios  <span class="bold_osc">desde tu móvil.</span>
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</section>
<div id="popup_instruc" style="display: none;"  >
        
        <iframe src="" >
        </iframe>
    </div>

    

<script type="text/javascript" src="js/jquery.sudoSlider.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
                var sudoSlider = $("#slider").sudoSlider({
                    continuous:true,
                    customLink:'.customLink',
                    prevNext:false
                });
        
                var sudoSlider1 = $("#slider_1").sudoSlider({
                    //auto:true,
                    continuous:true,
                    customLink:'.num_control',
                    prevNext:false,
                    
                });
                
                
                
                
        });
        
        function closeVideo(){
            $('body').css({
                'overflow':''
            });
            
            $('#popup_instruc').css({
                'display':'none'
            });
            
            $('.close').css({
                'display':'none'
            });
            
            $('#popup_instruc iframe').attr({
                'src':''
            });
        }
        
        
        function openVideo(){
            
            $('body').css({
                'overflow':'hidden'
            });
            $('#popup_instruc').css({
                'display':'block'
            });
            
            $('.close').css({
                'display':'block'
            });
            
            $('#popup_instruc iframe').attr({
                'src':'https://player.vimeo.com/video/167751939?autoplay=1&loop=1&byline=0&title=0'
            });
            
            
            
            /*var width = $( window ).width();
            var new_wdth;
            var new_height;
            
            if( width < 768 ){
                new_wdth = 300;
                new_height = 300;
            }else if(width < 991){
                new_wdth = 700;
                new_height = 500;
            }else{
                new_wdth = 900;
                new_height = 500;
            }
            
            
            
            $.nmManual('#popup_instruc',{
                closeOnEscape:false,
                closeOnClick: false,
                closeButton: '<a href="#" class="nyroModalClose nyroModalCloseButton nmReposition" title="close">X</a>',
                sizes: {	// Size information
                        initW: new_wdth,	// Initial width
                        initH: new_height,	// Initial height
                        w: new_wdth,		// width
                        h: new_height,		// height
                        minW: new_wdth,	// minimum width
                        minH: new_height,	// minimum height
                        wMargin: new_wdth,	// Horizontal margin
                        hMargin: new_height	// Vertical margin
                }
                
            });*/
        }
        
        
        function openSerInfo(id){
            
            $el = $('#tool-tip-'+id);
            
            
            
            if( $('#tool-tip-'+id).is(":visible") ){
                
                
                $($el).css({
                    'display':'none'
                });
                
        }else{
            
            for(x=1;x <= 7; x++){
                
                if(x != id){
                    $('#tool-tip-'+x).css({
                        'display':'none'
                    });
                }
                
            }
            
            
                $($el).css({
                    'display':'block'
                });
        } 
                
            
            
            
        }
        
</script>

