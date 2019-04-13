

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
    <p class="card-text">Some example text. Some example text.</p>
    <select name="cars" class="custom-select">
      <option selected>Select Another Hospital</option>
      <option value="volvo">Volvo</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>
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
        foreach($headers as $header) {
          echo "<th>".$header."</th>";
        }
        echo "</tr>";
        foreach ($domain['measures'] as $mkey => $measure) {
          echo "<tr>";
          echo "<th>".$mkey."</th>";
          foreach ($measure as $skey => $score) {
            if ($skey == "ba" || $skey == "pe") {
              echo "<td>";
              echo Form::input('saftey', $score, array('class' => 'form-control', 'id' => $mkey.$skey));
              echo "</td>";
            } else
            echo "<td>".$score."</td>";
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
