<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Purchase List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left; min-width: 25px;">Purchase #</th>
                        <th>Name</th>
                        <th class="jettisonable">Total</th>
                        <th style="text-align: right;" class="jettisonable">Purchase Date</th>
                        <th style="text-align: right;" class="jettisonable">Created At</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if count($purchasebills) > 0}
                        {foreach $purchasebills as $val}
                            <tr>
                                <td style="text-align: left; min-width: 25px;">{$val.chalan}</td>
                                <td style="text-align: center;">{$val.name}</td>
                                <td style="text-align: center;">&#8377;&nbsp;{$val.total}</td>
                                <td style="text-align: right;">{$val.purchaseat}</td>
                                <td style="text-align: right;" class="jettisonable">{$val.createdat}</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                    <a href="{$FRONTEND}purchasebills.php?action=viewpurchase&id={$val.id}"><img src="{$FRONTEND}skin/images/info.png"  title="View Purchase" /></a> &nbsp;
                                    <a href="{$FRONTEND}purchasebills.php?action=edit&id={$val.id}"><img src="{$FRONTEND}skin/images/edit.png"  title="Edit Purchase" /></a> &nbsp;
                                    <a href="{$FRONTEND}purchasebills.php?action=deletepurchase&id={$val.id}"><img src="{$FRONTEND}skin/images/delete.png" title="Delete Purchase"/></a>
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;"><p style="font-weight:bold;font-size:14px;">Create a Purchase Bills.</p><p>It's how you replenish your stock.</p></div>              
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$purchasebills|@count}</strong> results in your database.</div>
            {if $purchasecount >10}
                <div class="pages">
                    <ul class="pagination">
                        {if ($page-1) > 0}
                            <li><a href="{$FRONTEND}purchasebills.php?page={$page-1}">«</a></li>
                        {/if}
                        {if ($page-2)>0}
                            <li><a href="{$FRONTEND}purchasebills.php?page={$page-2}">{$page-2}</a></li>
                        {/if}
                        {if ($page-1)>0}
                            <li><a href="{$FRONTEND}purchasebills.php?page={$page-1}">{$page-1}</a></li>
                        {/if}
                        <li><a href="javascript:void(0);" class="active">{$page}</a></li>
                        {if ($page+1)<=($pagecount)}
                            <li><a href="{$FRONTEND}purchasebills.php?page={$page+1}">{$page+1}</a></li>
                        {/if}
                        {if ($page+2)<=($pagecount)}
                            <li><a href="{$FRONTEND}purchasebills.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+1)<=($pagecount) && ($page+2)<=($pagecount)}
                            {if ($page+2) < $pagecount }
                                <li><a href="{$FRONTEND}purchasebills.php?page={$page+2}">»</a></li>
                            {/if}
                        {/if}
                        <li> of <a href="{$FRONTEND}purchasebills.php?page={$pagecount}">{$pagecount}</a></li>
                    </ul>
                </div>
            {/if}
        </div>
    </div>
</div>