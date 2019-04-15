

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
          <td><input name="baseR" id="bmr" value="2431370.59"></td>
        </tr>
        <tr>
          <th>VBP Bonus/Penalty:</th>
          <td id="vbp">$24,730.51</td>
        </tr>
        <tr>
          <th>Adjusted Medicare Reimbursement:</th>
          <td id="amr">$2,456,101.10</td>
        </tr>
      </table>
    </div>
    </div>
  </div>
  </div>

  <div class="col">
    <div class="card">
  <div class="card-body">
    <h4 class="card-title">Currently Selected Hospital</h4>
    <p class="card-text"><?php echo $hospital['name'] ?><br>
    <?php echo $hospital['addr'] ?> <br>
    <?php echo $hospital['city'].", ".$hospital['state'].", ".$hospital['zip'] ?></p>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <?php
    Form::open(array('action' => 'index/m3/loadHos', 'method' => 'post'));
    $options = \DB::select('id')->from('hospitals')->execute()->as_array();
    echo Form::select('ID', null, $options,array('name'=>'ID'));
    echo '<input type ="text" id="box" value= "">';
    echo '<input type="submit" class="btn btn-default" value="submit">';
    echo Form::close();
    ?>
    <script type="text/javascript">
    var mytextbox = document.getElementById('box');
    var mydropdown = document.getElementById('ID');

    mydropdown.onchange = function(){
          mytextbox.innerHTML = mydropdown.value; //to appened
         //mytextbox.innerHTML = this.value;
    }
</script>
<!--    <div id="hideMe">
    ?php
    echo Form::open(array('action'=>'loadHos', 'method'=>'post'));
    echo Form::input('hiddenInput', '');
    echo Form::
    echo Form::close();
    ?>
    </div>-->
  </div>
</div>

  </div>
</div>

<?php

foreach ($domains as $ddkey => $domain) {
echo '<div class="row inner" id="'.$ddkey.'1">
  <div class="col">
    <div class="table-responsive-sm">
    <table class="table table-bordered table-striped table-hover text-center shadow">
      <tr>
        <th colspan="9" style="text-align:center;">'.$domain['name'].' Statistics</th>
      </tr>
      <tr>';
        foreach($headers as $header) {
          echo "<th>".$header."</th>";
        }
        echo "</tr>";
        foreach ($domain['measures'] as $mkey => $measure) {
          echo "<tr>";
          echo "<th>".$measure['name']."</th>";
          echo "<td>".$measure['at']."</td>";
          echo "<td>".$measure['be']."</td>";
          $dukey = $domain['dkey'];
          echo "<td>";
          echo Form::input('saftey', $hospital[$dukey][$mkey.'_br'], array('class' => 'form-control', 'id' => $mkey));
          echo "</td>";
          echo "<td>";
          echo Form::input('saftey', $hospital[$dukey][$mkey.'_pr'], array('class' => 'form-control', 'id' => $mkey));
          echo "</td>";
          echo "<td>".$hospital[$dukey][$mkey.'_ap']."</td>";
          echo "<td>".$hospital[$dukey][$mkey.'_ip']."</td>";
          echo "<td>".$hospital[$dukey][$mkey.'_ms']."</td>";


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
  //$(".jumbotron").hide();
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
