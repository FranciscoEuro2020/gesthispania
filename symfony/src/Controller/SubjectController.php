<?php
namespace App\Controller;
use App\Repository\SubjectRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SubjectController
 * @package App\Controller
 *
 * @Route(path="/api/")
 */
class SubjectController
{
    private $subjectRepository;

    public function __construct(SubjectRepository $subjectRepository)
    {
        $this->subjectRepository = $subjectRepository;
    }
    
    /**
     * @Route("subjects", name="get_all_subjects", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $clubs = $this->subjectRepository->findAll();
        $data = [];

        foreach ($clubs as $object) {
            $data[] = [
                'id' => $object->getId(),
                'name' => $object->getName(),
                'duration' => $object->getDuration()
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("subject", name="add_subject", methods={"GET"})
     */
    public function add(Request $request): JsonResponse
    {
        
        $name = $request->query->get('name');
        $duration = $request->query->get('duration');
        $credits = $request->query->get('credits');

        if (empty($name) || empty($duration) || empty($credits)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->subjectRepository->saveSubject($name, $duration,$credits);

        return new JsonResponse(['status' => 'Subject created!'], Response::HTTP_CREATED);
    }
      /**
     * @Route("subject/{id}", name="delete_subject", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    {
        
        $subject = $this->subjectRepository->findOneBy(['id' => $id]);

        $this->subjectRepository->removeSubject($subject);
           
        return new JsonResponse(['status' => 'Subject deleted'], Response::HTTP_OK);
    }
    /**
     * @Route("subject/{id}", name="update_subject", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $subject = $this->subjectRepository->findOneBy(['id' => $id]);
        $name = $request->query->get('name');
        if (empty($name)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }
          
        $subject->setName($name);
        $updatedClub = $this->subjectRepository->updateSubject($subject);
        $message='Subject updated!';
        
		return new JsonResponse(['status' => $message], Response::HTTP_OK);
    }
    //FIN API
    
}