<?php
    namespace Model\php;
    class chk{  
        public function __construct(){
            $file = "";
            $dir = "";
            $url = "";
            $msg = "";
            $class_name = "";
        }
        public function url($url){
            $roots = explode("-", $url);
            return $roots;
        }
        public function success(){
            ?>
                    <div class="alert alert-success notification col-md-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                      opération réussie
                    <div></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active notification-progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                    <span class="sr-only">100% Complete</span>
                    </div>
                    </div>
                   
                   <script>
                        for(i=0;i<10;i++){
                        setInterval(function(){
                        i = i+10
                        var u = i+"%";
                        not.css('width', u);
                        }, 1000)
                        }
                    setTimeout(() => {
                    $('.close').click();
                    }, 1500);
                    </script>
                    </div>
            <?php
        }

        public function send_notification($msg){
            $insert = $db->prepare("INSERT INTO notifications VALUES(NULL,'$msg',NOW(),0)");
            $insert->execute();
        }

        public function alert(){
            ?>
                    <div class="alert alert-danger notification col-md-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                      alerte
                    <div></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active notification-progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                    <span class="sr-only">100% Complete</span>
                    </div>
                    </div>
                   
                   <script>
                        for(i=0;i<10;i++){
                        setInterval(function(){
                        i = i+10
                        var u = i+"%";
                        not.css('width', u);
                        }, 1000)
                        }
                    setTimeout(() => {
                    $('.close').click();
                    }, 1500);
                    </script>
                    </div>
            <?php
        }

        public function classLoad($class_name){
            $class_dir = "../../ressources/contents/define_zone/class/".$class_name.".class.php";
            require $class_dir;
        }

        public function classLoader($class_name){
            $class_dir = "ressources/contents/define_zone/class/".$class_name.".class.php";
            require $class_dir;
        }

        public function hder(){
            define('WP_DEBUG', false);
            ini_set('display_errors','Off');
            ini_set('error_reporting', E_ALL );
            define('WP_DEBUG', false);
            define('WP_DEBUG_DISPLAY', false);
        }
        /*
        public function autoLoad(){
            $auto = "../../vendor/autoload.php";
            require $auto;
        }
        */



        public function notification($msg){
            ?>
                    <div class="alert alert-success notification col-md-2" role="alert">
                      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                      <?=$msg?>
                    <div></div>
                    <div class="progress">
                    <div class="progress-bar progress-bar-striped active notification-progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
                    <span class="sr-only">100% Complete</span>
                    </div>
                    </div>
                   
                   <script>
                        for(i=0;i<10;i++){
                        setInterval(function(){
                        i = i+10
                        var u = i+"%";
                        not.css('width', u);
                        }, 1000)
                        }
                    setTimeout(() => {
                    $('.close').click();
                    }, 1500);
                    </script>
                    </div>
            <?php
        }
        
        /*
        public function rt(){
            $root = "/";
            return $root;
        }

        public function dft(){
            return 'https://dr-karamoko.000webhostapp.com/home/';
        }
        */
        public function new_session(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
          }
        }

        public function alreadyConnected(){
            if(isset($_SESSION['mstx_usr_2020'])){
                redirect_js(chk::rt().'profile_page1/', 0);
              }
        }

        public function forceConnect(){
            if(!isset($_SESSION['mstx_usr_2020'])){
                redirect_js(chk::rt().'login_u/', 0);
              }
        }

        public function dft(){
            return '/willy/home/';
        }

        public function rt(){
            $roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";$roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";
            return $root;
        }
        

        public function vd_chk($dir, $file){
            $roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";$roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";
            return $root.'vendor/'.$dir.'/'.$file;
        }
        public function img_chk($dir, $file){
            $roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";$roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";
            return $root.'ressources/media/'.$dir.'/'.$file;
        }
        public function cp_chk($dir, $file){
            $roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";$roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";
            return $root.'ressources/public/'.$dir.'/'.$file;
        }
        public function lba_chk($dir, $file){
            $roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";$roots = explode("/", $_SERVER ['PHP_SELF']);
            $root = "/".$roots[1]."/";
            return $root.$dir.'/'.$file;
        }
    }
?>