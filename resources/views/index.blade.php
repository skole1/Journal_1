@extends('layouts.app')

@section('content')
    <div class="site-blocks-cover overlay aos-init aos-animate" style="background-image: url(&quot;images/hero_2.png&quot;); background-position: 50% -25px;" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
            
            <div class="row justify-content-center mb-0">
                <div class="col-md-8 text-center">
                <img src="images/logo.png" data-aos="fade-up" class="mt-3 herologo aos-init aos-animate" width="170px">
                <h1 class="herotext aos-init aos-animate" data-aos="fade-up">Journal Editorial Manager</h1>
                <p data-aos="fade-up" data-aos-delay="100" class="aos-init aos-animate">A Multidisciplinary Journal</p>

                </div>
            </div>

            <div class="form-search-wrap aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <form method="post">
                <div class="row align-items-center">
                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-7">
                        <input type="text" name="key" required="" class="form-control rounded" id="key" placeholder="Keyword, Short Phrase or Author&#39;s Sur Name">
                    </div>
                    
                    <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                        <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                        <input name="year" list="year" class="form-control rounded" placeholder="Year of Publication">
                        <datalist id="year">
                            <option value="2016">
                                </option><option value="2017">
                                </option><option value="2018">
                                </option><option value="2019">
                                </option><option value="2020">
                                </option><option value="2021">
                                </option><option value="2022">
                                </option><option value="2023">
                                </option><option value="2024">
                                </option><option value="2025">
                                </option><option value="2026">
                                </option><option value="2027">
                                </option><option value="2028">
                                </option><option value="2029">
                                </option><option value="2030">
                                </option><option value="2031">
                                </option><option value="2032">
                                </option><option value="2033">
                                </option><option value="2034">
                                </option><option value="2035">
                                </option><option value="2036">
                                </option><option value="2037">
                                </option><option value="2038">
                                </option><option value="2039">
                                </option><option value="2040">
                            </option>
                        </datalist>
                    </div>
                    </div>
                    <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" name="search" class="btn btn-primary btn-block rounded text-white" value="Search">
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>  

    <div class="site-section bg-light pb-3 ">
        <div class="container">
        <div class="overlap-category mb-5">
            <div class="row align-items-stretch no-gutters">
                <div class="row sidebar shadow rounded" style="background-color:white; margin:0px; padding-top:10px; padding-bottom:10px;">
                    <div class="col-md-12">  
                        <p data-aos="fade-up" data-aos-delay="100" class="align-items-stretch justify-content-center p-4 aos-init aos-animate">
                            <span class="font-weight-light text-primary h2">Scope of the Journal</span><br>
                            The Journal targets the most recent topics that will help in disseminating the latest research in the field of Security and Strategic Studies. Authors are encouraged to send all kinds of research articles related to the scope of the journal but not limited to the below topicskinds of research articles related to the scope of the journal but not limited to the below topics...<br>
                            <a href="" class="btn btn-primary rounded shadow text-white mt-3">&gt;&gt; Read more</a>
                            <a href="" class="btn btn-secondary rounded shadow text-white mt-3">
                            <span class="icon-plus"></span>&nbsp; Create account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>









    <!-- ############################## Journal Statistic #####################-->
    <div class="site-section bg-light pt-0">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center  pb-0 mb-0">
                <div class="col-md-7 text-center border-primary pb-0 mb-0">
                    <h2 class="font-weight-light text-primary">Journal Statistics</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-light pb-3 ">
        <div class="container">
            <div class="row justify-content-center mb-0">
                <div class="col-md-7 text-center border-primary">
                    <h2 class="font-weight-light text-primary">Scope of the Journal</h2>
                </div>
            </div>
      
            <div class="overlap-category mb-5">
                <div class="row align-items-stretch no-gutters">
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-3">
                        <a href="?submitall=All" class="popular-category h-100 shadow">
                          <span class="icon"><span class="flaticon-house"></span></span>
                          <span class="caption mb-2 d-block">Published Articles</span>
                          <span style="font-size: 20px" class="number timer count-title count-number" data-to="95" data-speed="2000"></span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-3">
                        <a href="?submitall=All" class="popular-category h-100 shadow">
                            <span class="icon"><span class="flaticon-books"></span></span>
                            <span class="caption mb-2 d-block">Total Downloads</span>
                            <span style="font-size: 20px" class="number timer count-title count-number" data-to="37520" data-speed="2000"></span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-3">
                        <a href="?submitall=All" class="popular-category h-100 shadow">
                        <span class="icon"><span class="flaticon-bunk-bed"></span></span>
                        <span class="caption mb-2 d-block">Active Authors</span>
                        <span style="font-size: 20px" class="number timer count-title count-number" data-to="15" data-speed="2000"></span>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-3">
                        <a href="?submitall=All" class="popular-category h-100 shadow">
                        <span class="icon"><span class="flaticon-pizza"></span></span>
                        <span class="caption mb-2 d-block">Active Reviewers</span>
                        <span style="font-size: 20px" class="number timer count-title count-number" data-to="0" data-speed="2000"></span>
                        </a>
                    </div>
      
        </div>
      </div>




    
    </div>
  </div>
















