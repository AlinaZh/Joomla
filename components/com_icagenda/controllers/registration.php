<?php
/**
 *------------------------------------------------------------------------------
 *  iCagenda v3 by Jooml!C - Events Management Extension for Joomla! 2.5 / 3.x
 *------------------------------------------------------------------------------
 * @package     com_icagenda
 * @copyright   Copyright (c)2012-2016 Cyril Rezé, Jooml!C - All rights reserved
 *
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 * @author      Cyril Rezé (Lyr!C)
 * @link        http://www.joomlic.com
 *
 * @version     3.6.5 2016-11-08
 * @since       3.6.0
 *------------------------------------------------------------------------------
*/

// No direct access to this file
defined('_JEXEC') or die();

require_once JPATH_COMPONENT . '/controller.php';

/**
 * Registration controller class for Users.
 *
 * @since  3.6.0
 */
class iCagendaControllerRegistration extends iCagendaController
{
	/**
	 * Method to register a user.
	 *
	 * @return  boolean  True on success, false on failure.
	 *
	 * @since   3.6.0
	 */
	public function register()
	{
		// Check for request forgeries.
//		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// If registration is disabled - Redirect to login page.
//		if (JComponentHelper::getParams('com_users')->get('allowUserRegistration') == 0)
//		{
//			$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));

//			return false;
//		}

		$app	= JFactory::getApplication();
		$id		= $app->input->getInt('eventID');

		$model	= $this->getModel('Registration');

		// Get the user data.
		$requestData	= version_compare(JVERSION, '3.0', 'lt')
						? JRequest::getVar('jform', array(), 'array')
						: $this->input->post->get('jform', array(), 'array');

		// Validate the posted data.
		$form	= $model->getForm();

		if ( ! $form)
		{
			JError::raiseError(500, $model->getError());

			return false;
		}

		$data	= $model->validate($form, $requestData);

		// Check for validation errors.
		if ($data === false)
		{
			// Get the validation messages.
			$errors	= $model->getErrors();

			// Push up to five validation messages out to the user.
			for ($i = 0, $n = count($errors); $i < $n && $i < 5; $i++)
			{
				if ($errors[$i] instanceof Exception)
				{
					$app->enqueueMessage($errors[$i]->getMessage(), 'warning');
				}
				else
				{
					$app->enqueueMessage($errors[$i], 'warning');
				}
			}

			// Save the data in the session.
			$app->setUserState('com_icagenda.registration.data', $requestData);

			// Redirect back to the registration screen.
			$this->setRedirect(JRoute::_('index.php?option=com_icagenda&view=registration&id=' . $id, false));

			return false;
		}

		// Set data to user State
//		$app->setUserState('com_icagenda.registration.data', $requestData);

		// Attempt to save the data.
		$return	= $model->register($data);

		// Check for errors.
		if ($return === false)
		{
			// Save the data in the session.
			$app->setUserState('com_icagenda.registration.data', $data);

			// Redirect back to the edit screen.
			$this->setMessage($model->getError(), 'warning');
			$this->setRedirect(JRoute::_('index.php?option=com_icagenda&view=registration&id=' . $id, false));

			return false;
		}

		// Flush the data from the session.
		$app->setUserState('com_icagenda.registration.data', null);

		// Redirect to the profile screen.
//		if ($return === 'payment')
//		{
//			$this->setMessage(JText::_('COM_USERS_REGISTRATION_COMPLETE_VERIFY'));
//			$this->setRedirect(JRoute::_('index.php?option=com_icagenda&view=registration&layout=actions', false));
//		}
//		else
		if (in_array('complete', $return))
		{
			$app->input->setVar('return', $return);
//			$this->setMessage(JText::_('COM_ICAGENDA_REGISTRATION_COMPLETE_VERIFY'));
			$this->setRedirect(JRoute::_('index.php?option=com_icagenda&view=registration&layout=complete'
				. '&regid=' . $return[1] . '&id=' . $id, false));
		}
		else
		{
			$this->setMessage(JText::_('COM_ICAGENDA_REGISTRATION_SAVE_SUCCESS'));
			$this->setRedirect(JRoute::_('index.php?option=com_users&view=login', false));
		}

		return true;
	}

	/**
	 * Return Ajax to get total of registered people for one event and one date
	 *
	 * @since 3.6.5
	 */
	public function ticketsBookable()
	{
		$jinput     = JFactory::getApplication()->input;

		$eventID    = $jinput->get('eventID', '');

		$regDate    = $jinput->get('regDate', '');
		$regDate    = str_replace('space', ' ', $regDate);
		$regDate    = str_replace('_', ':', $regDate);

		$typeReg    = $jinput->get('typeReg', '');
		$maxReg     = $jinput->get('maxReg', '');
		$tickets    = $jinput->get('tickets', '');

		icagendaAjax::getTicketsBookable($eventID, $regDate, $typeReg, $maxReg, $tickets);
	}
}
