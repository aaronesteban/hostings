<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property Servicio $Servicio
 */
class Factura extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'pagado';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'pagado' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'pvp' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Servicio' => array(
			'className' => 'Servicio',
			'foreignKey' => 'servicio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	/**
	 * afterFind callback
	 *
	 * @param $results array
	 * @param $primary boolean
	 * @return mixed
	 */
	public function afterFind($results, $primary = false) {

		foreach($results as &$factura) {
			if (!empty($factura['Factura']['pvp'])) {
				$iva = $factura['Factura']['pvp'] * $factura['Factura']['iva'] / 100;
				$irpf = $factura['Factura']['pvp'] * $factura['Factura']['irpf'] /100;
				$total = $factura['Factura']['pvp'] + $iva - $irpf;

				$factura['Factura']['precio_iva'] = $iva;
				$factura['Factura']['precio_irpf'] = $irpf;
				$factura['Factura']['precio_total'] = $total;
			}

		}

		return $results;
	}
	

	public function getLastInvoiceNum(){

		$num = $this->find('first', array(
			'contain' => array(),
			'conditions' => array('Factura.pagado' => 1),
			'order' => array('Factura.invoice_num' => 'desc'),
			'fields' => array('Factura.invoice_num'),
		));
		$num = $num['Factura']['invoice_num'];
		
		if (!$num) {
			return 0;
		}
		return $num;

	}
}
