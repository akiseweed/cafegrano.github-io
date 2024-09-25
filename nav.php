<?php $url = $_SERVER['REQUEST_URI']; $rl= explode("/", $url);?>
<nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light navbar-fixed-top" id="ftco-navbar">
      <div class="container">
       <a href="index" class="m-0 p-0"><img src="images/logo-company.png" width="100%" height="55px"></a>
        <button class="navbar-toggler text-success" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu text-success"></span>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index" class="nav-link"><span class="btn btn-sm"><b class="<?=$rl[2]=='index' ? 'text-success' : '';?>">Home</b></span></a></li>
            <li class="nav-item  dropdown">
              <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="btn btn-sm"><b class="<?=$rl[2]=='beansandpulses' ? 'text-success' : ($rl[2]=='superfoods' ? 'text-success' : ($rl[2]=='spices' ? 'text-success' : ''));?>">Products</b></span></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="beansandpulses">Beans and pulses</a>                
                <a class="dropdown-item" href="superfoods">Superfoods</a>
                <a class="dropdown-item" href="spices">Spices</a>
                <!--a class="dropdown-item" href="olive">Olives</a-->
              </div>
            </li>
            <li class="nav-item"><a href="contact" class="nav-link"><span class="btn btn-sm"><b class="<?=$rl[2]=='contact' ? 'text-success' : '';?>">Contact</b></span></a></li>
              <li class="nav-item"><a class="nav-link" href="https://api.whatsapp.com/send?phone=51940652321
"><span class="btn btn-success btn-sm"><i class="icon-whatsapp"></i> Whatsapp</span></a></li>
          </ul>
        </div>
      </div>
    </nav>