<?php

namespace FuelioImporter\Providers;

use FuelioImporter\Form\BaseForm;
use FuelioImporter\Form\Field\MDLNumericField;

class FuelLogForm extends BaseForm {

    public function __construct()
    {
        $this[] = new MDLNumericField('vehicle_id', array('min' => 1, 'label' => 'Export vehicle #', 'value' => 1));
    }

    public function getName()
    {
        return 'fuellog';
    }
}