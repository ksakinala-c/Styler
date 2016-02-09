
<?php include ('includes/header.php'); 
$base_url_views = $this->config->item('base_url_views');
?>
<link href="<?php echo $base_url_views; ?>page_files/jquery.mCustomScrollbar.css" rel="stylesheet">
        <link href="<?php echo $base_url_views; ?>page_files/MaYaDroupDown.css" rel="stylesheet">
        <link href="<?php echo $base_url_views; ?>page_files/main.css" rel="stylesheet">
        <link href="<?php echo $base_url_views; ?>page_files/font.css" rel="stylesheet">
        <link href="<?php echo $base_url_views; ?>page_files/style.css" rel="stylesheet">
        <script src="<?php echo $base_url_views; ?>page_files/jquery-1.10.1.min.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/VARABLE.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-01.js"></script>
<div style="padding:105px 0 0 0;">

		        <script>
    var debug_design = "";
    $(document).ready(function () {
        designObject.curr = "USD";
        designObject.sign = "&#36;";
        designObject.language = "English";
        dataObject.size = {"body":{"inch":{"neck":{"min":9,"max":23},"chest":{"min":28,"max":75},"waist":{"min":24,"max":73},"hip":{"min":24,"max":73},"length":{"min":19,"max":42},"shoulder":{"min":14,"max":27},"sleeve":{"min":18,"max":30},"shortsleeve":{"min":8.5,"max":20}},"cm":{"neck":{"min":23,"max":58},"chest":{"min":71,"max":190},"waist":{"min":61,"max":185.25},"hip":{"min":71,"max":190},"length":{"min":48,"max":108},"shoulder":{"min":35,"max":69},"sleeve":{"min":46,"max":77},"shortsleeve":{"min":22,"max":51}}},"standard":{"inch":{"s":{"size":"s","neck":15,"chest":41.75,"waist":37,"hip":41,"length":29,"shoulder":17,"sleeve":24.5,"armhole":20.5,"bicep":16,"cuff":9.75,"sleeveshort":9,"cuffshort":14.5,"text":"35-38"},"m":{"size":"m","neck":16,"chest":44.5,"waist":40,"hip":43,"length":29.5,"shoulder":17.5,"sleeve":25.25,"armhole":21.5,"bicep":17,"cuff":10.75,"sleeveshort":9.75,"cuffshort":15,"text":"38-41"},"l":{"size":"l","neck":16.5,"chest":47.5,"waist":44,"hip":45,"length":30,"shoulder":18,"sleeve":25.75,"armhole":22.5,"bicep":18,"cuff":11.25,"sleeveshort":10.75,"cuffshort":15.5,"text":"41-44"},"xl":{"size":"xl","neck":17,"chest":49.5,"waist":46.5,"hip":47.5,"length":31,"shoulder":19.5,"sleeve":26,"armhole":22.5,"bicep":18,"cuff":11.75,"sleeveshort":11.25,"cuffshort":16,"text":"44-46"},"xxl":{"size":"xxl","neck":18,"chest":52,"waist":49,"hip":50,"length":32,"shoulder":20.5,"sleeve":27,"armhole":23.5,"bicep":19,"cuff":12.25,"sleeveshort":11.75,"cuffshort":16.5,"text":"46-48"},"3xl":{"size":"3xl","neck":19,"chest":55,"waist":52,"hip":54,"length":33,"shoulder":22,"sleeve":27.25,"armhole":24.5,"bicep":20.25,"cuff":12.5,"sleeveshort":12,"cuffshort":17,"text":"49-51"},"4xl":{"size":"4xl","neck":20,"chest":58,"waist":55,"hip":56.5,"length":34,"shoulder":23,"sleeve":27.5,"armhole":26,"bicep":21.5,"cuff":12.75,"sleeveshort":12.5,"cuffshort":17.5,"text":"52-54"}},"cm":{"s":{"size":"s","neck":37.5,"chest":106,"waist":94,"hip":104,"length":74,"shoulder":43,"sleeve":62.25,"armhole":52,"bicep":41,"cuff":24.77,"sleeveshort":23,"cuffshort":37,"text":"89-96.5"},"m":{"size":"m","neck":40,"chest":113,"waist":102,"hip":109.5,"length":75,"shoulder":44.5,"sleeve":64,"armhole":55,"bicep":43.5,"cuff":27.31,"sleeveshort":25,"cuffshort":38,"text":"96.5-104"},"l":{"size":"l","neck":42,"chest":121,"waist":112,"hip":114.5,"length":76,"shoulder":46,"sleeve":65.5,"armhole":57,"bicep":46,"cuff":28.58,"sleeveshort":27,"cuffshort":39.5,"text":"104-112"},"xl":{"size":"xl","neck":44,"chest":126,"waist":118,"hip":121,"length":79,"shoulder":49.5,"sleeve":66,"armhole":57,"bicep":46,"cuff":29.85,"sleeveshort":29,"cuffshort":41,"text":"112-117"},"xxl":{"size":"xxl","neck":46,"chest":132,"waist":124.5,"hip":127,"length":81.5,"shoulder":52,"sleeve":69,"armhole":60,"bicep":48.5,"cuff":31.12,"sleeveshort":30,"cuffshort":42,"text":"117-122"},"3xl":{"size":"3xl","neck":48.25,"chest":140,"waist":132,"hip":137,"length":84,"shoulder":56,"sleeve":69.5,"armhole":62.25,"bicep":51.5,"cuff":31.75,"sleeveshort":30.5,"cuffshort":43.25,"text":"125-130"},"4xl":{"size":"4xl","neck":51,"chest":148,"waist":140,"hip":143.5,"length":86.5,"shoulder":58.5,"sleeve":70,"armhole":70,"bicep":55,"cuff":32.39,"sleeveshort":31.75,"cuffshort":44.5,"text":"132-137"}}}};
		publicObject.languageObj = {"size-geneally-range":"generally range from","neck":"Neck","chest":"Chest","waist":"Waist","hip":"Hip","length":"Length","shoulder":"Shoulder","sleeve":"Sleeve","to":"To"};
        publicObject.customer = null;
        publicObject.project = "SHIRT";
        publicObject.product = "SHIRT";
        publicObject.platform = "computer";
        loadObjArr(dataObj);
        loadXml(style, contrast, function () {

            var proStatus = "", fabricPro = "", designIdeaNO = "", preCode = "", preStatid = "", designIdea_arr = [];
            proStatus = "";
            fabricPro = "";
            designIdea_arr = 0;
            preCode = "";
            preStatid = "";

            if (proStatus) {
                if (designIdeaNO) {
                    setDesignIdea(preCode, preStatid, designIdea_arr);
                } else if (fabricPro) {
                    setFabricProDesign(fabricPro);
                }
                setTimeout(function () {
                    $('#buttonPremium').click();
                }, 2000);
            } else if (designIdeaNO) {
                setDesignIdea(preCode, preStatid, designIdea_arr);
            } else if (fabricPro) {
                setFabricProDesign(fabricPro);
            }
            setdefaultDesign();
        });
        processDesignObj.customer.setSize();
        
        var jBannerLeft = ["1.png"];
        var totalBannerLeft = jBannerLeft.length;
        var runBannerLeft = 0;
        var playBannerLeft = function() {
            $('.banner-left > li').removeClass('show');
            
            runBannerLeft++;
            if (runBannerLeft > totalBannerLeft) {
                runBannerLeft = 1;
            }
            
            $('.banner-L-' + runBannerLeft).addClass('show');
        };
        setInterval(playBannerLeft, 5000);
        
        $('#list-language').MayaDropDown();
        $('#pocketStyleSelect').MayaDropDown("1 Pocket");
        $('#FrmBodySize .qty-select-box').MayaDropDown(1);
        $('.FrmMeasurements .qty-select-box').MayaDropDown(1);
        $('.tab-standard-size .size-select-box').MayaDropDown('--');
        $('.selectBox ul').mCustomScrollbar({scrollButtons: {enable: false}, advanced: {updateOnContentResize: true}});
    });
