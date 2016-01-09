<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Customers Report for {$from} to {$to} </h2>
        </div>
        <div class="table-wrapper" style="padding: 0 10px">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left; min-width: 25px;">Account Name</th>
                        <th>Total Invoices</th>
                        <th class="jettisonable">Grand Total</th>
                        <th style="text-align: right;" class="jettisonable">Date Invoiced</th>
                    </tr>
                </thead>
                <tbody>
                    {if count($customers) > 0}
                        {foreach $customers as $val}
                            <tr>
                                <td style="text-align: left; min-width: 25px;">{$val.account_name}</td>
                                <td style="text-align: center;">{$val.orders}</td>
                                <td style="text-align: center;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;{$val.total|ceil}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">{$val.createdat|date_format}</td>
                            </tr>
                        {/foreach}
                    <tr style="border-top: solid 4px #CDCDCD; border-bottom: none;">
                            <td class="light-grey">Grand Total {$from} - {$to} :</td>
                            <td style="text-align: center;">{$totalorders}</td>           
                            <td style="padding-right: 10px;text-align: center;">&#8377;&nbsp;{$totalrevenue|ceil}</td>
                            <td></td>
                    </tr>
                    {else}
                        <tr style="border-bottom: none;">
                            <td style="padding: 15px 10px;" class="list-center" colspan="5">
                                <p style="color:#666;">Sorry, there were no customer purchased during this period of time.</p>
                                <p style="color:#666;" class="sm-grey">Tip: Try adjusting the Date Range on the right to go back further in history.</p>
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$customers|@count}</strong> results in your database.</div>
            {*{if $ordercount >10}
                <div class="pagination">
                    <ul>
                        <li>
                            {if ($page-1) > 0}
                                <a href="{$FRONTEND}invoice.php?page={$page-1}">‹</a>
                            {/if}
                        </li>
                        <li><a href="{$FRONTEND}invoice.php?page={$page+1}">{$page+1}</a></li>
                        {if ($page+2)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}invoice.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+3)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}invoice.php?page={$page+3}">{$page+3}</a></li>
                        {/if}
                        {if ($page+4)<=($ordercount/10)}
                        <li><a href="{$FRONTEND}invoice.php?page={$page+4}">{$page+4}</a></li>
                        {/if}
                        {if ($page+2)<=($ordercount/10) && ($page+3)<=($ordercount/10) && ($page+4)<=($ordercount/10)}
                            {if ($page+5) < $ordercount/10 }
                                <li><a href="{$FRONTEND}invoice.php?page={$page+5}">›</a></li>
                            {/if}                        
                        {/if}
                        <li>&nbsp; of <a href="{$FRONTEND}invoice.php?page={$ordercount/10}">{$ordercount/10}</a></li>

                    </ul>
                </div>
            {/if}*}
        </div>
    </div>
</div>