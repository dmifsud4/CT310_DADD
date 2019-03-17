/*
 Load Button Stuff:
 */

var DIR = '/~dofe6096/';

function open_comments() {
    $('#commentBox').show();/*
    setTimeout(function() { $('#filenameinput').val($('#dropDown').val()); }, 250);*/
}

function load_choosefile(/*str*/) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
//             document.getElementById("filler").innerHTML = str + this.responseText + "</select>";
//             $('#filler').html(str + this.responseText + "</select>");
            $('#filler').html(this.responseText);
        }
    };
    xmlhttp.open("GET", DIR + "ct310/m2/XMLSaves/script.php", true);
    xmlhttp.send();
}

function load_sequence() {
    $('#theFormAy').show();
//     var str = "<button id='loadButton' name='load' onclick='load_xml(); open_comments();'>Load File</button><select id='dropDown' name='dropDown'>";
//     $('#filler').html("<button id='loadButton' name='load' onclick='load_xml(); open_comments();'>Load File</button>");
//     $('#dropDown').show();
    load_choosefile(/*str*/); 
/*    var filename = $('#dropDown').val();
    console.log(filename);*/
}

function load_xml(filename) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlDoc = this.responseXML;
            load_safety(xmlDoc, "VBP");
            load_safety(xmlDoc, "SAFETY");
            load_safety(xmlDoc, "CLINICAL");
            load_safety(xmlDoc, "EFFIC");
            load_safety(xmlDoc, "HCAHPS");
        }
    };
    xhttp.open("GET", DIR + "ct310/m2/XMLSaves/" + $("#dropDown option:selected").text(), true);
    xhttp.send();
}

function load_safety(xmlDoc, tableType) {
    var x = xmlDoc.getElementsByTagName(tableType)[0].getElementsByTagName("CATEGORY");
    var row = document.getElementsByClassName("tRowOtherS");
    var j = 0;
    if (tableType == "VBP") {
        row = document.getElementsByClassName("tRowOtherV");
    }
    else if (tableType == "CLINICAL") {
        row = document.getElementsByClassName("tRowOtherC");
    }
    else if (tableType == "EFFIC") {
        row = document.getElementsByClassName("tRowOtherE");
    }
    else if (tableType == "HCAHPS") {
        row = document.getElementsByClassName("tRowOtherH");
    }
    for (var i = 0; i < x.length; i++) {
        var count = 1;
        if (row[i].getElementsByTagName("td").length > row[2].getElementsByTagName("td").length) {
            j = row[i].getElementsByTagName("td").length/2;
        }
        for (/*var j = 0*/; j < row[i].getElementsByTagName("td").length; j++) {
            row[i].getElementsByTagName("td")[j].innerHTML = x[i].children[count].childNodes[0].nodeValue;
            count += 1;
        }
    }
}

/*
 What If Button Stuff:
 */

function whatif_calculate() {
    $('#submitButton').hide();
    $("#save_button").css('display', 'inline');
    $('#whatIfContainer').css('display', 'inline-block');
    
    var dom_scores = [], saf = 0, care = 0, eff = 0, tps = 0, hca = 0;

    for (var i = 0; i < 8; i++) {
    	 //( 9 * (Performance Period Rate - Acheivment Threshold) / (Benchmark - Acheivment Threshold) ) + 0.5
    	 //( 10 * (Performance Period Rate - Baseline Period Rate) / (Benchmark - Baseline Period Rate) ) - 0.5
    	 var a, imp;
//achievement safety
    	 if (parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementsByClassName("tRowOtherS")[2].getElementsByTagName("td")[i].innerHTML)){
			 a = 10;    	 
    	 } else if (parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) > parseFloat(document.getElementsByClassName("tRowOtherS")[3].getElementsByTagName("td")[i].innerHTML)){
			 a = 0;    	 
    	 } else {
    	 	 a = ( 9 * ((parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementsByClassName("tRowOtherS")[3].getElementsByTagName("td")[i].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherS")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherS")[3].getElementsByTagName("td")[i].innerHTML)))) + 0.5
    	 }
