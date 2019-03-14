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
      
      <div id="formButtons">
      
        <h1 style="font-size:4vw;text-align:center;">What if Scenarios</h1>
        
        <p style="text-align:justify;">In this panel, you have the option to first either <strong>load</strong> a preexisting layout for the Value Based
           Purchasing information as well as the Statistics Tables below or begin a <strong>what if</strong> scenario by filling
           out the appropriate red boxes with the appropriate information.</p>  
        
        <h4>To begin below, choose either the <i style="color:#FFF">load button</i> or the <i style="color:#FFF">what if</i> button:</h4>
      
        <div id="filler">
            <button id="loadButton" name='load' onclick='load_sequence()'>Load</button>
            <button id="whatIfButton" name='whatIf' onclick='whatif_sequence()'>What If</button>
            <button id="submitButton" name='submitButton' onclick='whatif_calculate()'>Calculate VBP</button>
            <?php echo Form::open(array('action' => 'index/m2/saveData', 'method' => 'post'));
                  echo Form::button('savebutton', 'Save Presets', array('class' => 'btn btn-default', 'id' => 'save_button'));?>
            <div id="whatIfContainer">
                <p>Enter Filename:</p>
                <?php echo Form::input('fileName', '', array('class' => 'form-control', 'id' => 'inputFile'));?>
                <!--<input name='fileName' class='form-control' id='inputFile'>-->
            </div>
        </div>
        
      </div>
<!--       ?php echo Form::open(array('action' => 'index/m2/saveData', 'method' => 'post')); ?> -->
      <table id="VBP">
        <tr class="tRowOtherV" id='row1'>
          <th>Expected Medicare Reimbursement:</th>
<!--           <td style="color:#FFFFFF">$2,431,370.59</td> -->
          <td><input name='baseR' class='form-control' id='baseBox'></td>
        </tr>
        <tr class="tRowOtherV">
          <th>VBP Bonus/Penalty:</th>
          <td style="color:#FFFFFF">$24,730.51</td>
        </tr>
        <tr class="tRowOtherV">
          <th>Adjusted Medicare Reimbursement:</th>
          <td style="color:#FFFFFF">$2,456,101.10</td>
        </tr>
      </table>

<!--      <p>Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things
         Some stuff about value based purchasing and things Some stuff about value based purchasing and things</p>-->
      
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
        <tr class="tRowOtherS" id='row2'>
         <th>Baseline:</th>
         <td><?php echo Form::input('PSI-90B', '', array('class' => 'form-control', 'id' => 'test'));?></td>
         <td><?php echo Form::input('PC-01B', '', array('class' => 'form-control', 'id' => 'test'));?></td>
         <td><?php echo Form::input('CLABSIB', '', array('class' => 'form-control', 'id' => 'test'));?></th>
         <td><?php echo Form::input('CAUTIB', '', array('class' => 'form-control', 'id' => 'test'));?></th>
         <td><?php echo Form::input('HAI-3B', '', array('class' => 'form-control', 'id' => 'test'));?></th>
         <td><?php echo Form::input('HAI-4B', '', array('class' => 'form-control', 'id' => 'test'));?></th>
         <td><?php echo Form::input('MRSAB', '', array('class' => 'form-control', 'id' => 'test'));?></th>
         <td><?php echo Form::input('CDIB', '', array('class' => 'form-control', 'id' => 'test'));?></th>
        </tr>
        <tr class="tRowOtherS" id='row3'>
         <th>Performance:</th>
         <td><?php echo Form::input('PSI-90P', '', array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('PC-01P', '', array('class' => 'form-control', 'id' => 'test'))?></td>
         <td><?php echo Form::input('CLABSIP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CAUTIP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-3P', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('HAI-4P', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('MRSAP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
         <td><?php echo Form::input('CDIP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherS">
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
        <tr class="tRowOtherS">
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
        <tr class="tRowOtherS">
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
        <tr class="tRowOtherS">
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
        <tr class="tRowOtherS">
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
        <tr class="tRowOtherC" id="row4">
          <th>Baseline:</th>
          <td><?php echo Form::input('MORT-30-AMIB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-HFB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-PNB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherC" id="row5">
          <th>Performance:</th>
          <td><?php echo Form::input('MORT-30-AMIP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-HFP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MORT-30-PNP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherC">
          <th>Benchmark:</th>
          <td>0.873053</td>
          <td>0.907656</td>
          <td>0.9079</td>
        </tr>

        <tr class="tRowOtherC">
          <th>Threshold:</th>
          <td>0.850916</td>
          <td>0.883421</td>
          <td>0.88286</td>
        </tr>
        <tr class="tRowOtherC">
          <th>Achievement Score:</th>
          <td>N/A</td>
          <td>N/A</td>
          <td>N/A</td>
        </tr>
        <tr class="tRowOtherC">
          <th>Improvement Score:</th>
          <td>N/A</td>
          <td>N/A</td>
          <td>N/A</td>
        </tr>
        <tr class="tRowOtherC">
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
        <tr class="tRowOtherE" id='row6'>
          <th>Baseline:</th>
          <td><?php echo Form::input('MSPB-1B', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherE" id='row7'>
          <th>Performance:</th>
          <td><?php echo Form::input('MSPB-1P', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherE">
          <th>Benchmark:</th>
          <td>0.832678</td>
        </tr>

        <tr class="tRowOtherE">
          <th>Threshold:</th>
          <td>0.986777</td>
        </tr>
        <tr class="tRowOtherE">
          <th>Achievement Score:</th>
          <td>8/10</td>
        </tr>
        <tr class="tRowOtherE">
          <th>Improvement Score:</th>
          <td>0/9</td>
        </tr>
        <tr class="tRowOtherE">
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
        <tr class="tRowOtherH" id='row8'>
          <th>Baseline:</th>
          <td><?php echo Form::input('CWNB', '', array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('CWDB', '', array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('HSRB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CTB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MCB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CQB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('DIB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('OHRB', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherH" id='row9'>
          <th>Performance:</th>
          <td><?php echo Form::input('CWNP', '', array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('CWDP', '', array('class' => 'form-control', 'id' => 'test'))?></td>
          <td><?php echo Form::input('HSRP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CTP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('MCP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('CQP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('DIP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
          <td><?php echo Form::input('OHRP', '', array('class' => 'form-control', 'id' => 'test'))?></th>
        </tr>
        <tr class="tRowOtherH">
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

        <tr class="tRowOtherH">
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

        <tr class="tRowOtherH">
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
        <tr class="tRowOtherH">
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
        <tr class="tRowOtherH">
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
      
      <?php echo Form::close(); ?>

    </div>
