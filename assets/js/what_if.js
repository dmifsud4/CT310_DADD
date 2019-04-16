$('#whatif').click(function() {

for (var domain in hospital) {
  var cs = 10000;
for (var measure in hospital[domain]) {
  if (typeof hospital[domain][measure] === 'object') {
    var m = hospital[domain][measure];
    m.br = parseFloat($('#'+m.name+'_br').val());
    m.pr = parseFloat($('#'+m.name+'_pr').val());
    m.ap = ap(m.pr,m.at,m.be);
    $('#'+m.name+'_ap').html(m.ap+' out of 10');
    m.ip = ip(m.pr,m.br,m.be);
    $('#'+m.name+'_ip').html(m.ip+' out of 9');
    if (hospital[domain].name === 'hc') {
      m.cp = cp(m.pr,m.fl,m.at);
      cs = css(m.cp, cs)
      m.ds =  ms(m.ap,m.ip);
      $('#'+m.name+'_ds').html(m.ds);
      hospital[domain].sum += m.ds;
    } else {
      m.ms =  ms(m.ap,m.ip);
      $('#'+m.name+'_ms').html(m.ms);
      hospital[domain].sum += m.ms;
    }
  }
}
console.log(hospital[domain]);
var d = hospital[domain];
if (typeof d === 'object') {
  if (d.name === 'hc') {
    d.uds = ((20 * cs) - 0.5) + d.sum;


  } else {
    d.uds = (d.sum / (10 * d.count)) * 100;

  }
  d.wds = d.uds * .25;
  hospital.tps += d.wds;
 }
}

console.log(hospital);



var bmr = parseFloat($('#bmr').val());
var tp = bmr * 0.02;
var as = bmr - tp;
var vbp = tp * (hospital.tps / 100);
$('#vbp').html(vbp);
var amr = bmr + vbp;
$('#amr').html(amr);

function ap(ppr, at, be) { // achievement points
  if (ppr >= be) {
  return 10;
} else if (ppr < at) {
    return 0;
  } else
  return Math.round((9*((ppr-at)/(be-at))+0.5));
}

function ip(ppr, br, be) { // improvement points
  if (ppr >= be) {
  return 9;
} else if (ppr <= br) {
    return 0;
  } else
  return Math.round((10*((ppr-br)/(be-br))-0.5));
}

function ms(ac, im) { // measure
  if (ac > im) {
    return ac;
  } else {
    return im;
  }
}

function cp(ps,fl,at) {
  return (ps - fl) - (at - fl)
}

function css(cp,min) {
  if (cp < min) {
    return cp;
  } else {
    return min;
  }
}

});
