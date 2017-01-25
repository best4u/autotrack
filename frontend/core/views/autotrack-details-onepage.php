<pre>
    <?php //var_dump($ocassion); ?>
</pre>
        <div class="overview_gridWrapp">
			<div class="breadCrumbWrapp">
				<div class="centerDiv">
					<div class="breadContent">
						<a href="#"><span>Home</span></a> <span class="arrowBread"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span> <a href="#"><span class="activeBread">Occasions</span></a> <span class="rightBCSpan">Terug naar het overzicht • <a href="#">Print deze pagina</a></span>
					</div>					
				</div>
			</div>

			<div class="leftAndRightWrapp singleItemWrapp">
	        	<div class="centerDiv">				
	        		<div class="leftContent_at">
	        			<div class="detailPage">
		        			<div class="carTitleTop">
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
        								<div class="priceCarItem">€ <?php echo $ocassions_obj->get_car_price($ocassion); ?></div>
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
                                                    <p><span class="leftType"><?php echo $type; ?>: </span> <span class="rightOption"><?php echo $car_option; ?></span></p>
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
								<div class="descOms commDesc">
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
                                        <ul class="commList commDesc">
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
                                            <ul class="commList commDesc">
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
                                            <ul class="commList commDesc">
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
                                            <ul class="commList commDesc">
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
                                            <ul class="commList commDesc">
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

                                    <div class="descAlgemen commDesc">
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

                                                    <div class="descAlgemen commDesc">
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
                                <div class="desvVideo commDesc">
                                    <iframe width="560" height="315" src="<?php echo $ocassion->algemeen->videoUrls[0] ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <?php
                        }

                        ?>
						<hr class="lineAll">

	        			</div>
	        		</div>
                    </div>
                </div>
            </div>




					<!-- sidebar -->
	        		<div class="sidebarContent">
	        			<div class="titleSidebarDetail">
	        				Neem contact met ons op
	        			</div>

	        			<div class="sidebarFilters">
	        				<form action="" class="sidebarForm">
	        					<p>
									<label for="">Uw naam</label>
								</p>
								<p>
									<input type="text" placeholder="John Doe">
								</p>

								<p>
									<label for="">E-mailadres</label>
								</p>
								<p>
									<input type="email" placeholder="johndoe@gmail.com">
								</p>

								<p>

								<p>
									<label for="">Telefoonnummer </label><span class="optionel">(optioneel)</span>
								</p>
								<p>
									<input type="tel" placeholder="+31 0000 000 000">
								</p>
								
								<p>
									<label for="km">Bericht</label>
								</p>
								<p>
									<textarea rows="14"  placeholder="Geef een korte beschrijving van de staat van de auto">Goedendag,
										Ik ben geïnteresseerd in uw 
										VOLVO V40 R-Design T2 122pk 

										Wilt u contact met mij opnemen?

										Met vriendelijke groet,
									</textarea>
								</p>
								
								<p>
									<label for="">Proefrit?</label>
								</p>
								<p>
									<input type="text" placeholder="John Doe">
								</p>

								<p>
									<label for="">Wanneer wilt u de proefrit maken??</label>
								</p>
								<p>
									<input type="text" placeholder="Kies een datum" class="dateInput">
								</p>



								<a href="#" class="button_at1">
									verzenden
								</a>


	        				</form>
	        			</div>
	        		</div>
	        		<!-- end sidebar -->
	        	</div>
        	</div>
        </div>