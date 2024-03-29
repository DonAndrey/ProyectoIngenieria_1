<?php
	echo $this->Html->css('addresses');
	echo $this->Html->css('general');
	echo $this->Html->css('product');
    echo $this->Html->css('combos');

?>

<?php
// Si soy admin
if($user_id != null && $admin)
{
    ?>
    <nav class="navbar navbar-inverse" id="navigation-bar">
      <div class="container-fluid">
        <div>
          <ul class="nav nav-pills nav-justified" role="tablist">
            <li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
            <li class="active"><?php echo $this->Html->link('Combos', array('controller' => 'combos', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li> 
            <li><?php echo $this->Html->link('Orders', array('controller' => 'invoices', 'action' => 'my_invoices')); ?></li>
            <li><?php echo $this->Html->link('Valid Accounts', array('controller' => 'valid_accounts', 'action' => 'index')); ?></li>
          </ul>
        </div>
      </div>
    </nav>

	<hr>

	<div class="title">
	<h2> <?php echo __('Edit combo'); ?> </h2>
	</div>

	<hr>

    <div class="combos form">
    <?php echo $this->Form->create('Combo', array('class' => 'form-horizontal', 'role' => 'form')); ?>
        <fieldset>
        <div class="updateProduct_form">
        <?php
            echo $this->Form->input('id',
                array(
                    'div' => 'form-group',
                    'label' => array(
                        'class' => 'control-label col-sm-2'
                    )
                )
            );
            echo $this->Form->input('code',
                array(
                    'class' => 'input-combos',
                    'div' => 'form-group',
                    'autofocus' => 'autofocus',
                    'label' => array(
                        'class' => 'control-label col-sm-2'
                    )
                )
            );
            echo $this->Form->input('name',
                array(
                    'class' => 'input-combos',
                    'div' => 'form-group',
                    'label' => array(
                        'class' => 'control-label col-sm-2'
                    )
                )
            );
            echo $this->Form->input('discount',
                array(
                    'class' => 'input-combos',
                    'div' => 'form-group',
                    'label' => array(
                        'class' => 'control-label col-sm-2'
                    )
                )
            );
        ?>
        </div>
        </fieldset>
        <hr>
        <div id= "action" style="text-align:center">
            <?php echo $this->Form->submit(__('Change', true), array('name' => 'ok', 'div' => false)); ?>
            &nbsp;
            <?php echo $this->Form->submit(__('Cancel', true), array('name' => 'cancel', 'formnovalidate' => true, 'div' => false)); ?>
        </div>
        
        <hr>

        <fieldset>
        <?php
            echo $this->Form->input('Product',
                array(
                    //'div' => 'form-group',
                    'class' => 'checkB',
                    'multiple' => 'checkbox',
                    'label' => 'Modify product list',
                    /*'label' => array(
                        'class' => 'control-label col-sm-2'
                    )*/
                )
            );
        ?>
        </fieldset>

        <?php echo $this->Form->end(); ?>

        <hr>
        <p>
        <?php
            echo "<div id = 'goBack'>";
            echo $this->Html->link(
                '<span class="glyphicon glyphicon-arrow-left"></span> Go back',
                array('action' => 'index'),
                array('class' => 'btn btn-default', 'target' => '_self', 'escape' => false)
            );
            echo "</div>";
        ?>
        </p>

    </div>
    <?php
}
else
{
    ?> <h1> NOTHING TO SEE HERE... </h1> <?php
}
