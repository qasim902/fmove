

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Agent List</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center ">
          <li><a href="#">Home</a></li>
          <li class="active">Agent List</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- Agent Start -->
<section id="agent-2" class="padding_top padding_bottom_half">
  <div class="container">
    <div class="row">
      <?php foreach($viewdata as $agent) {?>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets."img/agents/".$agent['id']."/prof.jpg" ?>" alt="Agents">
            <div class="img-info">
              <h3><?= $agent['agent']['name']?></h3>
              <span><?= $agent['agency']['name']?></span>
              <p class="top20 bottom30"><?= $agent['agent']['description'] ?></p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right"><?= $agent['agency']['phone'] ?></td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#."> <?= $agent['agent']['email']?></a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_detail?id=<?= $agent['agent']['id']?>">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    <!--   <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets ?>img/agent-two.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.php">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets ?>img/agent-three.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.php">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets ?>img/agent-four.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="javascript:void(0)">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets ?>img/agent-five.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.php">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4 bottom40">
        <div class="agent_wrap">
          <div class="image">
            <img src="<?= $assets ?>img/agent-six.jpg" alt="Agents">
            <div class="img-info">
              <h3>Bohdan Kononets</h3>
              <span>sales executive</span>
              <p class="top20 bottom30">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer.</p>
              <table class="agent_contact table">
                <tbody>
                  <tr class="bottom10">
                    <td><strong>Phone:</strong></td>
                    <td class="text-right">(+01) 34 56 7890</td>
                  </tr>
                  <tr>
                    <td><strong>Email Adress:</strong></td>
                    <td class="text-right"><a href="#.">bohdan@castle.com</a></td>
                  </tr>
                </tbody>
              </table>
              <hr>
              <a class="btn-more" href="agent_profile.php">
              <i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i><span>Full Profile</span><i><img alt="arrow" src="<?= $assets ?>img/arrow-yellow.png"></i>
              </a>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- Agent End -->
