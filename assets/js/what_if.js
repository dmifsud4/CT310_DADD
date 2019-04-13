$('#whatif').click(function() {

for (var domain in hospital) {
for (var measure in hospital[domain]) {
  if (typeof hospital[domain][measure] === 'object') {
    var m = hospital[domain][measure];
    m.ba = parseFloat($('#'+m.constructor.name+'ba').val());
    m.pe = parseFloat($('#'+m.constructor.name+'pe').val());
    m.ac = ap(m.pe,m.th,m.be);
    $('#'+m.constructor.name+'ac').html(m.ac);
    m.im = ip(m.pe,m.ba,m.be);
    $('#'+m.constructor.name+'ip').html(m.ip);
    m.me =  me(m.ac,m.im);
    $('#'+m.constructor.name+'me').html(m.me);
    hospital[domain].sum += m.me;
  }
}
var d = hospital[domain];
if (typeof d === 'object') {
  if (d.constructor.name == "hc") {

  }
d.uds = (d.sum / (10 * d.count)) * 100;
d.wds = d.uds * .25;
hospital.tps += d.wds;
}
}

var bmr = parseFloat($('#bmr').val());
var tp = bmr * 0.02;
var as = bmr - tp;
var vbp = tp * (hospital.tps / 100);
console.log(vbp);
$('#vbp').html(vbp);
var amr = as + (tp * (hospital.tps / 100));
$('#amr').html(amr);

var hds = ((20 * minFinal) - 0.5) + hca;
 dom_scores.push(HDS * .25);

function ap(ppr, at, be) { // achievement points
  if (ppr => be) {
  return 10;
} else if (ppr < at) {
    return 0;
  } else
  console.log("called");
  return Math.round((9*(ppr-at/be-at))+0.5);
}

function ip(ppr, ba, be) { // improvement points
  if (ppr => be) {
  return 9;
} else if (ppr <= ba) {
    return 0;
  } else
  return Math.round((10*(ppr-ba/be-ba))+0.5);
}

function me(ac, im) { // measure
  if (ac > im) {
    return ac;
  } else {
    return im;
  }
}

});
