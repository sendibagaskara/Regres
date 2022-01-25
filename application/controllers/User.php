<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['user'] = [
            ["id"=>"7","email" =>"michael.lawson@rumahweb.co.id","fisrtname"=>"Michael","lastname"=>"Lawson","avatar" =>"https://reqres.in/img/faces/7-image.jpg"],
            ["id"=>"8","email" =>"lindsay.ferguson@rumahweb.co.id","fisrtname"=>"Lindsay","lastname"=>"Ferguson","avatar" =>"https://reqres.in/img/faces/8-image.jpg"],
            ["id"=>"9","email" =>"tobias.funke@rumahweb.co.id","fisrtname"=>"Tobias","lastname"=>"Funke","avatar" =>"https://reqres.in/img/faces/9-image.jpg"],
            ["id"=>"10","email" =>"byron.fields@rumahweb.co.id","fisrtname"=>"Byron","lastname"=>"Fields","avatar" =>"https://reqres.in/img/faces/10-image.jpg"],
            ["id"=>"11","email" =>"george.edwards@rumahweb.co.id","fisrtname"=>"George","lastname"=>"Ewards","avatar" =>"https://reqres.in/img/faces/11-image.jpg"],
            ["id"=>"12","email" =>"rachel.howel@rumahweb.co.id","fisrtname"=>"Rachel","lastname"=>"Howel","avatar" =>"https://reqres.in/img/faces/12-image.jpg"],
        ];
        $this->load->view('user/home',$data);
    }

    public function view()
    {
        $data['user'] = [
            ["id"=>"7","email" =>"michael.lawson@rumahweb.co.id","fisrtname"=>"Michael","lastname"=>"Lawson","avatar" =>"https://reqres.in/img/faces/7-image.jpg"],
            ["id"=>"8","email" =>"lindsay.ferguson@rumahweb.co.id","fisrtname"=>"Lindsay","lastname"=>"Ferguson","avatar" =>"https://reqres.in/img/faces/8-image.jpg"],
            ["id"=>"9","email" =>"tobias.funke@rumahweb.co.id","fisrtname"=>"Tobias","lastname"=>"Funke","avatar" =>"https://reqres.in/img/faces/9-image.jpg"],
            ["id"=>"10","email" =>"byron.fields@rumahweb.co.id","fisrtname"=>"Byron","lastname"=>"Fields","avatar" =>"https://reqres.in/img/faces/10-image.jpg"],
            ["id"=>"11","email" =>"george.edwards@rumahweb.co.id","fisrtname"=>"George","lastname"=>"Ewards","avatar" =>"https://reqres.in/img/faces/11-image.jpg"],
            ["id"=>"12","email" =>"rachel.howel@rumahweb.co.id","fisrtname"=>"Rachel","lastname"=>"Howel","avatar" =>"https://reqres.in/img/faces/12-image.jpg"],
        ];
        $this->load->view('user/view',$data);
    }

    public function delete(){

        $data['user'] = [
            ["id"=>"7","email" =>"michael.lawson@rumahweb.co.id","fisrtname"=>"Michael","lastname"=>"Lawson","avatar" =>"https://reqres.in/img/faces/7-image.jpg"],
            ["id"=>"8","email" =>"lindsay.ferguson@rumahweb.co.id","fisrtname"=>"Lindsay","lastname"=>"Ferguson","avatar" =>"https://reqres.in/img/faces/8-image.jpg"],
            ["id"=>"9","email" =>"tobias.funke@rumahweb.co.id","fisrtname"=>"Tobias","lastname"=>"Funke","avatar" =>"https://reqres.in/img/faces/9-image.jpg"],
            ["id"=>"10","email" =>"byron.fields@rumahweb.co.id","fisrtname"=>"Byron","lastname"=>"Fields","avatar" =>"https://reqres.in/img/faces/10-image.jpg"],
            ["id"=>"11","email" =>"george.edwards@rumahweb.co.id","fisrtname"=>"George","lastname"=>"Ewards","avatar" =>"https://reqres.in/img/faces/11-image.jpg"],
            ["id"=>"12","email" =>"rachel.howel@rumahweb.co.id","fisrtname"=>"Rachel","lastname"=>"Howel","avatar" =>"https://reqres.in/img/faces/12-image.jpg"],
        ];
        
    }

}