//improvement safety
    	 if (parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementsByClassName("tRowOtherS")[2].getElementsByTagName("td")[i].innerHTML)){
			 imp = 9;    	 
    	 } else if (parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementById("row2").getElementsByClassName("form-control")[i].value)) {
			 imp = 0
    	 } else {
		 	 imp = ( 10 * ((parseFloat(document.getElementById("row3").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementById("row2").getElementsByClassName("form-control")[i].value)) / (parseFloat(document.getElementsByClassName("tRowOtherS")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementById("row2").getElementsByClassName("form-control")[i].value)))) - 0.5    
    	 }
    	 document.getElementsByClassName("tRowOtherS")[4].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 document.getElementsByClassName("tRowOtherS")[5].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/9";
    	 if (a < imp) {
    	 	 document.getElementsByClassName("tRowOtherS")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
    	 	 saf += (Math.round(imp));
    	 }
    	 else if(a == imp){
		 	 document.getElementsByClassName("tRowOtherS")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
		 	 saf += (Math.round(imp));
    	 }
    	 else {
    	 	 document.getElementsByClassName("tRowOtherS")[6].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 	 saf += (Math.round(a));
    	 }
    }
    dom_scores.push(((saf / 80) * 100) * .25);
    for (var i = 0; i < 3; i++) {
    	 //( 9 * (Performance Period Rate - Acheivment Threshold) / (Benchmark - Acheivment Threshold) ) + 0.5
    	 //( 10 * (Performance Period Rate - Baseline Period Rate) / (Benchmark - Baseline Period Rate) ) - 0.5
    	 var a, imp;
//achievement care
    	 if (parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementsByClassName("tRowOtherC")[2].getElementsByTagName("td")[i].innerHTML)){
			 a = 10;    	 
    	 } else if (parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) < parseFloat(document.getElementsByClassName("tRowOtherC")[3].getElementsByTagName("td")[i].innerHTML)){
			 a = 0;    	 
    	 } else {
    	 	 a = ( 9 * ((parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementsByClassName("tRowOtherC")[3].getElementsByTagName("td")[i].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherC")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherC")[3].getElementsByTagName("td")[i].innerHTML)))) + 0.5
    	 }
//improvement care
    	 if (parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementsByClassName("tRowOtherC")[2].getElementsByTagName("td")[i].innerHTML)){
			 imp = 9;    	 
    	 } else if (parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementById("row4").getElementsByClassName("form-control")[i].value)) {
			 imp = 0
    	 } else {
		 	 imp = ( 10 * ((parseFloat(document.getElementById("row5").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementById("row4").getElementsByClassName("form-control")[i].value)) / (parseFloat(document.getElementsByClassName("tRowOtherC")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementById("row4").getElementsByClassName("form-control")[i].value)))) - 0.5    
    	 }
    	 document.getElementsByClassName("tRowOtherC")[4].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 document.getElementsByClassName("tRowOtherC")[5].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/9";
    	 if (a < imp) {
    	 	 document.getElementsByClassName("tRowOtherC")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
    	 	 care += Math.round(imp);
    	 }
    	 else if(a == imp){
		 	 document.getElementsByClassName("tRowOtherC")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
		 	 care += Math.round(imp);
    	 }
    	 else {
    	 	 document.getElementsByClassName("tRowOtherC")[6].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 	 care += Math.round(a);
    	 }
    }
    dom_scores.push(((care / 30) * 100) * .25);
    for (var i = 0; i < 1; i++) {
    	 //( 9 * (Performance Period Rate - Acheivment Threshold) / (Benchmark - Acheivment Threshold) ) + 0.5
    	 //( 10 * (Performance Period Rate - Baseline Period Rate) / (Benchmark - Baseline Period Rate) ) - 0.5
    	 var a, imp;
//achievement efficiency
    	 if (parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementsByClassName("tRowOtherE")[2].getElementsByTagName("td")[i].innerHTML)){
			 a = 10;    	 
    	 } else if (parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) > parseFloat(document.getElementsByClassName("tRowOtherE")[3].getElementsByTagName("td")[i].innerHTML)){
			 a = 0;    	 
    	 } else {
    	 	 a = ( 9 * ((parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementsByClassName("tRowOtherE")[3].getElementsByTagName("td")[i].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherE")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherE")[3].getElementsByTagName("td")[i].innerHTML)))) + 0.5
    	 }
