<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Entity\User;
    // class controller for RegisterController
    class SignInController extends AbstractController {

        /**
         * @Route("/sign-in", name="sign_in")
         */
        
        public function signIn() // default id value
        {

            // create a model
            $model = array();

            //identify the twig template
            $view = 'signIn.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

    }

?>