

<main>

<!--   <div = class = full_col> -->
    <div id="homePage">

	
	<section class="homeItem">
		<table>
			<tr>
			<th style="color:#719E1E">Load</th>
			<?php
				echo Form::select('Saves', 'none', array('1'=>'Default'));
				echo Form::submit('a', 'Save', array('onClick' => \Model\Report::save_data('default.csv')));
			?>
			</tr>
		</table>
	</section>
	
    <section class="homeItem">
		
      <table>
        <tr>
          <th style="color:#719E1E">Expected Medicare Reimbursement:</th>
          <td style="color:#FFFFFF">$2,431,370.59</td>
        </tr>

      </table>

    </section>

    <section class="homeItem">

      <table>

        <tr>
          <th style="color:#719E1E">VBP Bonus/Penalty:</th>
          <td style="color:#FFFFFF">$24,730.51</td>
        </tr>

      </table>

    </section>

    <section class="homeItem">
    
      <table>

        <tr>
          <th style="color:#719E1E">Adjusted Medicare Reimbursement:</th>
          <td style="color:#FFFFFF">$2,456,101.10</td>
        </tr>

      </table>

    </section>

</div>

<div id="homepage2">

  <div id="safetyClinical">

  <div id="safety">

    <table id="safetyTable">

      <tr>
        <th colspan="8" style="color:#719E1E; text-align:center;" >Safety Statistics</th>
      </tr>
      <tr>
        <th></th>
        <th>PSI-90</th>
        <th>PC-01</th>
        <th>CLABSI (HAI-1)</th>
        <th>CAUTI (HAI-2)</th>
        <th>SSI (HAI-3 and HAI-4)</th>
        <th>MRSA (HAI-5)</th>
        <th>CDI (HAI-6)</th>
      </tr>
      <tr>
        <th>Benchmark:</th>
        <td>0.709498</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0.004</td>
      </tr>
      <tr>
        <th>Threshold:</th>
        <td>0.964542</td>
        <td>0.020408</td>
        <td>0.369</td>
        <td>0.906</td>
        <td>0.824</td>
        <td>0.767</td>
        <td>0.805</td>
      </tr>
      <tr>
        <th>Measure Score:</th>
        <td>10/10</td>
        <td>8/10</td>
        <td>4/10</td>
        <td>1/10</td>
        <td>1/10</td>
        <td>6/10</td>
        <td>0/10</td>
      </tr>

    </table>

  </div>

  <div id="clinical">

    <table id="clinicalTable">

      <tr>
        <th colspan="4" style="color:#719E1E; text-align:center;">Clinical Care Statistics</th>
      </tr>
      <tr>
        <th></th>
        <th>MORT-30-AMI</th>
        <th>MORT-30-HF</th>
        <th>MORT-30-PN</th>
      </tr>

      <tr>
        <th>Benchmark:</th>
        <td>0.873053</td>
        <td>0.907656</td>
        <td>0.9079</td>
      </tr>

      <tr>
        <th>Threshold:</th>
        <td>0.850916</td>
        <td>0.883421</td>
        <td>0.88286</td>
      </tr>

      <tr>
        <th>Measure Score:</th>
        <td>8/10</td>
        <td>0/10</td>
        <td>1/10</td>
      </tr>

    </table>

  </div>
  
  </div>

  <div id="hcahpsEfficiency">
  
  <div id="hcahps">

    <table id="hcahpsTable">

      <tr>
        <th colspan="9" style="color:#719E1E; text-align:center;">HCAHPS Statistics</th>
      </tr>

      <tr>
        <th></th>
        <th>Communication with Nurses</th>
        <th>Communication with Doctors</th>
        <th>Responsiveness of Hospital Staff</th>
        <th>Care Transition</th>
        <th>Communication About Medicine</th>
        <th>Cleanliness and Quietness</th>
        <th>Discharge Information</th>
        <th>Overall Rating of Hospital</th>
      </tr>

      <tr>
        <th>Benchmark:</th>
        <td>86.68</td>
        <td>88.51</td>
        <td>80.35</td>
        <td>62.44</td>
        <td>73.66</td>
        <td>79</td>
        <td>91.63</td>
        <td>84.58</td>
      </tr>

      <tr>
        <th>Threshold:</th>
        <td>0.01470588235</td>
        <td>3.644981413</td>
        <td>-1.54518664</td>
        <td>0.8193812557</td>
        <td>-1.975218659</td>
        <td>-1.353731343</td>
        <td>1.913518887</td>
        <td>4.049825784</td>
      </tr>

      <tr>
        <th>Measure Score:</th>
        <td>0/10</td>
        <td>4/10</td>
        <td>0/10</td>
        <td>1/10</td>
        <td>0/10</td>
        <td>0/10</td>
        <td>2/10</td>
        <td>4/10</td>
      </tr>

    </table>

  </div>

  <div id="efficiency">

    <table id="efficiencyTable">

      <tr>
        <th colspan="4" style="color:#719E1E; text-align:center;">Efficiency Statistics</th>
      </tr>

      <tr>
        <th></th>
        <th>MSPB-1</th>
      </tr>

      <tr>
        <th>Benchmark:</th>
        <td>0.832678</td>
      </tr>

      <tr>
        <th>Threshold:</th>
        <td>0.986777</td>
      </tr>

      <tr>
        <th>Measure Score:</th>
        <td>8/10</td>
      </tr>

    </table>

  </div>

  </div>
  
</div>

</main>