//improvement efficiency
    	 if (parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementsByClassName("tRowOtherE")[2].getElementsByTagName("td")[i].innerHTML)){
			 imp = 9;    	 
    	 } else if (parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementById("row6").getElementsByClassName("form-control")[i].value)) {
			 imp = 0
    	 } else {
		 	 imp = ( 10 * ((parseFloat(document.getElementById("row7").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementById("row6").getElementsByClassName("form-control")[i].value)) / (parseFloat(document.getElementsByClassName("tRowOtherE")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementById("row6").getElementsByClassName("form-control")[i].value)))) - 0.5    
    	 }
    	 document.getElementsByClassName("tRowOtherE")[4].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 document.getElementsByClassName("tRowOtherE")[5].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/9";
    	 if (a < imp) {
    	 	 document.getElementsByClassName("tRowOtherE")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
    	 	 eff += Math.round(imp);
    	 }
    	 else if(a == imp){
		 	 document.getElementsByClassName("tRowOtherE")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
		 	 eff += Math.round(imp);
    	 }
    	 else {
    	 	 document.getElementsByClassName("tRowOtherE")[6].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 	 eff += Math.round(a);
    	 }
    	 
    }
    dom_scores.push(((eff / 10) * 100) * .25)
    var minA = 10;
    var arr = [];
    for (var i = 0; i < 8; i++) {
    	 //( 9 * (Performance Period Rate - Acheivment Threshold) / (Benchmark - Acheivment Threshold) ) + 0.5
    	 //( 10 * (Performance Period Rate - Baseline Period Rate) / (Benchmark - Baseline Period Rate) ) - 0.5
    	 var a, imp;
//achievement hcahps
    	 if (parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementsByClassName("tRowOtherH")[2].getElementsByTagName("td")[i].innerHTML)){
			 a = 10;    	 
    	 } else if (parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) < parseFloat(document.getElementsByClassName("tRowOtherH")[3].getElementsByTagName("td")[i].innerHTML)){
			 a = 0;    	 
    	 } else {
    	 	 a = ( 9 * ((parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementsByClassName("tRowOtherH")[3].getElementsByTagName("td")[i].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherH")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherH")[3].getElementsByTagName("td")[i].innerHTML)))) + 0.5
    	 }
