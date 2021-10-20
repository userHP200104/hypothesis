<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session\Session;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    
    use App\Form\AuthorForm;
    use App\Form\SignInForm;

    use App\Entity\AuthorProfile;
    // class controller for RegisterController

    class FormController extends AbstractController {

        /**
         * @Route("/register", name="register")
         */
        public function register(Request $request)
        {

            $session = $request->getSession();

            
            $AuthorProfile = new AuthorProfile();
            $form = $this->createForm(AuthorForm::class, $AuthorProfile);
            $form->handleRequest($request);
            
            if($form->isSubmitted() && $form->isValid()){
                
                $AuthorProfile = $form->getData();
                $AuthorUsername = $form->get('authUserName')->getData();
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager-> persist($AuthorProfile);
                $entityManager -> flush();

                // $_SESSION['username'] = $AuthorUsername;
                $session->set('username', $AuthorUsername);


                return $this -> redirectToRoute('index');

            }
            
            // create a model
            $model = array('form' => $form->createView());

            //identify the twig template
            $view = 'register.html.twig';
            
            
            // return the twig template
            return $this->render($view, $model);



        }

         /**
         * @Route("/sign-in", name="sign_in", methods={"GET", "POST"})
         */
        public function signIn(Request $request):Response
        {

            $session = $request->getSession();

            $AuthorProfile = new AuthorProfile();
            $form = $this->createForm(SignInForm::class, $AuthorProfile);
            $form->handleRequest($request);

            
            if($form->isSubmitted() && $form->isValid()){
                
                $AuthorProfile = $form->getData();
                $AuthorUsername = $form->get('authUserName')->getData();
                $AuthorPassword = $form->get('authPassword')->getData();

                $repository = $this->getDoctrine()->getRepository(AuthorProfile::class);

                $checkLogin = $repository->findOneBy([
                    'authUserName' => $AuthorUsername,
                    'authPassword' => $AuthorPassword
                ]);


                if($checkLogin){
                    // $_SESSION['username'] = $AuthorUsername;
                    $session->set('username', $AuthorUsername);
                    
                }else{
                    $session->clear();
                    
                }
                
                return $this -> redirectToRoute('index');
                
            }

            // create a model
            $model = array(
                'form' => $form->createView(),
            );

            //identify the twig template
            $view = 'signIn.html.twig';


            // return the twig template
            return $this->render($view, $model);

        }

    }

?>