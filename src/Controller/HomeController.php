<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;
    
    use App\Form\AskQuestionForm;
    
    use App\Entity\AuthorProfile;
    use App\Entity\Questions;
    // class controller for HomeController
    class HomeController extends AbstractController {

        /**
         * @Route("/", name="index")
         */
        public function index(Request $request) // default id value
        {

            $session = $request->getSession();
            $username = $session->get('username');

            // echo $username;
            // die;

            $Questions = new Questions();
            $form = $this->createForm(AskQuestionForm::class, $Questions);
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){

                $Questions = $form->getData();

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager-> persist($Questions);
                $entityManager -> flush();

                return $this -> redirectToRoute('index');

            }
            
            // create a model
            $model = array(
                'form' => $form->createView(),
                'username' => $username
            );


            //identify the twig template
            $view = 'home.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

        /**
         * @Route("/explore", name="explore")
         */
        public function explore() // default id value
        {

            // create a model
            $model = array();

            //identify the twig template
            $view = 'explore.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

        /**
         * @Route("/my-answers", name="myAnswers")
         */
        public function myAnswers() // default id value
        {

            // create a model
            $model = array();

            //identify the twig template
            $view = 'myAnswers.html.twig';


            // return the twig template
            return $this->render($view, $model);



        }

    }

?>