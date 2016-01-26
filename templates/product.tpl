<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Inventory List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="text-align: left;width: 125px;">Item Name</th>
                        <th style="text-align: left;width: 125px;">Catalog No</th>
                        <th style="text-align: left; min-width: 25px;">Quantity in Shop</th>
                        <th style="text-align: left; min-width: 25px;">Quantity in Godown</th>
                        <th class="jettisonable">Price in &#8377;</th>
                        <th style="padding-right: 32px;" class="list-right">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if $products|@count }
                        {foreach $products as $val}
                            <tr>
                                <td style="text-align: center;">{$val.id}</td>
                                <td style="text-align: left;width: 125px;">{$val.name}</td>
                                <td style="text-align: left;width: 125px;">{$val.sku}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.qty_shop}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.qty_godown}</td>
                                <td style="text-align: center;" class="jettisonable">&#8377;&nbsp;{$val.price}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <a href="{$FRONTEND}inventory.php?action=edit&id={$val.id}"><img src="{$FRONTEND}skin/images/edit.png" /></a>&nbsp;
                                    <a href="{$FRONTEND}inventory.php?action=delete&id={$val.id}"><img src="{$FRONTEND}skin/images/delete.png" /></a>
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Where's your inventory?</p>
                                    <p>First, create some categories. Then enter your inventory items into those categories using the toolbar above.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: If you don't carry an inventory, go ahead and hide it by navigating to "Settings" (top right).<br>You'll have to be the administrator for your account though.</p>
                                </div>              
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$productcount}</strong> results in your database.</div>
            {if $productcount >10}
                <div class="pages">
                    <ul class="pagination">
                        {if ($page-1) > 0}
                            <li><a href="{$FRONTEND}inventory.php?page={$page-1}">«</a></li>
                        {/if}
                        {if ($page-2)>0}
                            <li><a href="{$FRONTEND}inventory.php?page={$page-2}">{$page-2}</a></li>
                        {/if}
                        {if ($page-1)>0}
                            <li><a href="{$FRONTEND}inventory.php?page={$page-1}">{$page-1}</a></li>
                        {/if}
                        <li><a href="javascript:void(0);" class="active">{$page}</a></li>
                        {if ($page+1)<=($pagecount)}
                            <li><a href="{$FRONTEND}inventory.php?page={$page+1}">{$page+1}</a></li>
                        {/if}
                        {if ($page+2)<=($pagecount)}
                            <li><a href="{$FRONTEND}inventory.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+1)<=($pagecount) && ($page+2)<=($pagecount)}
                            {if ($page+2) < $pagecount }
                                <li><a href="{$FRONTEND}inventory.php?page={$page+2}">»</a></li>
                            {/if}
                        {/if}
                        <li> of <a href="{$FRONTEND}inventory.php?page={$pagecount}">{$pagecount}</a></li>
                    </ul>
                </div>
            {/if}
        </div>
    </div>
</div>

