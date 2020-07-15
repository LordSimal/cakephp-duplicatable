<?php
declare(strict_types=1);

namespace TestApp\Model\Table;

use Cake\ORM\Table;

class InvoiceItemsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->hasMany('InvoiceItemProperties', [
            'className' => 'TestApp\Model\Table\InvoiceItemPropertiesTable',
        ]);
        $this->hasMany('InvoiceItemVariations');
    }
}