//improvement hcahps
    	 if (parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) >= parseFloat(document.getElementsByClassName("tRowOtherH")[2].getElementsByTagName("td")[i].innerHTML)){
			 imp = 9;    	 
    	 } else if (parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) <= parseFloat(document.getElementById("row8").getElementsByClassName("form-control")[i].value)) {
			 imp = 0
    	 } else {
		 	 imp = ( 10 * ((parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[i].value) - parseFloat(document.getElementById("row8").getElementsByClassName("form-control")[i].value)) / (parseFloat(document.getElementsByClassName("tRowOtherH")[2].getElementsByTagName("td")[i].innerHTML) - parseFloat(document.getElementById("row8").getElementsByClassName("form-control")[i].value)))) - 0.5    
		 	 
		 	 console.log("1: " + document.getElementById("row9").getElementsByClassName("form-control")[i].innerHTML);
		 	 console.log("2: " + document.getElementById("row8").getElementsByClassName("form-control")[i].innerHTML);
		 	 console.log("3: " + document.getElementsByClassName("tRowOtherH")[2].getElementsByTagName("td")[i].innerHTML);
             console.log("4: " + document.getElementById("row8").getElementsByClassName("form-control")[i].innerHTML);
    	 }
    	 document.getElementsByClassName("tRowOtherH")[5].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 document.getElementsByClassName("tRowOtherH")[6].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/9";
         console.log("a: " + a);
         console.log("imp: " + imp);
    	 if (a < imp) {
    	 	 document.getElementsByClassName("tRowOtherH")[7].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
    	 	 hca += Math.round(imp);
    	 	 if (Math.round(imp) < minA){
			 	 minA = Math.round(imp);
			 	 arr = [];
			 	 arr.push(i);    	 	 
    	 	 } else if (Math.round(imp) == minA) {
				 arr.push(i);    	 	 
    	 	 }
    	 }
    	 else if(a == imp){
		 	 document.getElementsByClassName("tRowOtherH")[7].getElementsByTagName("td")[i].innerHTML = Math.round(imp) + "/10";
		 	 hca += Math.round(imp);
		 	 if (Math.round(imp) < minA){
			 	 minA = Math.round(imp);
			 	 arr = [];
			 	 arr.push(i);    	 	 
    	 	 } else if (Math.round(imp) == minA) {
				 arr.push(i);    	 	 
    	 	 }
    	 }
    	 else {
    	 	 document.getElementsByClassName("tRowOtherH")[7].getElementsByTagName("td")[i].innerHTML = Math.round(a) + "/10";
    	 	 hca += Math.round(a);
    	 	 if (Math.round(a) < minA){
			 	 minA = Math.round(a);
			 	 arr = [];
			 	 arr.push(i);    	 	 
    	 	 } else if (Math.round(a) == minA) {
				 arr.push(i);    	 	 
    	 	 }
    	 }
    }
    var minFinal = 10000;
    //(Your hospital performance period score – floor)/(National achievement threshold – floor)
    for (var i = 0; i < arr.length; i++) {
    	 if ((parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[arr[i]].value) - parseFloat(document.getElementsByClassName("tRowOtherH")[4].getElementsByTagName("td")[arr[i]].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherH")[3].getElementsByTagName("td")[arr[i]].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherH")[4].getElementsByTagName("td")[arr[i]].innerHTML)) < minFinal){
			 minFinal = (parseFloat(document.getElementById("row9").getElementsByClassName("form-control")[arr[i]].value) - parseFloat(document.getElementsByClassName("tRowOtherH")[4].getElementsByTagName("td")[arr[i]].innerHTML)) / (parseFloat(document.getElementsByClassName("tRowOtherH")[3].getElementsByTagName("td")[arr[i]].innerHTML) - parseFloat(document.getElementsByClassName("tRowOtherH")[4].getElementsByTagName("td")[arr[i]].innerHTML));
    	 }
 	 }
 	 var HDS = ((20 * minFinal) - 0.5) + hca;
 	 dom_scores.push(HDS * .25);
 	 for (var c = 0; c < 4; c++) {
	 	  	 tps += dom_scores[c];
 	 }
 	 var twopercent = parseFloat(document.getElementById('baseBox').value) * 0.02;
     var after_sub = parseFloat(document.getElementById('baseBox').value) - twopercent;
 	 var emr = parseFloat(document.getElementById('baseBox').value);
     console.log("emr: " + emr);
     var amr = after_sub + (twopercent * (tps / 100));
 	 document.getElementsByClassName("tRowOtherV")[1].getElementsByTagName("td")[0].innerHTML = "$" + (twopercent * (tps / 100)).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
     document.getElementsByClassName("tRowOtherV")[2].getElementsByTagName("td")[0].innerHTML = "$" + amr.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function whatif_sequence() {
    $('#loadButton').hide();
    $('#whatIfButton').hide();
    $('#submitButton').css('display', 'inline');
    $('.ayyyyyyy').hide();
    $('.form-control1').show();
    
//     $('#row1 td').html("<input name='baseR' class='form-control' id='baseBox'>");
    
//     var baselineId = ['PSI-90B', 'PC-01B', 'CLABSIB', 'CAUTIB', 'HAI-3B', 'HAI-4B', 'MRSAB', 'CDIB'];
//     var performanceId = ['PSI-90P', 'PC-01P', 'CLABSIP', 'CAUTIP', 'HAI-3P', 'HAI-4P', 'MRSAP', 'CDIP'];
//     
//     for (var i = 0; i < baselineId.length; i++) {
//         document.getElementById('row2').getElementsByTagName('td')[i].innerHTML = "<?php echo Form::input('" + baselineId[i] + "', '', array('class' => 'form-control', 'id' => 'test'))?>";
//         document.getElementById('row3').getElementsByTagName('td')[i].innerHTML = "<?php echo Form::input('" + performanceId[i] + "', '', array('class' => 'form-control', 'id' => 'test'))?>";
//     }
//     
//     var baselineId = ['MORT-30-AMIB', 'MORT-30-HFB', 'MORT-30-PNB'];
//     var performanceId = ['MORT-30-AMIP', 'MORT-30-HFP', 'MORT-30-PNP'];
//     
//     for (var i = 0; i < baselineId.length; i++) {
//         document.getElementById('row4').getElementsByTagName('td')[i].innerHTML = "<?php echo Form::input('" + baselineId[i] + "', '', array('class' => 'form-control', 'id' => 'test'))?>";
//         document.getElementById('row5').getElementsByTagName('td')[i].innerHTML = "<?php echo Form::input('" + performanceId[i] + "', '', array('class' => 'form-control', 'id' => 'test'))?>";
//     }
}

function whatif_save() {

}
