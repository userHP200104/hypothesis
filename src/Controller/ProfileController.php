<?php 

    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\Routing\Annotation\Route;

    use App\Form\AuthorForm;

    use App\Entity\Author;

    // class controller for RegisterController
    class ProfileController extends AbstractController {

        /**
         * @Route("/profile/{id}", name="profile_view")
         */
        
        public function viewProfile($id = null) // default id value
        {

            if($id == null){
                return $this->redirectToRoute("index");
            }

            // // acccess the wildcard value
            // $authorId = (int) $id;

            // // dummy set
            // $neil = new Author();
            // $neil -> setId(1);
            // $neil ->setAuthFirstName("Neil");
            // $neil ->setAuthLastName("Tyson");
            // $neil ->setAuthUsername("TheRealNDT");
            // $neil ->setAuthEmail("neildt@nasa.com");
            // $neil ->setAuthPhoneNumber("02348954322");
            // $neil ->setAuthPassword("theB3st");

            // $steven = new Author();
            // $steven -> setId(2);
            // $steven ->setAuthFirstName("Steven");
            // $steven ->setAuthLastName("Hawking");
            // $steven ->setAuthUsername("MRHAWKINGS");
            // $steven ->setAuthEmail("sthawking@haverd.edu");
            // $steven ->setAuthPhoneNumber("08934783923");
            // $steven ->setAuthPassword("mrBl4ckH0le");
            
            // $bill = new Author();
            // $bill -> setId(3);
            // $bill ->setAuthFirstName("Bill");
            // $bill ->setAuthLastName("Nye");
            // $bill ->setAuthUsername("BNTheScienceGuy");
            // $bill ->setAuthEmail("bntsg@pbs.com");
            // $bill ->setAuthPhoneNumber("076384783945");
            // $bill ->setAuthPassword("bnt5g123@!");

            // // Add Friends

            // $neil ->setQuestions(5);
            // $steven ->setQuestions(20);
            // $bill ->setQuestions(34);

            // $Authors = [$neil, $steven, $bill];


            // create a model
            $model = array();

            //identify the twig template
            $view = 'profile.html.twig';

            // loop through dummy data based on $id
            foreach($Authors as $Authors){
                if($id == $Authors->getId()){ // using getter
                    $model['Author'] = $Authors;
                }
            }

            // return the twig template
            return $this->render($view, $model);


            return new Response(
                'Profile Id based on Wildcard: ' . $id
            );

        }

    }

?>