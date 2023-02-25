  <section id="banner">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/A.jpg" alt="" />
                <div class="flex-caption">
                    <h3>innovation</h3> 
          <p>We create the opportunities</p> 
           
                </div>
              </li>
              <li>
                <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/B.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Specialize</h3> 
          <p>Success depends on work and process.......</p> 
           
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 
  </section> 
  <section id="call-to-action-2">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Partner with Business Leaders</h3>
          <p>We provide geniune opportunities who are in need. And there are no fake calls as all are filtered.
             Development of successful, long term, strategic relationships between 
             customers and suppliers, based on achieving best practice and sustainable 
             competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers 
             to achieve shared organisational objectives.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content">
  
  
  <div class="container">
        <div class="row">
      <div class="col-md-12">
        <div class="aligncenter"><h2 class="aligncenter">Company</h2><!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt.. --></div>
        <br/>
      </div>
    </div>

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks fa fa-building-o"></i>
                <div class="info-blocks-in">
                    <h3><?php echo $company->COMPANYNAME;?></h3>
                    <!-- <p><?php echo $company->COMPANYMISSION;?></p> -->
                    <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                    <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                </div>
            </div>

    <?php } ?> 
  </div>
  </section>
  
  <section class="section-padding gray-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h2 >Popular Jobs</h2>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 ">
          <?php 
            $sql = "SELECT * FROM `tblcategory`";
            $mydb->setQuery($sql);
            $cur = $mydb->loadResultList();

            foreach ($cur as $result) {
              echo '<div class="col-md-3" style="font-size:15px;padding:5px">* <a href="'.web_root.'index.php?q=category&search='.$result->CATEGORY.'">'.$result->CATEGORY.'</a></div>';
            }

          ?>
        </div>
      </div>
 
    </div>
  </section>    
  <section id="content-3-10" class="content-block data-section nopad content-3-10">
  <div class="image-container col-sm-6 col-xs-12 pull-left">
    <div class="background-image-holder">

    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6 col-xs-12 content">
        <div class="editContent">
          <h3>Our Team</h3>
        </div>
        <div class="editContent"  style="height:235px;">
          <p> 
          &nbsp;&nbsp;Our "one team" attitude breaks down and helps us engage equally effectively to the front line. Our collaborative working style emphasizes teamwork, trust, and tolerance for diverging opinions. People tell us we are down-to-earth, approachable and fun.<br/><br/>

          &nbsp;&nbsp;We have a passion for our clients' true results and a pragmatic drive for action that starts Monday morning 8am and doesn't let up. We rally clients with our infectious energy, to make change stick.<br/><br/>

          &nbsp;&nbsp;And we never go it alone. We support and are supported to develop our own personal results stories. We balance challenging and co-creating with our clients, building the internal capabilities required for them to create repeatable results. </p>
        </div> 
      </div>
    </div><!-- /.row-->
  </div><!-- /.container -->
</section>
  
  <div class="about home-about">
        <div class="container">
            
            <div class="row">
              <div class="col-md-4">
                <!-- Heading and para -->
                <div class="block-heading-two">
                  <h3><span>8 Soft Skills to Develop That Every Recruiter Looks For</span></h3>
                </div>
                <ol>
                <li>Begin by determining what you like to do.</li>
                  <li> Carry out a SWOT analysis. </li>
                  <li>Carry out a thorough market research. </li>
                  <li> Choose the prospective fields and industry for work. </li>
                  <li> Carry your skills with experience. </li>
                  <li> Get required trainings and education in the career of your choice. </li>
                  <li>Be optimistic.</li>
                  <li>There are much more points but to say moreover is always stay hunger.</li>
                </ol>
              </div>
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Latest News And Carrer Advice</span></h3>
                </div>    
                <!-- Accordion starts -->
                <div class="panel-group" id="accordion-alt3">
                 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
                  <div class="panel"> 
                  <!-- Panel heading -->
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
                      <i class="fa fa-angle-right"></i> Why are you the best person for the job?"
                      </a>
                    </h4>
                   </div>
                   <div id="collapseOne-alt3" class="panel-collapse collapse">
                    <!-- Panel body -->
                    <div class="panel-body">
                    "As a salesperson, I like to help people by introducing them to the right products. I am the best person for your company as I truly believe that you provide the best solutions to their target audience. I, being a user of your ABC product, believe in the value of your company and that you deliver what you promise. I align with your company's values and as a user of your products, I am sure I will be the best possible candidate for the position as I will be helping clients with utmost honesty."
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
                      <i class="fa fa-angle-right"></i> How to Prepare for Campus Placements?
                      </a>
                    </h4>
                   </div>
                   <div id="collapseTwo-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    Many students do not take campus placement preparations too seriously. However, for most this proves to be a big mistake.

                    We hope that you are not amongst those!

                    Campus placement has generally have the following stages.
                    
                    <ul>
                    <li>Skill assessment test</li>
                    <li>Group discussion</li>
                    <li>Panel interview round</li>
                    <li>Technical test</li>
                    <li>General HR round</li>
          </ul>
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
                      <i class="fa fa-angle-right"></i> The Rise of Remote Jobs in India
                      </a>
                    </h4>
                   </div>
                   <div id="collapseThree-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    The rise of technology had already brought the possibility of working remotely to the forefront, however with the COVID 19 pandemic, the WFH culture literally became a norm for almost every firm.

                    While most of the companies were at first a bit apprehensive about the same, shifting the workforce to the work from home model is largely turning out to be quite an effective way of working.

                    With the present SOPs in line, most companies have already a plan in place to manage remote jobs in the most effective manner.

                    The concept of remote jobs has also lowered the financial burden on companies as the office costs have dropped, the annual cost of maintaining office entities have gone down, the electricity bills have fallen & many smaller costs have also lowered.

                    Recently Tata Consulting Services, India’s largest infotech and outsourcing company with approximately 450,000 employees, reported that it would move 75 percent of its employees to work from home permanently by 2025.

                    The above is one such example of how even big firms across India are considering work from home as a reliable option.
                    </div>
                   </div>
                  </div>
                  <div class="panel">
                   <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
                      <i class="fa fa-angle-right"></i> How to Find an Alternative Earning Opportunity When Unemployed
                      </a>
                    </h4>
                   </div>
                   <div id="collapseFour-alt3" class="panel-collapse collapse">
                    <div class="panel-body">
                    
                    <ol>
                      <li>Opt for freelance</li> 
                      <li>Start Tutoring</li>
                      <li>Start your own small projects</li>
                      <li>Work on upskilling yourself</li>
                      <li>Opt for consultation jobs</li>
                  
                    </ol>
                    <p>Stay safe and All the Best!</p>
                     
                    </div>
                   </div>
                  </div>
                </div>
                <!-- Accordion ends -->
                
              </div>
              
              <div class="col-md-4">
                <div class="block-heading-two">
                  <h3><span>Testimonials</span></h3>
                </div>  
                     <div class="testimonials">
                    <div class="active item">
                      <blockquote><p>Placers has been a key resource for our recruitment efforts since 2022. Our main requirements are in the IT domain and it has been a very effective tool for us to find candidates. Their database of active jobseekers is the best in the region.</p></blockquote>
                      <div class="carousel-info">
                      <!-- <img alt="" src="img/team4.jpg" class="pull-left"> -->
                      <!-- <div class="pull-left">
                        <span class="testimonials-name">Marc Cooper</span>
                        <span class="testimonials-post">Technical Director</span>
                      </div> -->
                      </div>
                    </div>
                  </div>
              </div>
              
            </div>
            
                        
             
            <br>
           
            </div>
            
          </div>