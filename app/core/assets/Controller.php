<?php 
	class Controller{
		protected $class;

		public function __construct(){
			$this->class = strtolower(get_class($this));	
		}

		# Load model
		/* public function model($model, $class = ""){
			if (!strcmp($class, "")) $class = $this->class;
			require_once '../app/'. $class .'/model/' . $model . '.php';
			return new $model();
		} */

		# Load view
		public function view($view, $param = []){
			session_start();
            
            if (file_exists('../../app/entities/'. $this->class  .'/view/' . $view . '.php')){
                require_once '../../app/entities/'. $this->class  .'/view/' . $view . '.php';
            }
            else{
                require_once APP_ROUTE . '/main/view/public/404.php';
            }
			/* require_once APP_ROUTE . '/main/view/components/header.php'; */
			
			if(!Controller::authenticated()){
				/* require_once APP_ROUTE . '/main/view/components/top.php';   */
				
				if (file_exists('../app/entities/'. $this->class  .'/view/' . $view . '.php')){
					require_once '../app/entities/'. $this->class  .'/view/' . $view . '.php';
				}
				else{
					require_once APP_ROUTE . '/main/view/public/404.php';
				}

				/* require_once APP_ROUTE . '/main/view/components/bottom.php';  */
			}
			/* else{
				require_once APP_ROUTE . '/main/view/public/login.php';
			}
			
			require_once APP_ROUTE . '/main/view/components/footer.php'; */
		}

		public static function authenticated(){
			return (isset($_SESSION['username']));
		}
	}