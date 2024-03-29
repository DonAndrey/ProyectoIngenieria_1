<?php echo $this->Html->css('addresses'); ?>
<?php echo $this->Html->css('signup'); 
echo $this->Html->css('general');?>
<?php
// Si soy administrador
if($user_id != null && $admin)
{ 	
	?>
    <nav class="navbar navbar-inverse" id="navigation-bar">
      <div class="container-fluid">
        <div>
          <ul class="nav nav-pills nav-justified" role="tablist">
            <li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Combos', array('controller' => 'combos', 'action' => 'index')); ?></li>
            <li class="active"><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li> 
            <li><?php echo $this->Html->link('Orders', array('controller' => 'invoices', 'action' => 'my_invoices')); ?></li>
            <li><?php echo $this->Html->link('Valid Accounts', array('controller' => 'valid_accounts', 'action' => 'index')); ?></li>
          </ul>
        </div>
      </div>
    </nav>
    <hr>

    <div class="title">
    <h2> <?php echo __('Add Subcategory'); ?> </h2>
    </div>

    <hr>

    <?php echo $this->Form->create('Subcategory'); ?>
    <div class="addCategory_form">
        <?php
            echo $this->Form->input(
                'subcategory_name',
                array(
                    'label' => 'Name',
                    'autofocus' => 'autofocus',
                    'placeholder' => 'Name of subcategory'
                )
            );
            echo $this->Form->input('category_id', array('label' => 'Under category'));
        ?>
    </div>
    <hr>
    <div id= "action" style="text-align:center">
        <?php echo $this->Form->submit(__('Add', true), array('name' => 'ok', 'div' => false)); ?>
        &nbsp;
        <?php echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel', 'formnovalidate' => true, 'div' => false)); ?>
    </div>
    <?php echo $this->Form->end(); ?>
    <?php
}
// Si no estoy loggeado o si no soy admin
else
{
	?> <h1> NOTHING TO SEE HERE... </h1> <?php
}
?>