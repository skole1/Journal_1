<header class="site-navbar container py-0 bg-white" role="banner">

    <!-- <div class="container"> -->
      <div class="row align-items-center">

        <div class="col-6 col-xl-2">
          <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Classy<span class="text-primary">Ads</span>  </a></h1>
        </div>
        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="#"><strong>{{ $today->toDayDateTimeString('M d Y') }}</strong></a></li>
              <li><a href="#">Author's Guide</a></li>
              <li class="has-children">
                <a href="#">Journals</a>
                <ul class="dropdown">
                    <li><a href="listings.html">Editorial Board</a></li>
                    <li><a href="listings.html">Indexing Board</a></li>
                </ul>
              </li>


              <li><a href="#" class="cta"><span class="bg-primary text-white rounded">Back</span></a></li>
              <li><a href="#" class="cta"><span class="bg-primary text-white rounded">Logout</span></a></li>
            </ul>
          </nav>
        </div>

        <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
          <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
        </div>

      </div>
    <!-- </div> -->
  </header>

