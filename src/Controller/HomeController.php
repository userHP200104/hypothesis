<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Entity\User;
    // class controller for HomeController
    class HomeController extends AbstractController {

        /**
         * @Route("/", name="index")
         */
        
        public function index() // default id value
        {

            // create a model
            $model = array();

            //identify the twig template
            $view = 'home.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

    }

?>