<?php

echo Form::open(array('action' => 'm2/index', 'method' => 'post'));

echo Form::button('whatif', 'What If', array('class' => 'btn btn-default'));

echo Form::close();

?>

<div id="indexPage">

      <h3>Fiscal Reimbursement Report for <strong style="color:#FFF;font-style:italic;">
        Kaiser Foundation Hospital-Santa Clara</strong></h3>
      <h3>Fiscal Year: <strong style="color:#FFF;font-style:italic;">11/07/2017</strong></h3>

      <p>Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things</p>

      <table id="VBP">
        <tr>
          <th>Expected Medicare Reimbursement:</th>
          <td style="color:#FFFFFF">$2,431,370.59</td>
        </tr>
        <tr>
          <th>VBP Bonus/Penalty:</th>
          <td style="color:#FFFFFF">$24,730.51</td>
        </tr>
        <tr>
          <th>Adjusted Medicare Reimbursement:</th>
          <td style="color:#FFFFFF">$2,456,101.10</td>
        </tr>
      </table>

      <p>Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things</p>

      <table class="mainTables" id="safetyTable">

        <tr class="mainRow">
         <th colspan="9" style="text-align:center;">Safety Statistics</th>
        </tr>
        <tr class="tRow1">
         <th></th>
         <th>PSI-90</th>
         <th>PC-01</th>
         <th>CLABSI</th>
         <th>CAUTI</th>
         <th>HAI-3</th>
         <th>HAI-4</th>
         <th>MRSA</th>
         <th>CDI</th>
        </tr>
        <tr>
         <th>Baseline:</th>
         <td><?php echo Form::input('PSI-90B', '', array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('PC-01B', '', array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('CLABSIB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CAUTIB', '$set[1]', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-3B', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-4B', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('MRSAB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CDIB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr>
         <th>Performance:</th>
         <td><?php echo Form::input('PSI-90P', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('PC-01P', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('CLABSIP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CAUTIP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-3P', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-4P', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('MRSAP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CDIP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr>
         <th>Benchmark:</th>
         <td>0.709498</td>
         <td>0</td>
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
         <td>0.71</td>
         <td>0.767</td>
         <td>0.805</td>
        </tr>
        <tr>
         <th>Achievement Score:</th>
         <td>10/10</td>
         <td>8/10</td>
         <td>4/10</td>
         <td>0/10</td>
         <td>0/10</td>
         <td>0/10</td>
         <td>6/10</td>
         <td>0/10</td>
        </tr>
        <tr>
         <th>Improvement Score:</th>
         <td>9/9</td>
         <td>0/9</td>
         <td>0/9</td>
         <td>1/9</td>
         <td>0/9</td>
         <td>6/9</td>
         <td>6/9</td>
         <td>0/9</td>
        </tr>
        <tr>
         <th>Measure Score:</th>
         <td>10/10</td>
         <td>8/10</td>
         <td>4/10</td>
         <td>1/10</td>
         <td>0/10</td>
         <td>6/10</td>
         <td>6/10</td>
         <td>0/10</td>
        </tr>

      </table>

      <br>

      <div id="doubleTable">

      <table class="mainTables" id="clinicalTable">

        <tr class="mainRow">
          <th colspan="4" style="text-align:center;">Clinical Care Statistics</th>
        </tr>
        <tr class="tRow1">
          <th></th>
          <th>MORT-30-AMI</th>
          <th>MORT-30-HF</th>
          <th>MORT-30-PN</th>
        </tr>
        <tr>
          <th>Baseline:</th>
          <td><?php echo Form::input('MORT-30-AMIB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-HFB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-PNB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr>
          <th>Performance:</th>
          <td><?php echo Form::input('MORT-30-AMIP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-HFP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-PNP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
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
          <th>Achievement Score:</th>
          <td>N/A</td>
          <td>N/A</td>
          <td>N/A</td>
        </tr>
        <tr>
          <th>Improvement Score:</th>
          <td>N/A</td>
          <td>N/A</td>
          <td>N/A</td>
        </tr>
        <tr>
          <th>Measure Score:</th>
          <td>8/10</td>
          <td>0/10</td>
          <td>1/10</td>
        </tr>

      </table>

      <table class="mainTables" id="efficiencyTable">

        <tr class="mainRow">
          <th colspan="4" style="text-align:center;">Efficiency Statistics</th>
        </tr>

        <tr class="tRow1">
          <th></th>
          <th>MSPB-1&#10;&nbsp;</th>
        </tr>
        <tr>
          <th>Baseline:</th>
          <td><?php echo Form::input('MSPB-1B', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr>
          <th>Performance:</th>
          <td><?php echo Form::input('MSPB-1P', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
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
          <th>Achievement Score:</th>
          <td>8/10</td>
        </tr>
        <tr>
          <th>Improvement Score:</th>
          <td>0/9</td>
        </tr>
        <tr>
          <th>Measure Score:</th>
          <td>8/10</td>
        </tr>

      </table>

      </div>

      <br>
      <br>

      <table class="mainTables" id="hcahpsTable">

        <tr class="mainRow">
          <th colspan="9" style="text-align:center;">HCAHPS Statistics</th>
        </tr>

        <tr class="tRow1">
          <th></th>
          <th>Communication with Nurses</th>
          <th>Communication with Doctors</th>
          <th>Hospital Staff Responsiveness</th>
          <th>Care Transition</th>
          <th>Medicinal Communication</th>
          <th>Cleanliness and Quietness</th>
          <th>Discharge Information</th>
          <th>Overall Hospital Rating</th>
        </tr>
        <tr>
          <th>Baseline:</th>
          <td><?php echo Form::input('CWNB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('CWDB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('HSRB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CTB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MCB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CQB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('DIB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('OHRB', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr>
          <th>Performance:</th>
          <td><?php echo Form::input('CWNP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('CWDP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('HSRP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CTP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MCP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CQP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('DIP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('OHRP', $set[1], array('class' => 'form-control', 'id' => 'test'))?></th>
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
          <th>Achievement Score:</th>
          <td>0/10</td>
          <td>4/10</td>
          <td>0/10</td>
          <td>1/10</td>
          <td>0/10</td>
          <td>0/10</td>
          <td>2/10</td>
          <td>4/10</td>
        </tr>
        <tr>
          <th>Improvement Score:</th>
          <td>0/9</td>
          <td>1/9</td>
          <td>0/9</td>
          <td>0/9</td>
          <td>0/9</td>
          <td>0/9</td>
          <td>0/9</td>
          <td>0/9</td>
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