<!--############################  Achive ######################### -->

 <div class="site-section bg-light p-0">
    <div class="container">


<div class="row sidebar">
    <div class="col-md-6">

<!-- Safety tips widget -->
        <div class="card shadow mb-3" style="text-align: left">
          <div class="card-header"><h4 class="text-primary">Archives</h4></div>
          <div class="card-body">
          <ul style="text-align: left">
          
          
           <li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?vol=Volume%201&amp;num=Number%202"><font color="black"><span class="icon-download"></span>&nbsp;  Volume 1, No. 2 Dec, 2021</font></a></li>

            <li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?vol=Volume%201&amp;num=Number%201"><font color="black"><span class="icon-download"></span>&nbsp;  Volume 1, No. 1 Jun, 2021</font></a></li>

            <br> <br> <br> 
                       
          </ul>
        </div>
        </div>
        </div>
    
    
    <div class="col-md-6">

<!-- Safety tips widget -->
        <div class="card shadow">
          <div class="card-header"><h4 class="text-primary">Explore JoeMan</h4></div>
          <div class="card-body">
          <ul>

<li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?submitall=All" title="Search Alphabetically By Title">
<font color="black"><span class="icon-search"></span>&nbsp;&nbsp;By Title (Alphabetically)<br></font></a></li>

<li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?submitpopular=Popular" title="Search By Most Popular Articles">
<font color="black"><span class="icon-search"></span>&nbsp;&nbsp;By Most Popular Articles<br></font></a></li>

<li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?submitall=All" title="Search By Previous Issues">
<font color="black"><span class="icon-search"></span>&nbsp;&nbsp;By Previous Issues<br></font></a></li>

<li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/?submitall=All" title="Search By Current Issues">
<font color="black"><span class="icon-search"></span>&nbsp;&nbsp;By Current Issues<br></font></a></li>

<li style="list-style-type: none"><a href="https://ngit.com.ng/joeman/completecopy.php" title="Search By Current Issues">
<font color="black"><span class="icon-search"></span>&nbsp;&nbsp;Download the Complete Issue<br></font></a></li>

          </ul>
        </div>
        </div>
        </div>      
    
    
</div>      


    </div>
  </div>
<!-- ############################## Search Alphabetically #####################-->


  <div class="site-section bg-light pt-4">
    <div class="container">

      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Search Alphabetically</h2>
        </div>
      </div>

<div class="row sidebar shadow rounded" style="background-color:white; margin:0px; padding-top:10px; padding-bottom:10px;">
    <div class="col-md-12">  


