    <footer class="footer">
      <div class="wrapper">
        <div class="content">
          <div class="col">
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/movies" title="فیلم‌های ایرانی و خارجی">فیلم‌های ایرانی و خارجی</a></li>
              <li><a href="<?php echo get_site_url(); ?>/music" title="موسیقی">موسیقی</a></li>
              <li><a href="<?php echo get_site_url(); ?>/apps" title="برنامه‌های کاربردی">برنامه‌های کاربردی</a></li>
            </ul>
          </div>
          <div class="col">
            <ul>
              <li><a href="<?php echo get_site_url(); ?>/movies/TopMovies" title="۲۵۰ فیلم برتر از نگاه IMDB">۲۵۰ فیلم برتر از نگاه IMDB</a></li>
              <li><a href="<?php echo get_site_url(); ?>/movies/Oscars" title="لیست جوایز اسکار">لیست جوایز اسکار</a></li>
              <li><a href="<?php echo get_site_url(); ?>/movies/GoldenGlobes" title="لیست کاندیداها و برندگان گلدن گلوب">لیست جوایز گلدن گلوب</a></li>
            </ul>
          </div>
          <div class="col logo">
            <div class="dev">
              <a href="<?php echo get_site_url(); ?>" title=""><img width="120" height="17.61" src="<?php bloginfo('template_url'); ?>/assets/img/logo-white.png" alt="AirMax.ir"></a>
              <a href="https://hosseinkarami.com" class="author" title="طراحی سایت" target="_blank">طراحی: حسین کرمی</a>
              <p>بندرعباس، ایـران &copy;&nbsp;۱۳۹۵</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/scripts.min.js"></script>
    <script>
      $(document).ready(function(){
        $("body").addClass("loaded");
    });
      setTimeout(function () {
        if(document.getElementsByTagName("body")[0].className.indexOf("loaded") === -1) document.getElementsByTagName("body")[0].className += " loaded";
     } , 2000);    
    </script>
  </body>
</html>