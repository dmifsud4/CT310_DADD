<?php
class Presenter_Report extends Presenter
{

  public function view()
    {

      $this->headers=array("Measures","Achievement Threshold","Benchmark","Baseline Rate","Performance Rate","Achievement Points", "Improvement Points","Measure Score");

      $this->domains=array(
        "sa"=>array(
          "name"=>"Saftey",
          "measures"=>array(
            "psi90"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai1"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai2"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai3"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai4"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai5"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "hai6"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
            "pc01"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
            )
          ),
          "cl"=>array(
            "name"=>"Clinical Care",
            "measures"=>array(
              "mort30ami"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
              "mort30hf"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1),
              "mort30pn"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
              )
            ),
            "ef"=>array(
              "name"=>"Efficiency",
              "measures"=>array(
                "mspb1"=>array("th"=>0.369,"be"=> 0,"ba"=> 1,"pe"=> 1,"ac"=> 1,"im"=> 1,"me"=> 1)
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

      //$this->data = array();
      //$data['hospital'] = Model_Hospital::find(50071);
  		//$this->data['main'] =  View::forge('m3/report/main', $data);
  		//$data['saftey'] =  View::forge('m3/report/saftey', $data);
  		//$this->content = View::forge('report', $data);
      //$this->measure = array("PSI-90","PC-01","CLABSI","CAUTI","HAI-3","HAI-4","MRSA","CDI");

    }
}
