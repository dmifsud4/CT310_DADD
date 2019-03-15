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
                <?php echo Form::input('fileName', '', array('id' => 'inputFile'));?>
                <!--<input name='fileName' class='form-control' id='inputFile'>-->
            </div>
        </div>
        
      </div>
<!--       ?php echo Form::open(array('action' => 'index/m2/saveData', 'method' => 'post')); ?> -->
      <table id="VBP">
        <tr class="tRowOtherV" id='row1'>
          <th>Expected Medicare Reimbursement:</th>
          <td class='form-control'><input name='baseR' id='baseBox' value='2431370.59'></td>
          <td style="color:#FFF" class="ayyyyyyy">$2,431,370.59</td>
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
         <td class='form-control'><?php echo Form::input('PSI-90B', '0.964349', array('class' => 'form-control', 'id' => 'PSI-90B'));?></td>
         <td class='form-control'><?php echo Form::input('PC-01B', '0', array('class' => 'form-control', 'id' => 'PC-01B'));?></td>
         <td class='form-control'><?php echo Form::input('CLABSIB', '0.155', array('class' => 'form-control', 'id' => 'CLABSIB'));?></th>
         <td class='form-control'><?php echo Form::input('CAUTIB', '1.518', array('class' => 'form-control', 'id' => 'CAUTIB'));?></th>
         <td class='form-control'><?php echo Form::input('HAI-3B', '0.487', array('class' => 'form-control', 'id' => 'HAI-3B'));?></th>
         <td class='form-control'><?php echo Form::input('HAI-4B', '2.191', array('class' => 'form-control', 'id' => 'HAI-4B'));?></th>
         <td class='form-control'><?php echo Form::input('MRSAB', '0.873', array('class' => 'form-control', 'id' => 'MRSAB'));?></th>
         <td class='form-control'><?php echo Form::input('CDIB', '0.715', array('class' => 'form-control', 'id' => 'CDIB'));?></th>
         <td class="ayyyyyyy">0.964349</td>
         <td class="ayyyyyyy">0</td>
         <td class="ayyyyyyy">0.155</td>
         <td class="ayyyyyyy">1.518</td>
         <td class="ayyyyyyy">0.487</td>
         <td class="ayyyyyyy">2.191</td>
         <td class="ayyyyyyy">0.873</td>
         <td class="ayyyyyyy">0.715</td>
        </tr>
        <tr class="tRowOtherS" id='row3'>
         <th>Performance:</th>
         <td class='form-control'><?php echo Form::input('PSI-90P', '0.603915', array('class' => 'form-control', 'id' => 'PSI-90P'))?></td>
         <td class='form-control'><?php echo Form::input('PC-01P', '0.004292', array('class' => 'form-control', 'id' => 'PC-01P'))?></td>
         <td class='form-control'><?php echo Form::input('CLABSIP', '0.225', array('class' => 'form-control', 'id' => 'CLABSIP'))?></th>
         <td class='form-control'><?php echo Form::input('CAUTIP', '1.356', array('class' => 'form-control', 'id' => 'CAUTIP'))?></th>
         <td class='form-control'><?php echo Form::input('HAI-3P', '1.192', array('class' => 'form-control', 'id' => 'HAI-3P'))?></th>
         <td class='form-control'><?php echo Form::input('HAI-4P', '0.755', array('class' => 'form-control', 'id' => 'HAI-4P'))?></th>
         <td class='form-control'><?php echo Form::input('MRSAP', '0.28', array('class' => 'form-control', 'id' => 'MRSAP'))?></th>
         <td class='form-control'><?php echo Form::input('CDIP', '1.068', array('class' => 'form-control', 'id' => 'CDIP'))?></th>
         <td class="ayyyyyyy">0.603915</td>
         <td class="ayyyyyyy">0.004292</td>
         <td class="ayyyyyyy">0.225</td>
         <td class="ayyyyyyy">1.356</td>
         <td class="ayyyyyyy">1.192</td>
         <td class="ayyyyyyy">0.755</td>
         <td class="ayyyyyyy">0.28</td>
         <td class="ayyyyyyy">1.068</td>
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
          <td class='form-control'><?php echo Form::input('MORT-30-AMIB', '0.845546', array('class' => 'form-control', 'id' => 'MORT-30-AMIB'))?></th>
          <td class='form-control'><?php echo Form::input('MORT-30-HFB', '0.877329', array('class' => 'form-control', 'id' => 'MORT-30-HFB'))?></th>
          <td class='form-control'><?php echo Form::input('MORT-30-PNB', '0.881174', array('class' => 'form-control', 'id' => 'MORT-30-PNB'))?></th>
          <td class="ayyyyyyy">0.845546</td>
          <td class="ayyyyyyy">0.877329</td>
          <td class="ayyyyyyy">0.881174</td>
        </tr>
        <tr class="tRowOtherC" id="row5">
          <th>Performance:</th>
          <td class='form-control'><?php echo Form::input('MORT-30-AMIP', '0.869339', array('class' => 'form-control', 'id' => 'MORT-30-AMIP'))?></th>
          <td class='form-control'><?php echo Form::input('MORT-30-HFP', '0.878083', array('class' => 'form-control', 'id' => 'MORT-30-HFP'))?></th>
          <td class='form-control'><?php echo Form::input('MORT-30-PNP', '0.88325', array('class' => 'form-control', 'id' => 'MORT-30-PNP'))?></th>
          <td class="ayyyyyyy">0.869339</td>
          <td class="ayyyyyyy">0.878083</td>
          <td class="ayyyyyyy">0.88325</td>
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
          <td class='form-control'><?php echo Form::input('MSPB-1B', '0.818509', array('class' => 'form-control', 'id' => 'MSPB-1B'))?></th>
          <td class="ayyyyyyy">0.818509</td>
        </tr>
        <tr class="tRowOtherE" id='row7'>
          <th>Performance:</th>
          <td class='form-control'><?php echo Form::input('MSPB-1P', '0.855982', array('class' => 'form-control', 'id' => 'MSPB-1P'))?></th>
          <td class="ayyyyyyy">0.855982</td>
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
          <td class='form-control'><?php echo Form::input('CWNB', '79.24', array('class' => 'form-control', 'id' => 'CWNB'))?></td>
          <td class='form-control'><?php echo Form::input('CWDB', '82.62', array('class' => 'form-control', 'id' => 'CWDB'))?></td>
          <td class='form-control'><?php echo Form::input('HSRB', '65.19', array('class' => 'form-control', 'id' => 'HSRB'))?></th>
          <td class='form-control'><?php echo Form::input('CTB', '56.13', array('class' => 'form-control', 'id' => 'CTB'))?></th>
          <td class='form-control'><?php echo Form::input('MCB', '63.51', array('class' => 'form-control', 'id' => 'MCB'))?></th>
          <td class='form-control'><?php echo Form::input('CQB', '63.71', array('class' => 'form-control', 'id' => 'CQB'))?></th>
          <td class='form-control'><?php echo Form::input('DIB', '88.2', array('class' => 'form-control', 'id' => 'DIB'))?></th>
          <td class='form-control'><?php echo Form::input('OHRB', '78.71', array('class' => 'form-control', 'id' => 'OHRB'))?></th>
          <td class="ayyyyyyy">79.24</td>
          <td class="ayyyyyyy">82.62</td>
          <td class="ayyyyyyy">65.19</td>
          <td class="ayyyyyyy">56.13</td>
          <td class="ayyyyyyy">63.51</td>
          <td class="ayyyyyyy">63.71</td>
          <td class="ayyyyyyy">88.2</td>
          <td class="ayyyyyyy">78.71</td>
        </tr>
        <tr class="tRowOtherH" id='row9'>
          <th>Performance:</th>
          <td class='form-control'><?php echo Form::input('CWNP', '78.08', array('class' => 'form-control', 'id' => 'CWNP'))?></td>
          <td class='form-control'><?php echo Form::input('CWDP', '83.26', array('class' => 'form-control', 'id' => 'CWDP'))?></td>
          <td class='form-control'><?php echo Form::input('HSRP', '61.61', array('class' => 'form-control', 'id' => 'HSRP'))?></th>
          <td class='form-control'><?php echo Form::input('CTP', '51.84', array('class' => 'form-control', 'id' => 'CTP'))?></th>
          <td class='form-control'><?php echo Form::input('MCP', '60.54', array('class' => 'form-control', 'id' => 'MCP'))?></th>
          <td class='form-control'><?php echo Form::input('CQP', '62.84', array('class' => 'form-control', 'id' => 'CQP'))?></th>
          <td class='form-control'><?php echo Form::input('DIP', '87.39', array('class' => 'form-control', 'id' => 'DIP'))?></th>
          <td class='form-control'><?php echo Form::input('OHRP', '75.89', array('class' => 'form-control', 'id' => 'OHRP'))?></th>
          <td class="ayyyyyyy">78.08</td>
          <td class="ayyyyyyy">83.26</td>
          <td class="ayyyyyyy">61.61</td>
          <td class="ayyyyyyy">51.84</td>
          <td class="ayyyyyyy">60.54</td>
          <td class="ayyyyyyy">62.84</td>
          <td class="ayyyyyyy">87.39</td>
          <td class="ayyyyyyy">75.89</td>
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
          <td>78.52</td>
          <td>80.44</td>
          <td>65.08</td>
          <td>51.45</td>
          <td>63.37</td>
          <td>65.6</td>
          <td>86.6</td>
          <td>70.23</td>
        </tr>
        <tr class="tRowOtherH">
          <th>Floor Values:</th>
          <td>55.27</td>
          <td>57.39</td>
          <td>38.4</td>
          <td>25.21</td>
          <td>43.43</td>
          <td>40.05</td>
          <td>62.25</td>
          <td>37.67</td>
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
