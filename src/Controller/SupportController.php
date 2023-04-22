<?php

namespace App\Controller;

use App\Entity\User;
use App\Dto\Notification\SupportMailTemplateDto;
use App\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\NotificationService;
use App\Traits\AuthTrait;
use App\Traits\EntityTrait;
use App\Types\SupportTemplateType;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Service\Attribute\Required;
use Throwable;

class SupportController extends AbstractController
{
    use AuthTrait;
    use EntityTrait;

    private const SUPPORT_TEMPALTE_FORM = 'support_template';

    private NotificationService $notificationService;
    
    #[Route(path: '/support', name: 'support.client')]
    public function viewSupport(Request $request): Response
    {
        try {

            /** @var User $auth */
            $auth = $this->getAuth();
            
            $supportMailTemplate = new SupportMailTemplateDto();
            $supportMailTemplate->setMailFrom($auth->getEmail());

            $form = $this->createForm(SupportTemplateType::class, $supportMailTemplate, [
                'action' => $this->generateUrl('support.create'),
                'method' => 'POST',
            ]);
            
            return $this->render(
                'support/support.html.twig',
                [
                  'form' => $form->createView(),
                ]
            );

        } catch (Throwable $t) {
                return new JsonResponse($t->getMessage());
        } 
    }

    #[Route(path: '/submit-support', name: 'support.create', methods: ['POST'])]
    public function postSupport(Request $request): Response
    {
        try {
            $supportTemplateDto = new SupportMailTemplateDto($request->request->all(self::SUPPORT_TEMPALTE_FORM));
            $this->notificationService->sendSupportMail($supportTemplateDto);
            
            /** @var User $auth */
            $auth = $this->getAuth();
            
            $contact = new Contact();
            $contact
            ->setIssuer($auth)
            ->setIssue($supportTemplateDto->getIssue())
            ->setContent($supportTemplateDto->getContent())
            ->setSent(true)
            ->setIssuedDate(new DateTime());

            $this->getEntityManager()->persist($contact);
            $this->getEntityManager()->flush();

            $this->addFlash('success', 'Support sheet sent  successfully');
            return $this->redirectToRoute('support.client');
            
        } catch (Throwable $t) {
            return new JsonResponse($t->getMessage());

            $this->addFlash('error', $t->getMessage());
            return $this->redirectToRoute('support.client');
        }        
    }

    #[Required]
    public function setNotificationService(NotificationService $notificationService): void
    {
        $this->notificationService = $notificationService;
    }
}