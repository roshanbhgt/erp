<div style="float:left;">
{if $action == 'dashboard'}
    <h2 style="color: #005985;padding: 5px 15px;">My Dashboard</h2>
{elseif $action == 'customer'}
<form accept-charset="utf-8" method="post" action="{$FRONTEND}customer.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Customer by Name or Email" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}customer.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Customer
</a>
{elseif $action == 'billing' }    
<a class="load-dialog button" href="{$FRONTEND}billinginfo.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Billing 
</a>
{elseif $action == 'contact' }    
<a class="load-dialog button" href="{$FRONTEND}account.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Contact 
</a>
{elseif $action == 'inventory' }
<form accept-charset="utf-8" method="post" action="{$FRONTEND}inventory.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Products by Name or Catalog No" name="keywords" />
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}inventory.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add Inventory Item
</a>
{elseif $action == 'purchase' }
<form accept-charset="utf-8" method="post" action="{$FRONTEND}purchasebills.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Purchase by Purchase #" name="keywords" />
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}purchasebills.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add Purchase Bill
</a>
{elseif $action == 'category' }   
<form accept-charset="utf-8" method="post" action="{$FRONTEND}category.php?action=search">
    <div class="input text">
        <input type="text" autocomplete="off" class="live-search autofocus" placeholder="Search Category by Name" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}category.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Add New Category
</a>
{elseif $action == 'order' }    
<form accept-charset="utf-8" method="post" action="{$FRONTEND}order.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Chalan #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}order.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create Delivery Chalan
</a>
{elseif $action == 'invoice' }    
<form accept-charset="utf-8" method="post" action="{$FRONTEND}invoice.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Invoice #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}invoice.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create New Invoice
</a>
{elseif $action == 'cashmemo' }    
<form accept-charset="utf-8" method="post" action="{$FRONTEND}cashmemo.php?action=search">
    <div class="input text">
        <input type="text" id="SearchKeywords" autocomplete="off" class="live-search autofocus" placeholder="Search by Invoice #" name="keywords">
    </div>
</form>
<a class="load-dialog button" href="{$FRONTEND}cashmemo.php?action=new">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Create Cash Memo
</a>
{elseif $action == 'report' }    
{literal}
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#from_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
            $("#to_date").datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd'
            });
        });
    </script>
{/literal}
<form accept-charset="utf-8" method="post" action="{$FRONTEND}report.php?action={$smarty.get.action}">
    <div class="input text" style="width:600px;margin:-5px">
        From&nbsp;<input type="text" name="from" id="from_date"/>&nbsp;&nbsp;
        To&nbsp;<input type="text" name="to" id="to_date"/>&nbsp;&nbsp; <button type="submit" name="action" value="financial" >Submit</button>
    </div>
</form>
{/if}
</div>
<div style="float:right;">
<a class="load-dialog button" href="javascript:void()" onclick="window.history.back();">
    <span style="font-size: 120%; color: #666; line-height: 16px;" class="icon-plus icon-font" aria-hidden="true">
    </span>Back
</a>
</div>