
    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-item">
            <h4>Echange cash</h4>
            <p>Vous pouvez aussi nous suivre grâce aux réseaux sociaux sociaux suivants</p>
            <ul class="social-icons">
            <li><a href="https://m.facebook.com/Echange-cash-103749911259081/?_rdr"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.linkedin.com/mwlite/in/échange-cash-62b3281a5"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="https://www.instagram.com/echangecash/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://t.me/joinchat/PvWbjxplPl7Xv6wYSRGfFw"><i class="fa fa-telegram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6 footer-item last-item">
            <h4>Partenaires</h4>
            <p><em>Webdevpro</em>: agence de développement de sites web</p>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2020 Financial Business Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=$chk->vd_chk("jquery", "jquery.min.js")?>"></script>
    <script src="<?=$chk->vd_chk("bootstrap/js", "bootstrap.bundle.min.js")?>"></script>
    <script src="<?=$chk->vd_chk("DataTable", "datatables.min.js")?>"></script>
    
    
    <!-- Additional Scripts -->
    <script src="<?=$chk->cp_chk("js", "custom.js")?>"></script>
    <script src="<?=$chk->cp_chk("js", "owl.js")?>"></script>
    <script src="<?=$chk->cp_chk("js", "slick.js")?>"></script>
    <script src="<?=$chk->cp_chk("js", "accordions.js")?>"></script>
    <script src="<?=$chk->cp_chk("js", "config.js")?>"></script>
    <script src="<?=$chk->cp_chk("js", "main.js")?>"></script>
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }  
      
    </script>

  
    <script>
    $(".active").removeClass("active");
    $("#<?=$svf?>").addClass("active");
    </script>

      <script>
        function recup(){
      $.post('<?=$chk->rt()?>providers/data-fetch/get-cmt.php', function(dataGotten){
			$('.owl-testimonials').html(dataGotten);
      $('.owl-testimonials').addClass("owl-testimonials-c");
		})
  }

    $("#cnt").submit(function(e){
    e.preventDefault(); 
    var org = $('#org').val();
		var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#subject').val();
		var message = $('#message').val();
		$.post('<?=$chk->rt()?>providers/executes/mailler.php', {name:name,email:email,message:message, subject:subject, org:org}, function(data, data1, data2, data3){
		$('.msg').html(data);
          if(success && success==1){
          $('#name').val('');
          $('#subject').val('');
		      $('#email').val('');
          $('#message').val('');
          }
		});
          
          setInterval(() => {
               $('.alert').slideUp();
          }, 10000);
          recup();
		return false;
    });
    <?php
          if($_GET['p']=="home"){
    ?>
    $('#cmt').submit(function(e){
		e.preventDefault();
		var org = $('#org').val();
		var name = $('#name').val();
    var email = $('#email').val();
    var job = $('#job').val();
    var message = $('#message').val();
		$.post('<?=$chk->rt()?>providers/executes/send-cmt.php', {name:name,email:email,message:message, job:job, org:org}, function(data, data1, data2, data3){
		$('.response').html(data);
          if(error && error==1){
          $('#name').val('');
          $('#subject').val('');
		      $('#email').val('');
          $('#review').val('');
          }
		});
          
          setInterval(() => {
              recup()
               $('.alert').slideUp();
          }, 3000);
		return false;
	     });


     
      <?php
      }
      ?>
  </script>
<?php
if(isset($svf) && $svf == 'search'){
     ?>
     <script>
     var yes =  $(".yes");
     var no = $(".no");
     
     yes.on("click", function(e){
          e.preventDefault();
          var select = $(".select");
          var selectContainer = $(".select-container");
          select.addClass("act");
          select.slideDown();
          selectContainer.slideDown();
     })

     no.on("click", function(e){
          e.preventDefault();
          var select = $(".select");
          var selectContainer = $(".select-container")
          if(select.hasClass('act')){
          select.removeClass("act");
          
          }
          
          select.slideUp();
          selectContainer.slideUp();
     })

     

     function recup(){
     var org = $('.org').val();
     var name = $('.name').val();
     var select = $(".select");
     
     if(select.hasClass('act')){
          var category = $('.category').val();
     }else{
          var category = "null";
     }

     $.post('<?=$chk->rt()?>providers/data-fetch/get-article.php', {name:name, org:org, category:category}, function(dataG){
          $('.result').html(dataG);
     })
     }
     
     $('.search-form').submit(function(e){
     e.preventDefault();
     recup();
  
     setInterval(() => {
          $('.alert').slideUp();
     }, 3000);
     return false;
});
          </script>
     <?php
} 
?>
  </body>
</html>