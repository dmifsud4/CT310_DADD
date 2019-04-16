<?php
class Presenter_Report extends Presenter
{

  public function view()
    {

      $this->headers=array("Achievement Threshold","Benchmark","Baseline Rate","Performance Rate","Achievement Points", "Improvement Points");


      //$this->hospital = Model_Hospital::find(50071, array('related' => array('safety','care','efficiency','hcahp')));

      $this->user = Model_User::find(1, array('related' => array('senarios' => array('related' => array('comments')))));

      $this->domains=array(
        "sa"=>array(
          "name"=>"Saftey",
          "dkey"=>"safety",
          "measures"=>array(
            "psi90"=>array("name"=>"PSI-90","at"=>0.964542,"be"=> 0.709498),
            "hai1"=>array("name"=>"HAI-1","at"=>0.369,"be"=> 0),
            "hai2"=>array("name"=>"HAI-2","at"=>0.906,"be"=> 0),
            "hai3"=>array("name"=>"HAI-3","at"=>0.824,"be"=> 0),
            "hai4"=>array("name"=>"HAI-4","at"=>0.71,"be"=> 0),
            "hai5"=>array("name"=>"HAI-5","at"=>0.767,"be"=> 0),
            "hai6"=>array("name"=>"HAI-6","at"=>0.805,"be"=> 0),
            "pc01"=>array("name"=>"PC-01","at"=>0.020408,"be"=> 0)
            )
          ),
          "cl"=>array(
            "name"=>"Clinical Care",
            "dkey"=>"care",
            "measures"=>array(
              "mort30ami"=>array("name"=>"MORT-30-AMI","at"=>0.850916,"be"=> 0.873053),
              "mort30hf"=>array("name"=>"MORT-30-HF","at"=>0.883421,"be"=> 0.907656),
              "mort30pn"=>array("name"=>"MORT-30-PN","at"=>0.88286,"be"=> 0.9079)
              )
            ),
            "ef"=>array(
              "name"=>"Efficiency",
              "dkey"=>"efficiency",
              "measures"=>array(
                "mspb1"=>array("name"=>"MSPB-1","at"=>0.985777,"be"=> 0.832678)
                )
              ),
              "hc"=>array(
                "name"=>"HCAHPS",
                "dkey"=>"hcahp",
                "measures"=>array(
                  "cwn"=>array("name"=>"Communication with Nurses","at"=>78.52,"be"=> 86.68,"fl"=>55.27),
                  "cwd"=>array("name"=>"Communication with Doctors","at"=>80.44,"be"=> 88.51,"fl"=>57.39),
                  "rohs"=>array("name"=>"Hospital Staff Responsiveness","at"=>65.08,"be"=> 80.35,"fl"=>38.4),
                  "ct"=>array("name"=>"Care Transition","at"=>51.45,"be"=> 62.44,"fl"=>25.21),
                  "cam"=>array("name"=>"Medicinal Communication","at"=>63.37,"be"=>73.66,"fl"=>43.43),
                  "caqohe"=>array("name"=>"Cleanliness and Quietness","at"=>65.6,"be"=>79,"fl"=>40.05),
                  "di"=>array("name"=>"Discharge Information","at"=>86.6,"be"=> 91.63,"fl"=>62.25),
                  "oroh"=>array("name"=>"Overall Hospital Rating","at"=>70.23,"be"=>84.58,"fl"=>37.67)
                  )
                )
      );

    }
}
