<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session\Session;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Form\AuthorForm;

    use App\Entity\AuthorProfile;

    // class controller for RegisterController
    class ProfileController extends AbstractController {

        /**
         * @Route("/profile/{id}", name="profile_view")
         */
        public function profileView(Request $request, $id = null) // default id value
        {

            $session = $request->getSession();

            //added some error handling when an id is not supplied
            if($id == null){
                return $this->redirectToRoute('index');
            }

            //access the wildcard
            $authorId = (int) $id;
            
            //using the Entity & Doctrine to get our Database data
            $author = $this->getDoctrine()
             ->getRepository(AuthorProfile::class)
             ->find($authorId);

            //create a model
            $model = array('author' => $author);

            //return with twig template, specifying the view and data sent to the view
            return $this->render('profile.html.twig', $model);


        }

    }

?>