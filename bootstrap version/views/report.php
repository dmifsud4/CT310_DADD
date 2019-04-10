<?php

// Needs to be moved back to presenter
$domains=array(
  "sa"=>array(
    "name"=>"Saftey",
    "measures"=>array(
      "PSI-90"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-1"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-2"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-3"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-4"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-5"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "HAI-6"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
      "PC-01"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
      )
    ),
    "cl"=>array(
      "name"=>"Clinical Care",
      "measures"=>array(
        "MORT-30-AMI"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
        "MORT-30-HF"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
        "MORT-30-PN"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
        )
      ),
      "ef"=>array(
        "name"=>"Efficiency",
        "measures"=>array(
          "MSPB-1"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
          )
        ),
        "hc"=>array(
          "name"=>"HCAHPS",
          "measures"=>array(
            "Communication with Nurses"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Communication with Doctors"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Hospital Staff Responsiveness"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Care Transition"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Medicinal Communication"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Cleanliness and Quietness"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Discharge Information"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "Overall Hospital Rating"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
            )
          )
);
$headers=array("Measures","Achievement Threshold","Benchmark","Baseline Rate","Performance Rate","Achievement Points", "Improvement Points","Measure Score");


?>

<div class="container">

<div class="row p-4 text-center">
  <div class="col">
    <div class="btn-group">
  <button type="button" class="btn btn-outline-primary active" id="main">Main</button>
  <button type="button" class="btn btn-outline-primary" id="sa">Saftey</button>
  <button type="button" class="btn btn-outline-primary" id="cl">Clinical Care</button>
  <button type="button" class="btn btn-outline-primary" id="ef">Efficiency</button>
  <button type="button" class="btn btn-outline-primary" id="hc">HCAHPS</button>
    </div>
  </div>
</div>

<div class="row inner" id="main1">
  <div class="col">
    <button type="button" class="btn btn-light">Model Senario</button>
    <table class="table table-responsive">
        <tr>
          <th>Base Medicare Reimbursement:</th>
          <td><input name="baseR" id="BMR" value="2431370.59"></td>
        </tr>
        <tr>
          <th>VBP Bonus/Penalty:</th>
          <td id="VBP">$24,730.51</td>
        </tr>
        <tr>
          <th>Adjusted Medicare Reimbursement:</th>
          <td id="AMR">$2,456,101.10</td>
        </tr>
      </table>
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
    <div class="table-responsive">
    <table class="table">
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







  //sessionStorage.setItem('user', JSON.stringify(hospital_data));
  //var obj = JSON.parse(sessionStorage.user);
  //console.log(obj.BMR);


});
</script>
