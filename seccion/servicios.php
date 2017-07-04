<div class="linea_naranja" style="">
    <svg id="lineanaranja" width="295px" height="124px" viewBox="71 28.5 295 124" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <line fill="none" stroke="#F69321" stroke-width="2" stroke-miterlimit="10" x1="360" y1="43.416" x2="360" y2="43.426"/>
        <g>
                <g>
                        <polyline fill="none" stroke="#F69321" stroke-width="2" stroke-miterlimit="10" points="360,33.457 360,90.184 79.784,90.184 
                                79.784,144.417 		"/>
                        <g>
                                <polygon fill="#F69321" points="75,143.017 79.784,151.305 84.569,143.017 			"/>
                        </g>
                </g>
        </g>
    </svg>   
</div>
<div class="info_numero">
    <div class="info_cont">
        <div class="infoimgen">
            <img src="images/servicio_1.png" id="telef"  />
            <div class="flecha_1">
                <svg id="flech1" width="74px" height="61px" viewBox="35.875 4.781 74 61" version="1.1" xmlns="http://www.w3.org/2000/svg">            
                    <g>
                        <g>
                            <path fill="none" stroke="#969696" stroke-miterlimit="10" d="M41.984,65.781c0,0,3.133-43.573,60.294-56.665"/>
                            <g>
                                <polygon fill="#969696" points="100.308,13.357 101.082,9.408 98.776,6.11 108.131,7.919 			"/>
                            </g>
                        </g>
                    </g>

                </svg>
            </div>            
        </div>
        <p class="titulo_1 animated fadeOut" id="titulo_ico_1">Llama a la <strong>línea de atención de tu ciudad</strong></p>
        <p class="text_1 animated fadeOut" id="text_ico_1">Danos tus <strong>datos completos</strong> 
            y dinos claramente tus <strong>síntomas.</strong> </p>
    </div>
    <script>
						// build scene
            var scene = new ScrollMagic.Scene({triggerElement: ".info_numero"})
                                            // trigger animation by adding a css class
                                            
                                            .setClassToggle("#telef", "animated")
                                            
                                            .addTo(controller);
                                            
                                            
             var scene2 = new ScrollMagic.Scene({triggerElement: "#telef"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    $('#titulo_ico_1').removeClass('fadeOut');
                    $('#text_ico_1').removeClass('fadeOut');
            })
            .on("leave", function () {
                    // reset style
                    $('#titulo_ico_1').addClass('fadeOut');
                    $('#text_ico_1').addClass('fadeOut');
            })                                
            .setClassToggle("#titulo_ico_1", "fadeIn")
            .setClassToggle("#text_ico_1", "fadeIn")
                                            
            .addTo(controller);
    </script>
    <div class="num_cont">
        <a href="#" data-target="prev" class="customLink prevBtn"> previous </a>
        <img src="images/ico_tel.png" alt="" class="left" />
        <div id="slider"  >
            <div>                
                <p>
                    <span>Medellín</span><br>
                    444 1330
                </p>
            </div>
            <div>                
                <p>
                    <span>bogotá</span><br>
                    307 7330
                </p>
            </div>
            <div>                
                <p>
                    <span>armenia</span><br>
                    731 4031
                </p>
            </div>
            <div>                
                <p>
                    <span>cali</span><br>
                    653 1313
                </p>
            </div>
            <div>                
                <p>
                    <span>manizales</span><br>
                    887 9911
                </p>
            </div>
            <div>                
                <p>
                    <span>palmira</span><br>
                    275 7550
                </p>
            </div>
            <div>                
                <p>
                    <span>pereira</span><br>
                    313 5911
                </p>
            </div>
            <div>
                
                <p>
                    <span>rionegro</span><br>
                    444 1330
                </p>
            </div>
            
        </div>
            
            <a href="#" data-target="next" class="customLink nextBtn"> next </a>
            <p class="mensaje_slider">Haz clic en las flechas laterales<br> para conocer el teléfono <br>de tu ciudad. </p>
    </div>
</div>
<div class="info_clasifica">
    <div class="linea_verde">
        
        <svg id="svg_line_verde" width="232px" height="185px" viewBox="71.213 92.235 231 184" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <g>
	<g>
		<polyline fill="none" stroke="#96BE16" stroke-width="2" stroke-miterlimit="10" points="74.491,92.235 74.491,271.735 
			292.843,271.735 		"/>
		<g>
			<polygon fill="#96BE16" points="291.419,276.6 299.843,271.735 291.419,266.872 			"/>
		</g>
	</g>
