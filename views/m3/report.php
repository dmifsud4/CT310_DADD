<?php
echo Form::open(array('action' => 'm3/report', 'method' => 'post'));
?>

<style>
        .scroll-box {
            overflow-y: scroll;
            height: 100px;
        }
</style>

<div class="container">

<div class="row p-4 text-center">
  <div class="col">
    <div class="btn-group border rounded border-dark">
  <button type="button" class="btn btn-light active" id="main">Main</button>
  <button type="button" class="btn btn-light" id="sa">Saftey</button>
  <button type="button" class="btn btn-light" id="cl">Clinical Care</button>
  <button type="button" class="btn btn-light" id="ef">Efficiency</button>
  <button type="button" class="btn btn-light" id="hc">HCAHPS</button>
    </div>
  </div>
</div>



<div class="row inner" id="main1">
  <div class="col-7">
    <div class="card shadow">
    <div class="card-body">
    <button type="button" class="btn btn-light" id="whatif">Model Senario</button>
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>Base Medicare Reimbursement:</th>
          <td><input name="baseR" id="bmr" value="<?php echo $hospital['calc']['bmr'] ?>"></td>
        </tr>
        <tr>
          <th>VBP Bonus/Penalty:</th>
          <td id="vbp"><?php echo $hospital['calc']['vbp'] ?></td>
        </tr>
        <tr>
          <th>Adjusted Medicare Reimbursement:</th>
          <td id="amr"><?php echo $hospital['calc']['amr'] ?></td>
        </tr>
      </table>
    </div>
    </div>
  </div>
  </div>

  <div class="col">
      <div class="card shadow">
    <div class="card-body">
      <h4 class="card-title">Currently Selected Hospital</h4>
      <p class="card-text">
      <?php echo $hospital['name'] ?><br>
      <?php echo $hospital['addr'] ?> <br>
      <?php echo $hospital['city'].", ".$hospital['state'].", ".$hospital['zip'] ?><br>
      Provider Number: <?php echo $hospital['id'] ?>
      </p>
      <div>Select another hospital below</div>
      <?php echo Form::input('form', '', array('class' => 'form-control input-sm', 'id' => 'myInput', 'placeholder' => 'Search...')); ?>
      <?php
      $columns = array('id', 'name');
      $result = DB::select_array($columns)->from('hospitals')->execute();



      //echo Form::select('form', null, $options, array('name'=>'pn', 'id'=>'pn', 'size' => 5));


      ?>

      <div id="form"></div>

      <table style="width:30%">
        <tr>
          <td>PN</td>
          <td>Name</td>
        </tr>
      </table>

      <div class="scroll-box">
        <table class="small table-striped table-bordered" id="pn2">



      <?php
      foreach ($result as $pn) {
        echo '<tr>';
        echo '<td><a id="'.$pn['id'].'" href="#">'.$pn['id'].'  '.$pn['name'].'</td></a>';
        echo '</tr>';
      }
        echo Form::close();
       ?>
    </table>

    </div>
      <script>
$(document).ready(function(){

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#pn2 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $( "table tr td a" ).click(function() {



  var input = $("<input>")
                 .attr("type", "hidden")
                 .attr("name", "pn").val($(this).attr('id'));
  $('#form').append(input);
  $('form').submit()

  });


});

</script>
  </div>
</div>

  </div>
</div>

<?php

foreach ($domains as $dkey => $domain) {
echo '<div class="row inner" id="'.$dkey.'1">
  <div class="col">
    <div class="table-responsive-sm">
    <table class="table table-bordered table-striped table-hover text-center shadow">
      <tr>
        <th colspan="9" style="text-align:center;">'.$domain['name'].' Statistics</th>
      </tr>
      <tr>';
      echo "<th>Measures</th>";
      if ($dkey == "hc") {
        echo "<th>Floor</th>";
      }
        foreach($headers as $header) {
          echo "<th>".$header."</th>";
        }
        if ($dkey == "hc") {
          echo "<th>Dimension Score</th>";
        } else {
          echo "<th>Measure Score</th>";
        }
        echo "</tr>";
        foreach ($domain['measures'] as $mkey => $measure) {
          echo "<tr>";
          echo "<th>".$measure['name']."</th>";
          if ($dkey == "hc") {
            echo '<td id="'.$mkey.'_fl">'.$measure['fl'].'</td>';
          }
          echo '<td id="'.$mkey.'_at">'.$measure['at'].'</td>';
          echo '<td id="'.$mkey.'_be">'.$measure['be'].'</td>';
          $ddkey = $domain['dkey'];
          echo "<td>";
          echo Form::input('saftey', $hospital[$ddkey][$mkey.'_br'], array('class' => 'form-control', 'id' => $mkey.'_br'));
          echo "</td>";
          echo "<td>";
          echo Form::input('saftey', $hospital[$ddkey][$mkey.'_pr'], array('class' => 'form-control', 'id' => $mkey.'_pr'));
          echo "</td>";
          echo '<td id="'.$mkey.'_ap">'.$hospital[$ddkey][$mkey.'_ap'].'</td>';
          echo '<td id="'.$mkey.'_ip">'.$hospital[$ddkey][$mkey.'_ip'].'</td>';
          if ($dkey == "hc") {
            echo '<td id="'.$mkey.'_ds">'.$hospital[$ddkey][$mkey.'_ds'].'</td>';
          } else {
            echo '<td id="'.$mkey.'_ms">'.$hospital[$ddkey][$mkey.'_ms'].'</td>';
          }


          echo "</tr>";
        }
        echo '</table>
        </div>
        </div>
        </div>';
      }

 ?>



</div>

<script>

$(document).ready(function(){
  $(".jumbotron").hide();
  $(".inner").hide();
  $("#main1").show();


  $('.btn-group').click(function(event) {
        // this.append wouldn't work

        var temp = event.target.id;
        $(".inner").hide();
        console.log(temp);
        $('#'+temp+'1').show();
        $(".active").removeClass("active");
        $(event.target).addClass("active");
    });



  //sessionStorage.setItem('user', JSON.stringify(domains));
  //var obj = JSON.parse(sessionStorage.user);
  //console.log(obj.BMR);


});
</script>
<?php echo Asset::js('hospital.js'); ?>
<?php echo Asset::js('what_if.js'); ?>