<font size="5">
<a href="https://ngit.com.ng/joeman/list.php?alphabet=a" style="text-decoration:none" title="All Articles Whose Title start with Letter A">A</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=b" style="text-decoration:none" title="All Articles Whose Title start with Letter B">B</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=c" style="text-decoration:none" title="All Articles Whose Title start with Letter C">C</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=d" style="text-decoration:none" title="All Articles Whose Title start with Letter D">D</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=e" style="text-decoration:none" title="All Articles Whose Title start with Letter E">E</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=f" style="text-decoration:none" title="All Articles Whose Title start with Letter F">F</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=g" style="text-decoration:none" title="All Articles Whose Title start with Letter G">G</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=h" style="text-decoration:none" title="All Articles Whose Title start with Letter H">H</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=i" style="text-decoration:none" title="All Articles Whose Title start with Letter I">I</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=j" style="text-decoration:none" title="All Articles Whose Title start with Letter J">J</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=k" style="text-decoration:none" title="All Articles Whose Title start with Letter K">K</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=l" style="text-decoration:none" title="All Articles Whose Title start with Letter L">L</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=m" style="text-decoration:none" title="All Articles Whose Title start with Letter M">M</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=n" style="text-decoration:none" title="All Articles Whose Title start with Letter N">N</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=o" style="text-decoration:none" title="All Articles Whose Title start with Letter O">O</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=p" style="text-decoration:none" title="All Articles Whose Title start with Letter P">P</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=q" style="text-decoration:none" title="All Articles Whose Title start with Letter Q">Q</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=r" style="text-decoration:none" title="All Articles Whose Title start with Letter R">R</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=s" style="text-decoration:none" title="All Articles Whose Title start with Letter S">S</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=t" style="text-decoration:none" title="All Articles Whose Title start with Letter T">T</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=u" style="text-decoration:none" title="All Articles Whose Title start with Letter U">U</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=v" style="text-decoration:none" title="All Articles Whose Title start with Letter V">V</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=w" style="text-decoration:none" title="All Articles Whose Title start with Letter W">W</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=x" style="text-decoration:none" title="All Articles Whose Title start with Letter X">X</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=y" style="text-decoration:none" title="All Articles Whose Title start with Letter Y">Y</a>&nbsp;|&nbsp;
<a href="https://ngit.com.ng/joeman/list.php?alphabet=z" style="text-decoration:none" title="All Articles Whose Title start with Letter Z">Z</a>
</font>         




  </div>
</div>



    </div>
  </div>






<!-- ############################## Other Links #####################-->

  <div class="site-section bg-white pt-5 pb-5">
    <div class="container">

      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Other Links</h2>
        </div>
      </div>

<div class="row mt-3 justify-content-center">


        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10">
          <a href="https://ngit.com.ng/joeman/authorguide.php">
          <div class="d-block d-md-flex listing text-center">
              <div class="lh-content popular-category">
                <span class="icon mt-3"><span class="icon-edit"></span></span> 
                <hr>
                <span class="category"><span class="icon-edit"></span> Guide to Authors</span>
              </div>
          </div></a>
         </div> 

        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10">
          <a href="https://ngit.com.ng/joeman/faqs.php">
          <div class="d-block d-md-flex listing text-center">
              <div class="lh-content popular-category">
                <span class="icon mt-3"><span class="icon-question"></span></span> 
                <hr>
                <span class="category"><span class="icon-question"></span> FAQs</span>
              </div>
          </div></a>
         </div> 

        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10">
          <a href="https://ngit.com.ng/joeman/authorsay.php">
          <div class="d-block d-md-flex listing text-center">
              <div class="lh-content popular-category">
                <span class="icon mt-3"><span class="icon-bullhorn"></span></span> 
                <hr>
                <span class="category"><span class="icon-bullhorn"></span> Author's Say</span>
              </div>
          </div></a>
         </div> 

        <div class="col-lg-3 col-md-6 col-sm-10 col-xs-10">
          <a href="https://www.quetext.com/" data-toggle="modal" data-target="#ChangePasswordModal">
          <div class="d-block d-md-flex listing text-center">
              <div class="lh-content popular-category">
                <span class="icon mt-3"><span class="icon-search"></span></span> 
                <hr>
                <span class="category"><span class="icon-search"></span> Test Plagiarism</span>
              </div>
          </div></a>
         </div> 


      </div><!-- First row ends-->



   </div>
</div>