</script>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>	
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $(".").hide();
    });
    $("#bodysize").click(function(){
        $(".bodysizeshow").show();
		$(".standardsizeshow").hide();
    });
	$("#standardsize").click(function(){
        $(".standardsizeshow").show();
		$(".bodysizeshow").hide();
    });
	
});
</script>
<style>
.w70 {
    width: 100%;
}
</style>
</head>
     <body class="user-select" style="background-color:#fff;">
        <div class="container222 ma ofh">
            
            <div id="mainContainer"  style="background-color: #fff;
    color: #066;
    min-height: 680p">
                
                <div id="tab-measurement" class="mainContainer-Layout" style="padding-left: 15px; display: block;">
                    <ul id="tab-measurement-box">
    
<li class="tab-measurement-detail" style=" font-family: ProximaNova;
    font-style: normal;
    line-height: 1.5;">
    <div data-lang="great-choice-select-you-measurement-option" style="text-align: center;font-size: 140%;margin-bottom: 1%;margin-top: 3%;font-weight: 500;" id="strGreatMeasurements">
	Great Choice!  Please Select Your Measurement Option</div>
    <div class="ma">
        <div class="tab tab-border floatL cursor" id="bodysize" style="width: 43%;padding: 2%;font-size: 90%;white-space: 
		normal;border:1px solid #089; background: rgba(235,230,250,.7);text-align: center;min-height: 290px;" data-id="tab-body-size">
            <h1  data-lang="option-body-size" 
			style="text-align: center;margin-bottom: 5%;text-transform: uppercase;font-size: 185%;">Body Size</h1>
            <div data-lang="option-body-size-detail" class="detail">
			Part of the tailor-made experience is getting yourself measured up. With the assistance of our easy-to-follow video measuring guide, get yourself measured up in no time!</div>
            <div class="txtC">
                <span class="arrowDown"></span>
            </div>
            <div class="icon-measurement-tab"><img src="<?php echo $base_url_views; ?>/page_files/Measurement.png" style="display: block; position: absolute; left: 0px; right: 0;margin: auto"></div>
        </div>
        <div class="tab floatR cursor" id="standardsize" data-id="tab-standard-size" style="width: 43%;padding: 2%;font-size: 90%;white-space: normal;border:1px solid #089; background: rgba(235,230,250,.7);text-align: center;min-height: 290px;">
            <h1 style="text-align: center;margin-bottom: 5%;text-transform: uppercase;font-size: 185%;"" data-lang="standard-size">Standard Sizes</h1>
            <div data-lang="standard-size-detail" class="detail">Standard sizes provide an equally amazing fit. Select from an array of sizes from our standard size chart. Enjoy your Tailor-made product with the perfect combination of the right size and your creative style choices!</div>
            <!--<div class="txtC">
                <span class="arrowDown"></span>
            </div>-->
            <div class="icon-measurement-tab"><img src="<?php echo $base_url_views; ?>/page_files/SML.png"></div>
        </div>
        
    </div>
