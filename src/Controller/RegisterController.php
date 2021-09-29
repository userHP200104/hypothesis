<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Entity\User;
    // class controller for RegisterController
    class RegisterController extends AbstractController {

        /**
         * @Route("/register", name="register")
         */
        
        public function register() // default id value
        {

            // create a model
            $model = array();

            //identify the twig template
            $view = 'register.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

    }

?>