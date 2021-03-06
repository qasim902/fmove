

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Property Listing</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li class="active">Property Listing</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->


    <!--Best Deal Properties-->
    <section id="deals" class="padding bg_light">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h2 class="uppercase">Best Deal Properties</h2>
          <p class="heading_space">We are proud to present to you some of the best homes, apartments, offices e.g. across England for affordable prices.</p>
        </div>
      </div>
      
          <?php foreach($viewdata['my_prop'] as $property) {  ?>
    
      <div class="row" style="margin-top:50px;margin-bottom:50px;">
        <div class="col-sm-12">      
         
            <div class="item">
              <div class="media <?php 
              if ($property['is_feat'] == "1")
              {
                echo "fea_dtls";
              }


              ?> deal_media proerty_content">
                <div class="media-left">
                  <a href="property_detail?id=<?php echo $property['prop_id']; ?>">

                  <img class="media-object" src="<?= $assets ?>img/properties/<?php echo $property['prop_id']."/cover.jpg"?>" alt="...">
                  </a>
                </div>
                <div class="media-body">
                  <div  class="pull-right ">
              <?php 
              if ($property['is_feat'] == "1")
              {?>
                <img class="start_tag" src="http://localhost/favmove1/resources/img/favruite.png" alt="property">
              <?php }


              ?>
                   
                  </div>
                  <div class="price <?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> default_clr">
                      
                    <h4>£ <?= $property['price']?> <? if($property['status'] == 'rent') echo "Per Month" ?> - <small><?php if ($property['is_feat'] == "1")
              {
                echo "Featured";
              }
              else if ($property['status'] == "sale")
              {
                echo "For Sale";
              }
              else if ($property['status'] == "rent")
              {
                echo "For Rent";
              }
               else if ($property['status'] == "salag" )
              {
                echo "Sale Agreed";
              }
              else if ($property['status'] == "rentag")
              {
                echo "Rent Agreed";
              }
              else if ($property['status'] == "sold")
              {
                echo "Sold";
              }
              else if ( $property['status'] == "rentd")
              {
                echo "Rented";
              }



              ?> </small></h4>
                  </div>
                  <div class="proerty_text pro_dtl">
                    <h3 class="bottom15"> <a href="property_detail?id=<?php echo $property['prop_id']; ?>"><?= $property['title'] ?></a></h3>
                    <p class="block-with-text">
                      <?= $property['description'] ?>
                    </p>
                  </div>
                  <div class="dealer clearfix">
                    <i class="author"><img width="70" src="<?php echo $assets."img/agency/".$viewdata['agentdata']['agency_id']?>/logo.png" alt="agency"></i>
                    <h4><?= $viewdata['agentdata']['name']?> &nbsp; <small>- Agent</small></h4>
                    <!-- <span><i class="icon-phone4"></i></span><i class="icon-mail-envelope-closed3"></i> -->
                  <span><i class="icon-phone4"></i><?= $viewdata['agentdata']['phone']?></span> 
                      <a href="mailtoagentcontactform"><i class="icon-mail-envelope-closed3"></i></a> 
                    </div>
                  <div class=" favroute clearfix">
                    <p class="pull-md-left"<?= $viewdata['agentdata']['name']?></p>
                    <p class="pull-md-left"><?= $property['address']?> </small></p>
                    <ul class="pull-right">
                      <li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
                    </ul>
                  </div>
                  <div class="<?php if ($property['is_feat'] == "1")
              {
                echo "fea_color";
              }
              else if ($property['status'] == "rent" || $property['status'] == "sale")
              {
                echo "rs_clr";
              }
              else if ($property['status'] == "sold" || $property['status'] == "rentd")
              {
                echo "sdr_clr";
              }
               else if ($property['status'] == "salag" || $property['status'] == "rentag")
              {
                echo "ag_clr";
              }



              ?> property_meta"> 
                    <span><i class="icon-select-an-objecto-tool"></i><?= $property['prop_details']['area']?> sq ft</span>
                    <span><i class="icon-bed"></i><?= $property['prop_details']['bedrooms']?> Bedrooms</span> 
                    <span><i class="icon-safety-shower"></i><?= $property['prop_details']['bathrooms']?> Bedrooms</span> 
                    <span><i class="icon-old-television"></i><?= $property['prop_details']['lounge']?>TV Lounge</span> 
                  </div>
                </div>
              </div>
            </div>
            </div>
      </div>
            <?php } ?>

            
    

        
    </div>
  </section>
  