</li>    
  <div class="bodysizeshow" style="display:none">
  
<div class="clear"></div>
        <div class="btn btnBackMeasurements" data-lang="back" data-value="back">Back</div>
    <li class="tab-body-size clear" style="display: list-item;">
        <h1 data-lang="your-body-size">YOUR BODY SIZES</h1>
        <form action="#" id="FrmBodySize" method="post" style=" background: rgba(235, 230, 250, 0.7) none repeat scroll 0 0;
    border: 1px solid #089;
    display: inline-block;
    font-size: 90%;
    padding: 1%;
    width: 96%;">
            <!--<input type="hidden" name="base64">-->
            <input type="hidden" name="type_size" value="Body">
            <div class="w100 clear media ofh">
                <div class="media-img ofh">
                    <img src="<?php echo $base_url_views; ?>page_files/neck.jpg" alt="">

                </div>
                <div class="media-video ofh transition2s"><video width="100%" loop="loop" preload="metadata" autoplay="autoplay" controls="controls" muted><source src="<?php echo $base_url_views; ?>page_files/neck.ogv" type="video/ogg"><source src="<?php echo $base_url_views; ?>page_files/neck.mp4" type="video/mp4"><object data="<?php echo $base_url_views; ?>page_files/neck.swf" type="application/x-shockwave-flash" width="300" height="220"></object><source src="<?php echo $base_url_views; ?>page_files/neck.webm" type="video/webm"></video></div>
            </div>
            <div>
                <div class="clear">
                    <arrow class="arrow"></arrow>
                    <span data-lang="enter-your-measurements-boxes" style="font-size: 90%;">Enter your measurements in the corresponding boxes</span> : <span class="validate-recommend">Neck generally range from <label class="number">9</label> To <label class="number">23</label> inch</span>
                </div>
				<style>
				.tab-body-size .boxSize div.typeInput > div {
    background: rgba(235, 230, 250, 0.7) none repeat scroll 0 0;
    border: 1px solid #089;
    float: left;
    margin: 0.3%;
    padding: 0 0 1.5%;
    position: relative;
    text-align: center;
    width: 10%;
}

