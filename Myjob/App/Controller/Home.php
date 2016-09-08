<?php
	namespace App\Controller;
    use Core\Factory;
	class Home{
		public function index(){
			$db = Factory::getDatabase();
			$handle = $db->excute("select * from fortest");
			while($arr = mysqli_fetch_assoc($handle)){
				print_r($arr);
			}
			echo "this is home!";
		}
        public function orm(){
            $test = Factory::getTestfor(1);
            $test->name = 'weiwu3';
            echo 'ok';
        }

        public function testIterator(){
            $testIterator = new \Core\Allfortest();
            foreach($testIterator as $v){
                echo $v->name."<br/>";
                $v->number = rand(100,999);
            }
        }

        public function testObserver(){
            $ob2 = new Observer2();
            $ev = new \Core\Event();
            $ev->addObserver($ob2);
            $ev->notify();
        }

        public function souye(){
            if(isset($_GET['human']) && $_GET['human'] == 'male'){
                $stra = new \Core\FemaleStrategy();
            }else{
                $stra = new \Core\MaleStrategy();
            }
            $pa = new \App\Controller\Page();
            $pa->setStrategy($stra);
            $pa->index();
        }

        public function getDecor(){
            return "hello world";
        }
	}