</g>
        </svg>
    </div>
    <div class="cont_clasifica">
        <img src="images/servicio_2.png" id="infor" />
        <div class="text_clasif">
            <p class="titu_2 animated fadeOut" id="titulo_ico_2">Se clasifica <strong>el servicio</strong></p>
            <p class="text_2 animated fadeOut" id="texto_ico_2">Nuestro personal de atención prehospitalaria <strong>clasificará
tu servicio y la prioridad</strong> de atención según tus síntomas, siempre bajo supervisión médica.  </p>
        </div>
    </div>
    
    <script>
						// build scene
            var scene3 = new ScrollMagic.Scene({triggerElement: ".cont_clasifica"})
                                            // trigger animation by adding a css class
                                            
                                            .setClassToggle("#infor", "animated")
                                            
                                            .addTo(controller);
                                            
             var scene4 = new ScrollMagic.Scene({triggerElement: ".cont_clasifica"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    $('#titulo_ico_2').removeClass('fadeOut');
                    
            })
            .on("leave", function () {
                    // reset style
                    $('#titulo_ico_2').addClass('fadeOut');
                    
            })                                
            
            
            .setClassToggle("#titulo_ico_2", "fadeInLeft")
            .addTo(controller);                               
    
             var scene5 = new ScrollMagic.Scene({triggerElement: ".cont_clasifica"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
            
                    $('#texto_ico_2').removeClass('fadeOut');
            })
            .on("leave", function () {
                    // reset style
            
                    $('#texto_ico_2').addClass('fadeOut');
            })                                
            
            .setClassToggle("#texto_ico_2", "fadeInLeft")
            
            .addTo(controller);
    </script>
    