.tab-body-size Input {
	width:30%;

}
				</style>
                <div class="boxSize">
                    <div class="typeInput" >
                        <div class="radjun"><span data-lang="neck">Neck</span> <input type="text" data-size="neck" name="sizeNeck" class="border-validate"></div><div><span data-lang="chest">Chest</span> <input type="text" data-size="chest" name="sizeChest"></div><div><span data-lang="waist">Waist</span> <input type="text" data-size="waist" name="sizeWaist"></div><div><span data-lang="hip">Hip</span> <input type="text" data-size="hip" name="sizeHip"></div><div><span data-lang="length">Length</span> <input type="text" data-size="length" name="sizeLength"></div><div><span data-lang="shoulder">Shoulder</span> <input type="text" data-size="shoulder" name="sizeShoulder"></div><div><span data-lang="sleeve">Sleeve</span> <input type="text" data-size="sleeve" name="sizeSleeve"></div><div style="display: none;"><span data-lang="sleeve">Sleeve</span> <input type="text" data-size="shortsleeve" name="sizeShortsleeve"></div>                        <div>
                            <div>
                                <input id="measurement-checkbox-size-type-cm"  type="radio" name="sizeType" value="cm">
                                <label for="measurement-checkbox-size-type-cm">
                                    <span></span>
                                    <lang data-lang="">Cm</lang>
                                </label>
                            </div>
                            <div>
                                <input id="measurement-checkbox-size-type-inch" type="radio" name="sizeType" value="inch" checked="true">
                                <label for="measurement-checkbox-size-type-inch">
                                    <span></span>
                                    <lang data-lang="">Inch</lang>
                                </label>
                            </div>
							
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div>
				<div class="left-boxx" id="typeinputrad" style=" background-color: rgba(244, 244, 200, 0.6);
    border: 1px solid #ccc;
    float: left;
    height: 350px;
    margin-top: 2%;
    padding: 2px 0;
    width: 600px;">
                    <div>
                        <arrow class="arrow"></arrow>
                        <span data-lang="your-fit">Select Your Size</span> : 
                    </div>
                    
                        <input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Regular" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="regular">Regular</lang>
                        </label>
                        <input id="measurement-checkbox-slim-fit" type="radio" name="sizeFit" value="Tailored">
                        <label for="measurement-checkbox-slim-fit">
                            <span></span>
                            <lang data-lang="Tailored">Tailored</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Slim" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="Slim">Slim</lang>
                        </label>
						<div>
                    <div>
                        <arrow class="arrow"></arrow>
                        <span data-lang="your-fit">Select Body Type</span> : 
                    </div>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Broad" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Broad</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Column" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Column</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Oval" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Oval</lang>
                        </label>
						
						 <div>
                        <arrow class="arrow"></arrow>
                        <span data-lang="your-fit">Select Shoulder Type</span> : 
                    </div>
						
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="body-img1" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Average</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="body-img2" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Straight</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="body-img3" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Sloping</lang>
                        </label>
						 <div>
                        <arrow class="arrow"></arrow>
                        <span data-lang="your-fit">Select Shoulder Angle </span> : 
                    </div>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Shoulder1" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Even</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Shoulder2" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Lower Left</lang>
                        </label>
						<input id="measurement-checkbox-standard-fit" type="radio" name="sizeFit" value="Shoulder3" checked="true">
                        <label for="measurement-checkbox-standard-fit">
                            <span></span>
                            <lang data-lang="signature-fit">Lower Right</lang>
                        </label>
                    </div>
					
					<div class="empty-boxx">
					
					</div>
					
                </div>
								
									
            </div>
			<style>
			.desc{
			position:absolute;
	margin-top:2%;
	margin-left:800px;
	
	border: 1px solid #ccc;
	padding:2px 0;
	background-color:rgba(244,244,200,0.6);
			}
			#tab-measurement .btn {
    background: rgba(186, 186, 186, 0.4) none repeat scroll 0 0;
    cursor: pointer;
    display: inline-block;
    font-weight: 500;
    letter-spacing: 0.8px;
    margin-top: 10px;
    padding: 6px 20px;
			</style>
									
									<div id="Regular" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-fit1.jpg">
									</div>
									<div id="Tailored" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-fit2.jpg">
									</div>
									<div id="Slim" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-fit3.jpg">
									</div>
									<div id="Broad" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/broad.png">
									</div>
									<div id="Column" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/column.png">
									</div>
									<div id="Oval" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/oval.png">
									</div>
									<div id="body-img1" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-img1.jpg">
									</div>
									<div id="body-img2" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-img2.jpg">
									</div>
									<div id="body-img3" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-img3.jpg">
									</div>
									<div id="Sholder1" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-should1.jpg">
									</div>
									<div id="Shoulder2" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-should2.jpg">
									</div>
									<div id="Shoulder3" class="desc">
										<img src="<?php echo $base_url_views; ?>page_files/images-stylior/body-should3.jpg">
									</div>
								
			<script>
