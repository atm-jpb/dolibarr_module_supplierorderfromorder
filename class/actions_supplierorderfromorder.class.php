<?php
class ActionsSupplierorderfromorder
{	
	function formObjectOptions($parameters, &$object, &$action, $hookmanager) 
    {
    	global $langs;
		$langs->load('supplierorderfromorder@supplierorderfromorder');
        /*print_r($parameters); 
        echo "action: ".$action; 
        print_r($object);*/
 		if (in_array('ordercard',explode(':',$parameters['context'])) && $object->statut > 0)
        {
          ?>
          	<a id="listeProd" class="butAction" href="<?php echo dol_buildpath('/supplierorderfromorder/ordercustomer.php?id='.$_REQUEST['id'], 2); ?>"><?php echo $langs->trans('OrderToSuppliers'); ?></a>
           <script type="text/javascript">
				$(document).ready(function() {
					$('#listeProd').prependTo('div.tabsAction');
				})
			</script>

          <?php
        }
 
        $this->results=array('myreturn'=>$myvalue);
        $this->resprints='A text to show';
 
        return 0;
    }
}