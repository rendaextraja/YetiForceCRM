<?php
/**
 * The file contains: Class to change the payment status of a sales invoice.
 *
 * @package Model
 *
 * @copyright YetiForce S.A.
 * @license YetiForce Public License 5.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author Arkadiusz Adach <a.adach@yetiforce.com>
 */

/**
 * Class to change the payment status of a sales invoice.
 */
class PaymentsIn_FinvoicePaymentStatus_Model extends PaymentsIn_PaymentStatus_Model
{
	/** {@inheritdoc} */
	protected static $moduleName = 'FInvoice';

	/** {@inheritdoc} */
	protected static $fieldPaymentStatusName = 'payment_status';

	/** {@inheritdoc} */
	protected static $fieldPaymentSumName = 'payment_sum';

	/** {@inheritdoc} */
	protected static $relatedRecordIdName = 'finvoiceid';
}
