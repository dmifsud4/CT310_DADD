/*
 Load Button Stuff:
 */

function load_choosefile(str) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("filler").innerHTML = str + this.responseText + "</select>";
        }
    };
    xmlhttp.open("GET", "/~dofe6096/ct310/m2/XMLSaves/script.php", true);
    xmlhttp.send();
}

function load_sequence() {
    var str = "<button id='loadButton' name='load' onclick='load_xml()'>Load File</button><select id='dropDown'>";
    load_choosefile(str);
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
    xhttp.open("GET", "/~dofe6096/ct310/m2/XMLSaves/" + $("#dropDown option:selected").text(), true);
    xhttp.send();
}

function load_safety(xmlDoc, tableType) {
    var x = xmlDoc.getElementsByTagName(tableType)[0].getElementsByTagName("CATEGORY");
    var row = document.getElementsByClassName("tRowOtherS");
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
        for (var j = 0; j < row[i].getElementsByTagName("td").length; j++) {
            row[i].getElementsByTagName("td")[j].innerHTML = x[i].children[j+1].childNodes[0].nodeValue;
        }
    }
}

/*
 What If Button Stuff:
 */

//TODO:
function whatif_calculate() {
    $('#submitButton').hide();
    $("#save_button").css('display', 'inline');
    $('#whatIfContainer').css('display', 'inline-block');
    
    
}

function whatif_sequence() {
    $('#loadButton').hide();
    $('#whatIfButton').hide();
    $('#submitButton').css('display', 'inline');
    
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