$(document).ready(function() {
    $("div.desc").hide();
    $("input[name$='sizeFit']").click(function() {
        var test = $(this).val();
        $("div.desc").hide();
        $("#" + test).show();
    });
});
</script>
            <div class="clear">
                <div class="w50 floatL">
                    <div class="btn btnBackMeasurements" data-value="back" data-lang="back">Back</div>
                </div>
                <div class="w50 floatR txtR">
                    <div class="floatR">
                        <label for="btnSubmitFrmBodySize"><span class="btnAdd-to-cart btn" data-lang="add-to-cart">ADD TO CART</span></label>
                        <button style="display: none" id="btnSubmitFrmBodySize" type="button"></button>
                    </div>
                    <div class="floatR" style="margin: 3% 3% 0 0;text-align: left">
                        <span data-lang="quantity">Quantity</span> : 
                        <div  style="height: 25px;border-left: 1px solid rgba(255, 255, 255, 0.5);
    
    font-size: 12px;
    line-height: 20px;
    margin: 0 4px;
    padding: 0 4px;
	width:100px;
   
    right: 0;">
                            <input name="size" value="body" type="hidden">
                            <select name="qty">
                                <option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select>
                        <div class="boxList"><ul class="mCustomScrollbar _mCS_1" style="overflow: hidden; display: none;"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 300px;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;"><li data-val="1">1</li><li data-val="2">2</li></div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul></div></div>
                    </div>
                </div>
            </div>
        </form>
    </li>
	
	
	
     </div>
  
    
	
	 <div class="standardsizeshow" style="display:none">
	
    <li   class="tab-standard-size">
        <h1 data-lang="sizes-chart">Size Chart</h1>
        <!--        <div class="measurement-menu-tab txtC">
                    <div class="w50 floatL cursor" data-id="tab-body-size" data-lang="option-body-size">BODY SIZE</div>
                    <div class="w50 floatL cursor active" data-id="tab-standard-size" data-lang="standard-size">STANDARD SIZE</div>
                </div>-->
				
				<style>
				.tab-standard-size table td {
    border: 1px solid rgba(155, 155, 255, 1);
    padding: 2% 0;
    width: 10%;
}
				</style>
        <form style="display: show; background: rgba(235, 230, 250, 0.7) none repeat scroll 0 0;
    border: 1px solid #089;
    display: inline-block;
    font-size: 90%;
    padding: 1%;
    width: 96%;" action="#" method="post">
            <!--<input type="hidden" name="base64">-->
            <input type="hidden" name="type_size" value="SML">
            <div>
                <arrow class="arrow"></arrow>
                <!--<span>Select Your Size</span> :--> 
                <input id="measurement-checkbox-size-type-cm-2" type="radio" name="sizeType" value="cm">
                <label for="measurement-checkbox-size-type-cm-2">
                    <span></span>
                    <lang data-lang="">Cm</lang>
                </label>
                <input id="measurement-checkbox-size-type-inch-2" type="radio" name="sizeType" value="inch" checked="true">
                <label for="measurement-checkbox-size-type-inch-2">
                    <span></span>
                    <lang data-lang="">Inch</lang>
                </label>
            </div>
            <table class="txtC w100 table-standard-size" id="table-size-inch" style="display: table;">
                                <tbody><tr>
                    <td data-lang="size">Size</td>
                    <td>s</td><td>m</td><td>l</td><td>xl</td><td>xxl</td><td>3xl</td><td>4xl</td>                </tr>
                <tr><td data-lang="neck">Neck</td><td>15</td><td>16</td><td>16.5</td><td>17</td><td>18</td><td>19</td><td>20</td></tr><tr><td data-lang="chest">Chest</td><td>35-38</td><td>38-41</td><td>41-44</td><td>44-46</td><td>46-48</td><td>49-51</td><td>52-54</td></tr>            </tbody></table>
            <table class="txtC w100 table-standard-size" id="table-size-cm" style="display: none;">
                                <tbody><tr>
                    <td data-lang="size">Size</td>
                    <td>s</td><td>m</td><td>l</td><td>xl</td><td>xxl</td><td>3xl</td><td>4xl</td>                </tr>
                <tr><td data-lang="neck">Neck</td><td>37.5</td><td>40</td><td>42</td><td>44</td><td>46</td><td>48.25</td><td>51</td></tr><tr><td data-lang="chest">Chest</td><td>89-96.5</td><td>96.5-104</td><td>104-112</td><td>112-117</td><td>117-122</td><td>125-130</td><td>132-137</td></tr>            </tbody></table>
            <div class="list-option">
                <ul class="list-option-ul">
                    <li>
                    <arrow class="arrow"></arrow>
                    <span style="margin-right: 10px;" data-lang="your-fit">Select Your Size</span>
                    <div>
                        <select name="size">
                            <option value="--">--</option>
                            <option value="S">S</option><option value="M">M</option><option value="L">L</option><option value="XL">XL</option><option value="XXL">XXL</option><option value="3XL">3XL</option><option value="4XL">4XL</option>   </select>
                    <span>--</span><div class="boxList"><ul class="mCustomScrollbar _mCS_2" style="overflow: hidden; display: none;"><div class="mCustomScrollBox mCS-light" id="mCSB_2" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 300px;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;"><li data-val="--">--</li><li data-val="S">S</li><li data-val="M">M</li><li data-val="L">L</li><li data-val="XL">XL</li><li data-val="XXL">XXL</li><li data-val="3XL">3XL</li><li data-val="4XL">4XL</li></div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul></div></div>
                    <span style="margin: 0 10px;" data-lang="quantity">Quantity</span>
                     <div  style="height: 25px;border-left: 1px solid rgba(255, 255, 255, 0.5);
    
    font-size: 12px;
    line-height: 20px;
    margin: 0 4px;
    padding: 0 4px;
	width:100px;
   
    right: 0;">
                            <input name="size" value="body" type="hidden">
                            <select name="qty">
                                <option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								</select>
                    <div class="boxList"><ul class="mCustomScrollbar _mCS_3" style="overflow: hidden; display: none;"><div class="mCustomScrollBox mCS-light" id="mCSB_3" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 300px;"><div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;"><li data-val="1">1</li><li data-val="2">2</li></div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></ul></div></div>
                    <div class="btnAddSize cursor select" data-lang="add-more-size">ADD OTHER SIZES</div>
                    </li>
                </ul>
            </div>
            <div class="clear box-button-submit">
                <div class="w50 floatL">
                    <span class="btn btnBackMeasurements" data-lang="back" data-value="back">Back</span>
                </div>
                <div class="w50 floatR txtR">
                    <label for="btnSubmitFrmSizesChart"><span class="btn btnAdd-to-cart" data-lang="add-to-cart">ADD TO CART</span></label>
                    <button style="display: none" id="btnSubmitFrmSizesChart" type="button"></button>
                </div>
            </div>
        </form>
    </li>
	
</div>
	
	
	
	
	
	
	
	</ul>                </div>
            </div>
        </div>
		<script type="text/javascript" src="<?php echo $base_url_views; ?>page_files/conversion.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/preload.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-LOADING.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-MENU-S.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-MENU-L.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-ADV-SIZE.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-adv-option.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-GETSTYLE.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-PRODESIGN.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-MEASUREMENTS.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-VIEW-ALL-FABRIC.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/JS-POPUP-DESIGN-IDEA.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/main.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/jquery.MayaDropDown.min.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/MayaPopup.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/Animation.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/jquery-ui-1.10.3.custom.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/jquery.imagesloaded.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="<?php echo $base_url_views; ?>page_files/jquery.mousewheel.js"></script>
            
</body>

</div>
<?php include ('includes/footer.php'); ?>
</html>
