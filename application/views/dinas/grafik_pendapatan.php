<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('dinas/header', $this->data);
?>
<div class="page-header">
	<h1>Grafik Jumlah Pendapatan</h1>
  <!--content-->

  <div class="col-md-4">

    <form action="<?php echo base_url() ?>Dinas/grafik_pendapatan" method="post">
      <div class="form-group">
        <label for="">Kecamatan</label>
        <select name="kecamatan" class="form-control">
          <?php if (!empty($kecamatan)) { ?>

            <option value="<?php echo $kecamatan ?>">Kecamatan <?php echo $kecamatan ?></option>
          <?php } ?>
          <option value="">Tampilkan Semua</option>
          <option value="adiwerna">Kecamatan Adiwerna</option>
          <option value="balapulang">Kecamatan Balapulang</option>
          <option value="bojong">Kecamatan Bojong</option>
          <option value="bumijawa">Kecamatan Bumijawa</option>
          <option value="dukuhturi">Kecamatan Dukuhturi</option>
          <option value="dukuhwaru">Kecamatan Dukuhwaru</option>
          <option value="jatinegara">Kecamatan Jatinegara</option>
          <option value="kedung banteng">Kecamatan Kedung Banteng</option>
          <option value="kramat">Kecamatan Kramat</option>
          <option value="lebaksiu">Kecamatan Lebaksiu</option>
          <option value="margasari">Kecamatan Margasari</option>
          <option value="pagerbarang">Kecamatan Pagerbarang</option>
          <option value="pangkah">Kecamatan Pangkah</option>
          <option value="slawi">Kecamatan Slawi</option>
          <option value="surodadi">Kecamatan Surodadi</option>
          <option value="talang">Kecamatan Talang</option>
          <option value="tarub">Kecamatan Tarub</option>
          <option value="warurejo">Kecamatan Warurejo</option>

        </select>
      </div>
      <button class="btn btn-success btn-block">Tampilkan</button>
    </form>
  </div>
  <div >
    <div class="container">

      <div class=" con-w3l agileinf">
        <canvas id="myChart"></canvas>


        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--footer-->
  <?php include 'footer.php'; ?>      

  <!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear' 
      };
      */                
      $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!-- //smooth scrolling -->
  <!-- for bootstrap working -->
  <script src="<?php echo base_url() ?>assets/industri/js/bootstrap.js"></script>
  <!-- //for bootstrap working -->
  <script type='text/javascript' src="<?php echo base_url() ?>assets/industri/js/jquery.mycart.js"></script>
  <script type="text/javascript">
    $(function () {

      var goToCartIcon = function($addTocartBtn){
        var $cartIcon = $(".my-cart-icon");
        var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
        $addTocartBtn.prepend($image);
        var position = $cartIcon.position();
        $image.animate({
          top: position.top,
          left: position.left
        }, 500 , "linear", function() {
          $image.remove();
        });
      }

      $('.my-cart-btn').myCart({
        classCartIcon: 'my-cart-icon',
        classCartBadge: 'my-cart-badge',
        affixCartIcon: true,
        checkoutCart: function(products) {
          $.each(products, function(){
            console.log(this);
          });
        },
        clickOnAddToCart: function($addTocart){
          goToCartIcon($addTocart);
        },
        getDiscountPrice: function(products) {
          var total = 0;
          $.each(products, function(){
            total += this.quantity * this.price;
          });
          return total * 1;
        }
      });

    });
  </script>

  <?php   $nama = ''; $pendapatan = '';foreach ($a as $x) {
    $nama = $nama .'"'.$x->name.'",';
    $pendapatan = $pendapatan.$x->pendapatan.',';
  } ?>

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [<?php echo $nama; ?>],
        datasets: [{
          label: '# of Votes',
          data: [<?php echo $pendapatan ?>],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
  <?php
  $this->load->view('footerAdmin', $this->data);


  /* End of file data-hotel.php */
/* Location: ./application/views/data-hotel.php */