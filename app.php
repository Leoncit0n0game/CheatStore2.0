class App {

    public function __construct() {

        if(isset($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = null:
        }

        if (empty($url)) {
            require_once "controller/homepage.php";
            $controller = new homepage();
        }

        if(file_exists($url)) {
            require_once $url;
            $url = explode('/', $url);
            $controller = new $url[1];

            $nparam = sizeof($url);
            if($nparam > 1) {
                for($i; $i<=$nparam ;$i++) {
                    array_push($param, $url[$i])
                }
                $controller->{$url[1]}($param);
            }
        } else {
            $controller = new errores();
        }


    }

}