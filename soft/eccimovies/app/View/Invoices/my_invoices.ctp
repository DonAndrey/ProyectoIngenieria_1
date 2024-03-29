<?php echo $this->Html->css('addresses'); ?>
<?php echo $this->Html->css('general'); ?>
<?php

// Si soy cliente
if($user_id != null && ($admin || $custom))
{
	?>
    <?php
    if($custom)
    {
        ?>
        <nav class="navbar navbar-inverse" id="navigation-bar">
          <div class="container-fluid">
            <div>
              <ul class="nav nav-pills nav-justified" role="tablist">
                <li><?php echo $this->Html->link('Account Settings',array('controller' => 'users', 'action' => 'settings'), array('class' => 'nav-buttons')); ?></li>
                <li class="active"><?php echo $this->Html->link('Your Orders',array('controller' => 'invoices', 'action' => 'my_invoices'), array('class' => 'nav-buttons')); ?></li>
                <li><?php echo $this->Html->link('Payment Methods',array('controller' => 'paymentMethods', 'action' => 'index'), array('class' => 'nav-buttons')); ?></li>
                <li><?php echo $this->Html->link('Address Book', array('controller' => 'addresses', 'action' => 'index'), array('class' => 'nav-buttons')); ?></li>
                <li><?php
                    $options = array('controller'=>'wishlists','action' => 'edit', -1);
					if(isset($_SESSION['Auth']['User']['wishlist']))
                    {
                        $options = array('controller'=>'wishlists','action' => 'edit', $_SESSION['Auth']['User']['wishlist']);
					}
					echo $this->Html->link(	'Wishlist',
                                           $options,
                                           array('target' => '_self',
                                                 'escape' => false,
                                                 'class' => 'nav-buttons'
                                                )
                                          )
                ?>
              </li>  
              </ul>
            </div>
          </div>
        </nav>
        <?php
    }
    if($admin)
    {
        ?>
        <nav class="navbar navbar-inverse" id="navigation-bar">
          <div class="container-fluid">
            <div>
              <ul class="nav nav-pills nav-justified" role="tablist">
                <li><?php echo $this->Html->link('Products', array('controller' => 'products', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Combos', array('controller' => 'combos', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Categories', array('controller' => 'categories', 'action' => 'index')); ?></li>
                <li><?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index')); ?></li> 
                <li class="active"><?php echo $this->Html->link('Orders', array('controller' => 'invoices', 'action' => 'my_invoices')); ?></li>
                <li><?php echo $this->Html->link('Valid Accounts', array('controller' => 'valid_accounts', 'action' => 'index')); ?></li>
              </ul>
            </div>
          </div>
        </nav>
        <?php
    }
    ?>


	
	<div class="_index">
        <hr>
		<h2><?php 
            if($custom)
            {
                echo __('Your Orders');
            }
            if($admin)
            {
                echo __('Placed Orders');
            }
            ?>
        </h2>
        <hr>
		
		<table cellpadding="0" cellspacing="0">
				<tr>
                    <?php
                    if($admin)
                    {
                        ?>
                        <th>
						<?php echo ('Username '); ?>
                        </th>
                        <?php
                    }
                    ?>
                    <th>
						<?php echo ('Order Placed '); ?>
					</th>
					<th>
						<?php echo ('Order # '); ?>
					</th>
					<th>
						<?php echo ('Total '); ?>
					</th>
                    <th>
						<?php echo ('Status '); ?>
					</th>
                    <th>
						<?php echo ('Details '); ?>
					</th>
				</tr>
            
                <?php
                if($custom)
                {
                    foreach ($historicInvoices as $hInvoice):
                    if( $hInvoice['HistoricInvoice']['user_id'] === $user_id)
                    {
                        ?>
                        <tr>
                            <td>
                            <?php
                            echo $hInvoice['HistoricInvoice']['invoice_date'];
                            ?>
                            </td>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['id']; ?>
                            </td>
                            <td>
                            <?php echo '$ '.$hInvoice['HistoricInvoice']['total']; ?>
                            </td>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['invoice_status']; ?>
                            </td>
                            <td>
                            <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>',
                                                         array('action' => 'view_invoice', $hInvoice['HistoricInvoice']['id']),
                                                         array('escape' => false)
                                                        );
                            ?>
                            </td>
                        </tr>
                        <?php
                    }
                    endforeach;
                    unset($hInvoice);
                }
                if($admin)
                {
                    foreach ($historicInvoices as $hInvoice): ?>
                        <tr>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['user_first_name'] . ' ' . $hInvoice['HistoricInvoice']['user_last_name']; ?>
                            </td>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['invoice_date'];?>
                            </td>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['id']; ?>
                            </td>
                            <td>
                            <?php echo '$ '.$hInvoice['HistoricInvoice']['total']; ?>
                            </td>
                            <td>
                            <?php echo $hInvoice['HistoricInvoice']['invoice_status']; ?>
                            </td>
                            <td>
                            <?php echo $this->Html->link('<i class="glyphicon glyphicon-eye-open"></i>',
                                                         array('action' => 'view_invoice', $hInvoice['HistoricInvoice']['id']),
                                                         array('escape' => false)
                                                        );
                            ?>
                            </td>
                        </tr>
                        <?php
                    endforeach;
                    unset($hInvoice);
                }
                ?>   
                
			</table>
        </div>
            <hr>
        </div>
        <div class="center_pagination">
        <ul class="pagination">
            <li><?php echo $this->Paginator->numbers(array('separator' => '')); ?></li>
        </ul>
	<?php
}
// Si soy gerente
if($user_id != null && $manager)
{
	?> <h1> NOTHING TO SEE HERE... </h1> <?php
}
// Si no estoy loggeado
if($user_id == null)
{
	?> <h1> PLEASE LOGIN OR SIGNUP </h1> <?php
}
?>