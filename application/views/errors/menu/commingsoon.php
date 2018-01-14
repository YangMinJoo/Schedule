<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
  <!-- @plugin: page loading indicator, delete to remove loader -->
  <div class="page-loader" data-toggle="page-loader"></div>

  <a id="#top" href="#content" class="sr-only">Skip to content</a>

  <!-- ======== @Region: #highlighted ======== -->
  <div id="highlighted">
    <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height/screen add the attributes: data-toggle="full-height" data-offset="#header" -->
    <div class="bg-white overlay overlay-inverse overlay-gradient overlay-op-9 text-center px-3 py-5 py-lg-10 flex-valign" data-bg-img="<?php echo asset_url();?>img/img/backgrounds/construction.jpg" data-css='{"background-position": "right bottom"}' data-toggle="full-height">
      <h2 class="text-white display-4 font-weight-bold" data-animate="fadeIn" data-animate-delay="0.2">
        CommingSoon
      </h2>
      <h4 class="text-grey font-weight-normal mb-4" data-animate="fadeIn" data-animate-delay="0.35">
        아직 준비중입니다!
      </h4>
      <div class="countdown countdown-cards w-90 w-lg-50 mx-auto" data-animate="fadeIn" data-animate-delay="0.55" data-countdown="2017/9/15" data-countdown-format='<span class="count p-3 border-faded border-op-3 text-white bg-faded bg-op-1">
        <h2 class="digit">
          %D
        </h2>
        days
      </span>
      <span class="count p-3 border-faded border-op-3 text-white bg-faded bg-op-1">
        <h2 class="digit">
          %-H
        </h2>
        hrs
      </span>
      <span class="count p-3 border-faded border-op-3 text-white bg-faded bg-op-1">
        <h2 class="digit">
          %-M
        </h2>
        mins
      </span>
      <span class="count p-3 border-faded border-op-3 text-white bg-faded bg-op-1">
        <h2 class="digit">
          %-S
        </h2>
        secs
      </span>
      '>
    </div>
    <p class="text-xs text-white mt-3" data-animate="fadeIn" data-animate-delay="0.75"><a href="lemon.macaron.yummy@gmail.com">lemon.macaron.yummy@gmail.com</a></p>
  </div>
</div>