</div>
<div class="tipos_servicio">
    <div class="flechas_serv">
        <div class="flecha_2 left">
            <svg id="flech2" width="184px" height="90px" viewBox="61.112 13.889 184 90" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <g>
                        <g>
                                <path fill="none" stroke="#969696" stroke-miterlimit="10" d="M245.024,17.973c-72.309,1.64-144.216,39.631-176.687,79.261"/>
                                <g>
                                        <polygon fill="#969696" points="67.243,92.885 69.117,96.317 72.889,97.351 64.772,101.809 			"/>
                                </g>
                        </g>
                </g>
            </svg>
        </div>
        <div class="flecha_3 left">
            <svg id="flech3" width="45px" height="85px" viewBox="37.956 22.698 45 85" version="1.1" xmlns="http://www.w3.org/2000/svg">            
                <g>
                        <g>
                                <path fill="none" stroke="#969696" stroke-miterlimit="10" d="M82.956,24.865c0,0-38.845,32.907-41.82,76.198"/>
                                <g>
                                        <polygon fill="#969696" points="37.956,98.377 41.236,99.952 44.648,98.683 40.938,106.461 			"/>
                                </g>
                        </g>
                </g>
            </svg>
        </div>
        <div class="flecha_4 left">
            <svg id="flech4" width="70px" height="81px" viewBox="28.67 2.418 70 81"  version="1.1" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <g>
                            <g>
                                    <path fill="none" stroke="#969696" stroke-miterlimit="10" d="M30.667,4.762c0,0,49.018,12.765,61.67,73.006"/>
                                    <g>
                                            <polygon fill="#969696" points="88.295,75.791 92.082,76.605 95.298,74.445 93.392,83.418 			"/>
                                    </g>
                            </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
    
    <div class="cont_tipos">
        <div class="tipo">
            <img src="./images/tipo_1.png" alt="" id="img_tipo_1" class="animated fadeOut" />
            <p class="title_tipo animated fadeOut" id="title_tipo_1">Emergencia</p>
            <p class="text_tipo animated fadeOut" id="texto_tipo_1">Situaciones de salud en las que <strong>está comprometida la vida del paciente</strong>  y debe ser atendida de forma inmediata. </p>
        </div>
        
        <div class="tipo">
            <img src="./images/tipo_2.png" alt="" id="img_tipo_2" class="animated fadeOut" />
            <p class="title_tipo animated fadeOut" id="title_tipo_2">Urgencia</p>
            <p class="text_tipo animated fadeOut" id="texto_tipo_2">Situaciones de salud 
                en las cuales la vida del paciente <strong>no está comprometida</strong> pero 
                se requiere una <strong>atención oportuna.</strong></p>
        </div>
        
        <div class="tipo">
            <img src="./images/tipo_3.png" alt="" id="img_tipo_3" class="animated fadeOut" />
            <p class="title_tipo animated fadeOut" id="title_tipo_3">Consulta</p>
            <p class="text_tipo animated fadeOut" id="texto_tipo_3">Atención médica ante 
                <strong>cualquier situación 
                    de salud</strong> que requiera valoración médica.</p>
        </div>
    </div>
    
    <script>
        var scene6 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    
                    $('#img_tipo_1').removeClass('fadeOut');
            })
            .on("leave", function () {
                    // reset style
                    $('#img_tipo_1').addClass('fadeOut');
            })                                
            
            .setClassToggle("#img_tipo_1", "fadeInDownBig");
            
           
    
        
        var scene7 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    setTimeout(function(){ 
                        
                        $('#img_tipo_2').removeClass('fadeOut');
                    }, 1000);
                    
            })
            .on("leave", function () {
                    // reset style
            
                    $('#img_tipo_2').addClass('fadeOut');
            })                                
            
            .setClassToggle("#img_tipo_2", "fadeInDownBig")
            
            .addTo(controller);
        var scene8 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    setTimeout(function(){ 
                        
                        $('#img_tipo_3').removeClass('fadeOut');
                    }, 2000);
                    
            })
            .on("leave", function () {
                    // reset style
            
                    $('#img_tipo_3').addClass('fadeOut');
            })                                
            
            .setClassToggle("#img_tipo_3", "fadeInDownBig")
            
            .addTo(controller);
    
    var scene9 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
            
                    $('#title_tipo_1').removeClass('fadeOut');
            })
            .on("leave", function () {
                    // reset style
            
                    $('#title_tipo_1').addClass('fadeOut');
            })                                
            
            .setClassToggle("#title_tipo_1", "fadeInDownBig")
            
           
    var scene10 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    
                
                setTimeout(function(){ 
                        
                        $('#title_tipo_2').removeClass('fadeOut');
                    }, 1000);
            })
            .on("leave", function () {
                    // reset style
            
                    $('#title_tipo_2').addClass('fadeOut');
            })                                
            
            .setClassToggle("#title_tipo_2", "fadeInDownBig")
            
            .addTo(controller);
    var scene11 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    setTimeout(function(){ 
                        
                        $('#title_tipo_3').removeClass('fadeOut');
                    }, 2000);
                    
            })
            .on("leave", function () {
                    // reset style
            
                    $('#title_tipo_3').addClass('fadeOut');
            })                                
            
            .setClassToggle("#title_tipo_3", "fadeInDownBig")
            
            .addTo(controller);
    
    var scene12 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
            
                    $('#texto_tipo_1').removeClass('fadeOut');
            })
            .on("leave", function () {
                    // reset style
            
                    $('#texto_tipo_1').addClass('fadeOut');
            })                                
            
            .setClassToggle("#texto_tipo_1", "fadeInDownBig")
            
            .addTo(controller);
    var scene13 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    setTimeout(function(){ 
                        
                        $('#texto_tipo_2').removeClass('fadeOut');
                    }, 1000);
                    
            })
            .on("leave", function () {
                    // reset style
            
                    $('#texto_tipo_2').addClass('fadeOut');
            })                                
            
            .setClassToggle("#texto_tipo_2", "fadeInDownBig")
            
            .addTo(controller);
    var scene14 = new ScrollMagic.Scene({triggerElement: ".tipos_servicio"})
                                            // trigger animation by adding a css class
            .on("enter", function () {
                    // trigger animation by changing inline style.
                    setTimeout(function(){ 
                        
                        $('#texto_tipo_3').removeClass('fadeOut');
                    }, 2000);
                    
            })
            .on("leave", function () {
                    // reset style
            
                    $('#texto_tipo_3').addClass('fadeOut');
            })                                
            
            .setClassToggle("#texto_tipo_3", "fadeInDownBig")
            
            .addTo(controller);
    
    controller.addScene([
            scene6,
            scene9
        ]);
    </script>
</div>
<script src="js/vivus.js"></script>

<script>
    lineanaranja = new Vivus('lineanaranja', {type: 'scenario-sync', duration: 20, forceRender: false});
    svg_line_verde = new Vivus('svg_line_verde', {type: 'scenario-sync', duration: 20, forceRender: false});
    flec1 = new Vivus('flech1', {type: 'scenario-sync', duration: 20, forceRender: false});
    flec2 = new Vivus('flech2', {type: 'scenario-sync', duration: 20, forceRender: false});
    flec3 = new Vivus('flech3', {type: 'scenario-sync', duration: 20, forceRender: false});
    flec4 = new Vivus('flech4', {type: 'scenario-sync', duration: 20, forceRender: false});
    
    
    
</script>





