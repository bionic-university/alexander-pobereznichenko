<?php

namespace BionicUniversity\ProjectBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BionicUniversity\ProjectBundle\Entity\CompanyService;
use BionicUniversity\ProjectBundle\Form\CompanyServiceType;

/**
 * CompanyService controller.
 *
 */
class CompanyServiceController extends Controller
{

    /**
     * Lists all CompanyService entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BionicUniversityProjectBundle:CompanyService')->findAll();

        return $this->render('BionicUniversityProjectBundle:CompanyService:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CompanyService entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CompanyService();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('companyservice_show', array('id' => $entity->getId())));
        }

        return $this->render('BionicUniversityProjectBundle:CompanyService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a CompanyService entity.
    *
    * @param CompanyService $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CompanyService $entity)
    {
        $form = $this->createForm(new CompanyServiceType(), $entity, array(
            'action' => $this->generateUrl('companyservice_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CompanyService entity.
     *
     */
    public function newAction()
    {
        $entity = new CompanyService();
        $form   = $this->createCreateForm($entity);

        return $this->render('BionicUniversityProjectBundle:CompanyService:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CompanyService entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityProjectBundle:CompanyService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CompanyService entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BionicUniversityProjectBundle:CompanyService:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing CompanyService entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityProjectBundle:CompanyService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CompanyService entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BionicUniversityProjectBundle:CompanyService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CompanyService entity.
    *
    * @param CompanyService $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CompanyService $entity)
    {
        $form = $this->createForm(new CompanyServiceType(), $entity, array(
            'action' => $this->generateUrl('companyservice_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CompanyService entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BionicUniversityProjectBundle:CompanyService')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CompanyService entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('companyservice_edit', array('id' => $id)));
        }

        return $this->render('BionicUniversityProjectBundle:CompanyService:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CompanyService entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BionicUniversityProjectBundle:CompanyService')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CompanyService entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('companyservice'));
    }

    /**
     * Creates a form to delete a CompanyService entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('companyservice_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
