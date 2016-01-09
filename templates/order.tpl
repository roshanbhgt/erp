<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Delivery Chalan List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left; min-width: 25px;">Chalan #</th>
                        <th>Email</th>
                        <th class="jettisonable">Date Issued</th>
                        <th style="padding-right: 32px;" class="list-right">Options</th>
                    </tr>
                </thead>
                <tbody>
                    {if count($orders) > 0}
                        {foreach $orders as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.status|ucfirst}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.chalan_no}</td>
                                <td style="text-align: center;">{$val.email}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="padding-right: 32px;text-align:center" class="list-right">
                                    <a href="{$FRONTEND}order.php?action=viewchalan&id={$val.id}"><img src="{$FRONTEND}skin/images/info.png"  title="View Chalan" /></a> &nbsp;
                                    <a href="javascript:void(0);" onclick="window.open('{$FRONTEND}order.php?action=printchalan&id={$val.id}')"><img src="{$FRONTEND}skin/images/print.png" title="Print Chalan"/></a>&nbsp;
                                    {if $val.status != 'invoiced'}<a href="{$FRONTEND}invoicechalan.php?action=invoice&id={$val.id}"><img src="{$FRONTEND}skin/images/invoice.png" title="Convert to Invoice"/></a>{/if}
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;"><p style="font-weight:bold;font-size:14px;">Create a Purchase Order.</p><p>It's how you replenish your stock.</p></div>              
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$ordercount}</strong> results in your database.</div>
            {if $ordercount >10}
                <div class="pagination">
                    <ul>
                        <li>
                            {if ($page-1) > 0}
                                <a href="{$FRONTEND}order.php?page={$page-1}">‹</a>
                            {/if}
                        </li>
                        <li><a href="{$FRONTEND}order.php?page={$page+1}">{$page+1}</a></li>
                        {if ($page+2)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}order.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+3)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}order.php?page={$page+3}">{$page+3}</a></li>
                        {/if}
                        {if ($page+4)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}order.php?page={$page+4}">{$page+4}</a></li>
                        {/if}
                        {if ($page+2)<=($ordercount/10) && ($page+3)<=($ordercount/10) && ($page+4)<=($ordercount/10)}
                            {if ($page+5) < $ordercount/10 }
                                <li><a href="{$FRONTEND}order.php?page={$page+5}">›</a></li>
                            {/if}                        
                        {/if}
                        <li>&nbsp; of <a href="{$FRONTEND}order.php?page={$ordercount/10}">{$ordercount/10}</a></li>

                    </ul>
                </div>
            {/if}
        </div>
    </div>
</div>