<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    
    use App\Form\AuthorForm;

    use App\Entity\AuthorProfile;
    // class controller for RegisterController
    class RegisterController extends AbstractController {

        /**
         * @Route("/register-1", name="register")
         */
        
        public function register(Request $request) // default id value
        {

            $AuthorProfile = new AuthorProfile();
            $form = $this->createForm(AuthorForm::class, $AuthorProfile);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){

                $AuthorProfile = $form->getData();

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager-> persist($AuthorProfile);
                $entityManager -> flush();

                return $this -> redirectToRoute('index');


            }
            
            // create a model
            $model = array('form' => $form->createView());

            //identify the twig template
            $view = 'register.html.twig';
            
            
            // return the twig template
            return $this->render($view, $model);



        }

    }

?>