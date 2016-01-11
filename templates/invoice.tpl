<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Invoice List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left; min-width: 25px;">Invoice #</th>
                        <th>Email</th>
                        <th class="jettisonable">Date Issued</th>
                        <th style="text-align: right;" class="jettisonable">Order Total</th>
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
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;{$val.grandtotal|string_format:"%d"}</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                    {*{if $val.status == 'unpaid'}
                                        <a href="{$FRONTEND}invoice.php?action=paidinvoice&id={$val.id}&chalan_no={$val.chalan_no}"><img src="{$FRONTEND}skin/images/paid.png" title="Mark Invoice Paid"/></a>
                                    {/if}*}
                                    <a href="{$FRONTEND}invoice.php?action=viewinvoice&id={$val.id}"><img src="{$FRONTEND}skin/images/info.png"  title="View Invoice" /></a> &nbsp;
                                    <a href="javascript:void(0);" onclick="window.open('{$FRONTEND}invoice.php?action=printinvoice&id={$val.id}')"><img src="{$FRONTEND}skin/images/print.png" title="Print Invoice"/></a>
                                    <a href="{$FRONTEND}invoice.php?action=deleteinvoice&id={$val.id}&chalan_no={$val.chalan_no}"><img src="{$FRONTEND}skin/images/delete.png" title="Delete Invoice"/></a>
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
                <div class="pages">
                    <ul class="pagination">
                        {if ($page-1) > 0}
                            <li><a href="{$FRONTEND}invoice.php?page={$page-1}">«</a></li>
                        {/if}
                        {if ($page-2)>0}
                            <li><a href="{$FRONTEND}invoice.php?page={$page-2}">{$page-2}</a></li>
                        {/if}
                        {if ($page-1)>0}
                            <li><a href="{$FRONTEND}invoice.php?page={$page-1}">{$page-1}</a></li>
                        {/if}
                        <li><a href="javascript:void(0);" class="active">{$page}</a></li>
                        {if ($page+1)<=($pagecount)}
                            <li><a href="{$FRONTEND}invoice.php?page={$page+1}">{$page+1}</a></li>
                        {/if}
                        {if ($page+2)<=($pagecount)}
                            <li><a href="{$FRONTEND}invoice.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+1)<=($pagecount) && ($page+2)<=($pagecount)}
                            {if ($page+2) < $pagecount }
                                <li><a href="{$FRONTEND}invoice.php?page={$page+2}">»</a></li>
                            {/if}
                        {/if}
                        <li> of <a href="{$FRONTEND}invoice.php?page={$pagecount}">{$pagecount}</a></li>
                    </ul>
                </div>
            {/if}
        </div>
    </div>
</div>