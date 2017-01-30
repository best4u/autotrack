<?php
$text_color = get_option("at_font_color");
$atribute_label_color = get_option("at_attribute_label");
$atribute_value_color = get_option("at_attribute_value");
$header_color = get_option("at_header_color");
$button_color = get_option("at_button_color");
$price_color = get_option("at_price_color");
?>
<style>
    .text_color{
        color: <?php echo $text_color; ?> !important;
    }


    .atribute_label_color{
        color: <?php echo $atribute_label_color; ?> !important;
    }
    .atribute_value_color{
        color: <?php echo $atribute_value_color; ?> !important;
    }


    .header_color{
        color: <?php echo $header_color; ?> !important;
    }


    .button_color{
        background-color: <?php echo $button_color; ?> !important;
    }


    .price_color{
        color: <?php echo $price_color; ?> !important;
    }
</style>

<pre>
<!--    --><?php //var_dump($ocassion); ?>
</pre>
        <div class="overview_gridWrapp">

			<div class="leftAndRightWrapp singleItemWrapp">
	        	<div class="centerDiv">
	        		<div class="leftContent_at">
	        			<div class="detailPage">
		        			<div class="carTitleTop header_color">
                                <?php echo $ocassions_obj->get_car_name($ocassion); ?>
		        			</div>

							<div class="sliderAndDesc">
								<div class="leftSlideBlock">
									<div class="fotorama"  data-nav="thumbs" data-allowfullscreen="true">
                                        <?php
                                        foreach($ocassions_obj->get_all_images($ocassion) as $foto){
                                            ?>
                                            <a href="<?php echo $foto?>"><img src="<?php echo $foto?>" width="75" height="75"></a>
                                            <?php
                                        }
                                        ?>
									</div>
								</div>

								<div class="rightDescBlock">
									<div class="priceandLogo">
        								<div class="priceCarItem price_color">€ <?php echo $ocassions_obj->get_car_price($ocassion); ?></div>
        								<div class="logoCarItem">
                                            <img src="<?php echo plugins_url("img/NAP_Logo.jpg",__FILE__) ?>" alt="">
        								</div>
        							</div>

        							<div class="detailDesc">
        								<div class="leftDetailDesc">
                                            <?php

                                            foreach($ocassions_obj->get_sumary_detail_attr($ocassion) as $key => $option)
                                            {
                                                foreach($option as $type =>  $car_option)
                                                {
                                                    ?>
                                                    <p><span class="leftType atribute_label_color"><?php echo $type; ?>: </span> <span class="rightOption atribute_value_color"><?php echo $car_option; ?></span></p>
                                                    <?php
                                                }

                                            }
                                            ?>
        								</div>
        							</div>
								</div>
							</div>

							<div class="omschriving">
								<div class="titleOms commTitle26">
									Omschrijving
								</div>
								<div class="descOms commDesc text_color">
                                        <?php
                                        echo str_replace(".",".<br>",$ocassion->mededelingen);
                                        $description = explode(".",$ocassion->mededelingen);
                                        ?>
								</div>
							</div>

							<hr class="lineAll">

							<div class="optionsAccesories">
								<div class="optAccTitle commTitle26">
									Opties en Accessoires
								</div>

								<div class="descOptAcc">

                                <!--    Veiligheid category-->
                                    <?php
                                    $options_accessories = $ocassions_obj->get_car_safety_attr("188c3d8d-cbb6-4916-ab1b-32796e618c5c",$ocassion);
                                    if(count($options_accessories) > 0){
                                        ?>
                                    <div class="optieAccItem">
                                        <div class="titleOptieAcc commTitleBlue">
                                            Veiligheid
                                        </div>
                                        <ul class="commList commDesc text_color">
                                            <?php
                                            foreach($options_accessories as $option){
                                                ?>
                                                <li><?php echo $option; ?></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                        <?php
                                    }
                                    ?>

                                <!--       Exterieur category      -->
                                    <?php
                                    $options_accessories = $ocassions_obj->get_car_safety_attr("4121e7b2-af4c-432b-97de-9bec8b97e31a",$ocassion);
                                    if(count($options_accessories) > 0){
                                        ?>
                                        <div class="optieAccItem">
                                            <div class="titleOptieAcc commTitleBlue">
                                                Exterieur
                                            </div>
                                            <ul class="commList commDesc text_color">
                                                <?php
                                                foreach($options_accessories as $option){
                                                    ?>
                                                    <li><?php echo $option; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                    <!--       Veiligheid en Techniek category      -->
                                    <?php
                                    $options_accessories = $ocassions_obj->get_car_safety_attr("f9eb02f8-8f59-4272-99d4-eeacb98e1d92",$ocassion);
                                    if(count($options_accessories) > 0){
                                        ?>
                                        <div class="optieAccItem">
                                            <div class="titleOptieAcc commTitleBlue">
                                                Veiligheid en Techniek
                                            </div>
                                            <ul class="commList commDesc text_color">
                                                <?php
                                                foreach($options_accessories as $option){
                                                    ?>
                                                    <li><?php echo $option; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                    <!--       Audio / Telefonie category      -->
                                    <?php
                                    $options_accessories = $ocassions_obj->get_car_safety_attr("a826980c-9064-4e33-800a-7ace75e182ae",$ocassion);
                                    if(count($options_accessories) > 0){
                                        ?>
                                        <div class="optieAccItem">
                                            <div class="titleOptieAcc commTitleBlue">
                                                Audio / Telefonie
                                            </div>
                                            <ul class="commList commDesc text_color">
                                                <?php
                                                foreach($options_accessories as $option){
                                                    ?>
                                                    <li><?php echo $option; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <?php
                                    }
                                    ?>

                                    <!--       Interieur en Comfort      -->
                                    <?php
                                    $options_accessories = $ocassions_obj->get_car_safety_attr("de6c3b5f-4abf-4c70-afb1-1642953fa2e6",$ocassion);
                                    if(count($options_accessories) > 0){
                                        ?>
                                        <div class="optieAccItem">
                                            <div class="titleOptieAcc commTitleBlue">
                                                Interieur en Comfort
                                            </div>
                                            <ul class="commList commDesc text_color">
                                                <?php
                                                foreach($options_accessories as $option){
                                                    ?>
                                                    <li><?php echo $option; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>

                                        <?php
                                    }
                                    ?>

								</div>
							</div>

							<hr class="lineAll">

							<div class="specificatiesBlock">
								<div class="titleSpecificaties commTitle26">
									Specificaties
								</div>
                                <div class="descSpecificaties">
                                    <div class="algemenTitle commTitleBlue">

                                    </div>

                                    <div class="descAlgemen commDesc text_color">
                                        <div class="commLeftSpecific">

                                <?php
                                $category = "";
                                foreach($ocassions_obj->get_details_total_attr($ocassion) as $key => $options){

                                            foreach($options as $key => $option)
                                            {
                                                if($key != $category){
                                                $category = $key;
                                                ?>
                                                        </div>
                                                    </div>

                                                    <hr class="lineAll">
                                                </div>
                                                <div class="descSpecificaties">
                                                    <div class="algemenTitle commTitleBlue">
                                                        <?php
                                                        $spited_title = preg_split('/(?<=\\w)(?=[A-Z])/', $category);
                                                        $count = 0;
                                                        foreach($spited_title as $title){
                                                            if($count == 0){
                                                                if($title == "geschiedenis"){
                                                                    echo "Geschiedenis van deze auto";
                                                                }else{
                                                                    echo ucfirst($title)." ";
                                                                }
                                                            }else{
                                                                echo strtolower($title)." ";
                                                            }

                                                            $count++;
                                                        }

                                                        ?>
                                                    </div>

                                                    <div class="descAlgemen commDesc text_color">
                                                        <div class="commLeftSpecific between">

                                                            <?php
                                                }
                                                foreach($option as $type =>  $car_option)
                                                {
                                                    ?>
                                                   <p> <span class="leftDescSpan"><?php echo $type; ?>: </span> <span class="rightDescSpan"><?php echo $car_option; ?></span></p>
                                                   <?php
                                                }
                                            }
                                }

                                ?>
							</div>
                             <hr class="lineAll">
                        <?php

                        if(count($ocassion->algemeen->videoUrls) > 0){
                            ?>
                            <div class="videoPart">
                                <div class="titleVideo commTitle26">
                                    Video
                                </div>
                                <div class="desvVideo commDesc text_color">
                                    <iframe width="560" height="315" src="<?php echo $ocassion->algemeen->videoUrls[0] ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <?php
                        }

                        ?>

	        			</div>
	        		</div>
                    </div>
                </div>
            </div>

					<!-- sidebar -->
                    <div class="sidebarContent">
                        <div class="concatFormText" style="display: none">Goedendag,
Ik ben geïnteresseerd in uw
<?php echo $ocassions_obj->get_car_name($ocassion); ?>
Wilt u contact met mij opnemen?
Met vriendelijke groet,
                        </div>
                        <?php
                        $sidebar_blocks = get_option('at_sidebar_blocks');
                        $sidebar_blocks = json_decode($sidebar_blocks);
                        $sidebar_blocks = object_to_array($sidebar_blocks);
                        ?>

                        <?php foreach($sidebar_blocks as $block): ?>
                            <?php
                            if($block['name'] == "Contactformulier" && $block['state'] == "1"){
                                $at_form_short_code = get_option('at_form_short_code');
                                ?>

                                <!--======================== Contact form  block =========================-->
                                <div class="titleSidebarDetail">
                                    Neem contact met ons op
                                </div>
                                <?php echo do_shortcode($at_form_short_code); ?>
                                <!--======================== End contact form block =========================-->


                                <?php
                            }elseif($block['name'] == "Social Media Informatie" && $block['state'] == "1"){
                                ?>

                                <!--======================== Social media  block =========================-->
                                <hr class="lineAll">

                                <p>
                                    <label for="" class="bigLabel">Deel deze tweedehands auto</label>
                                </p>
                                <?php
                                $socials = get_option('at_social_icons');
                                $socials = json_decode($socials);

                                ?>
                                <p>
                                    <?php
                                    foreach($socials as $item):
                                        if($item->url != ""){
                                            ?>
                                            <span class="socialIcons"><a href="<?=$item->url ?>">
                                                    <img src="<?=$item->icon_url ?>" alt="<?=$item->alt ?>">
                                                </a></span>
                                            <?php
                                        }
                                    endforeach;
                                    ?>
                                </p>

                                <!--======================== End social media  block =========================-->

                                <?php
                            }elseif($block['name'] == "Contactinformatie" && $block['state'] == "1"){
                                ?>
                                <!--======================== Contact info block =========================-->

                                <div class="contactInfo">
                                    <hr class="lineAll">
                                    <?php
                                    $contact_info = get_option('at_contact_info');
                                    echo $contact_info;
                                    ?>
                                </div>

                                <!--======================== End contact info block =========================-->
                                <?php
                            }elseif($block['name'] == "Openingstijden" && $block['state'] == "1"){
                                ?>
                                <hr class="lineAll">
                                <p>
                                    <label for="" class="bigLabel">Openingstijden</label>
                                </p>
                                <table cellspacing="1" cellpadding="1">
                                    <tbody>
                                    <tr>
                                        <td></td>
                                        <td><strong></strong></td>
                                        <td><strong></strong></td>
                                    </tr>
                                    <?php
                                    $shedule = get_option('at_shedule');
                                    $shedule_days = json_decode($shedule);
                                    ?>
                                    <?php foreach($shedule_days as $day): ?>
                                        <tr>
                                            <td><strong><?=$day->day ?></strong></td>
                                            <td><?=$day->time1->from ?> – <?=$day->time1->to ?></td>
                                            <td>
                                                <?php
                                                if(isset($day->time2)){
                                                    echo $day->time2->from." - ".$day->time2->to;
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <?php
                            }
                            ?>
                        <?php endforeach; ?>

                    </div>
					</div>

	        		<!-- end sidebar -->
	        	</div>
        	</div>
        </div>