<!-- ############################## About the Journal #####################-->

  <div class="site-section bg-light">
    <div class="container">

      <div class="row justify-content-center mb-4">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">About the Journal</h2>
        </div>
      </div>

<div class="row sidebar">
    <div class="col-md-12">
        <div class="">
         


<div class="row">           
<div class="col-md-4">        
<center><a href="https://ngit.com.ng/joeman/images/bookcover.jpg">
<img width="90%" src="./JoeMan_files/bookcover.png" class="shadow mb-3"></a></center>
</div>

<div class="col-md-8"> 
                      
                   <div style="text-align:justify; padding-left: 20px">    
                    

<p><b><i>Journal Editorial Manager (JoeMan)</i></b> 
is published biannually. It seeks to expand knowledge and fosters the exchange of information and ideas among scientists, educationists, engineers, agriculturalists, environmental scientists, professionals, academics, students and staff of research institutions and international agencies.</p>

<p><b>IJoSSS</b> The Journal targets the most recent topics that will help in disseminating the latest research in the field of Security and Strategic Studies. Authors are encouraged to send all kinds of research articles related to the scope of the journal but not limited to the below topics.<br>
<a href="https://ngit.com.ng/joeman/scope.php" class="btn btn-primary rounded shadow text-white mt-3">&gt;&gt; Read more</a>
</p>
          <br>

<h3><strong>ISSN: 2736-0954</strong></h3>

<br>

<ul class="list-inline mt-30">
<li class="list-inline-item"><a class="rounded shadow p-2  btn btn-primary text-white pull-right" href="https://ngit.com.ng/joeman/blog.php">Visit Our Blog</a></li>
<li class="list-inline-item"><a class="rounded shadow p-2 btn btn-secondary text-white pull-right" href="https://ngit.com.ng/joeman/authorlogin.php">Submit Paper</a></li>
</ul>
<br>
</div>




        
</div>            
</div>

          
        </div>
        </div>
</div>






    </div>
  </div>

<!-- ############################## Testimonials #####################-->

  <div class="site-section bg-white">
    <div class="container">

      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Testimonials</h2>
        </div>
      </div>

      <div class="slide-one-item home-slider owl-carousel owl-loaded owl-drag">
        


        
     

      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2220px, 0px, 0px); transition: all 0s ease 0s; width: 5550px;"><div class="owl-item cloned" style="width: 1110px;"><div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="./JoeMan_files/pic.png" alt="Image" class="img-fluid mb-3">
              <p>Musa Salihu</p>
            </figure>
            <blockquote>
              <p>“My work is ready for publication. Any help from the management?.”</p>
            </blockquote>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1110px;"><div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="./JoeMan_files/pic.png" alt="Image" class="img-fluid mb-3">
              <p>Musa Salihu</p>
            </figure>
            <blockquote>
              <p>“My work is ready for publication. Any help from the management?.”</p>
            </blockquote>
          </div>
        </div></div><div class="owl-item active" style="width: 1110px;"><div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="./JoeMan_files/pic.png" alt="Image" class="img-fluid mb-3">
              <p>Musa Salihu</p>
            </figure>
            <blockquote>
              <p>“My work is ready for publication. Any help from the management?.”</p>
            </blockquote>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1110px;"><div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="./JoeMan_files/pic.png" alt="Image" class="img-fluid mb-3">
              <p>Musa Salihu</p>
            </figure>
            <blockquote>
              <p>“My work is ready for publication. Any help from the management?.”</p>
            </blockquote>
          </div>
        </div></div><div class="owl-item cloned" style="width: 1110px;"><div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="./JoeMan_files/pic.png" alt="Image" class="img-fluid mb-3">
              <p>Musa Salihu</p>
            </figure>
            <blockquote>
              <p>“My work is ready for publication. Any help from the management?.”</p>
            </blockquote>
          </div>
        </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><span class="icon-keyboard_arrow_left"></span></div><div class="owl-next"><span class="icon-keyboard_arrow_right"></span></div></div><div class="owl-dots disabled"><div class="owl-dot active"><span></span></div></div></div>
    </div>
  </div>


@endsection