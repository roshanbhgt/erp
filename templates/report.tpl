<div class="dialog">
    <div class="interior reports">
        <div class="dialog-head">
            <h3>Financial Report</h3>
        </div>
        <div class="panel-body">
                        <h2>Reporting Period: <span style="color: #888; font-weight: normal">{$from} - {$to}</span></h2>

            <div style="width: 47%; padding-right: 3%;" class="column">

                <dl>
                    <dt><span class="subheading-a">Account Receivable:</span><br>
                    Total revenue with taxes included</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totalwithtax}</span></dd>
                    <dt><span class="subheading-a">Net Revenue:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totalwithouttax}</span></dd>
                    <dt><span class="subheading-a">Total VAT Collected:</span><br>
                    Taxex Collected during this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totaltax}</span></dd>
                                    </dl>

                <p style="font-weight: bold; color: #036; font-size: 20px; padding-top: 10px; clear:both">Revenue Breakdown</p>

                <dl>
                                        <dt><span class="subheading-a">Inventory Sales:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totalwithouttax}</span></dd>
                                        
                    <dt><span class="subheading-a">Transportaion & Lodging:</span><br>
                    Total revenue without taxes</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totalship}</span></dd>
                </dl>
                
                <p style="padding-top: 10px; clear: both" class="detail">Note: Revenues are based on the date each invoice was paid.</p>

            </div>
            <div style="width: 48%; padding-left: 2%;" class="column">

                <p style="font-weight: bold; color: #036; font-size: 20px;">Inventory: <span style="color: #888">All Items</span></p>

                <dl>
                    <dt><span class="subheading-a">Inventory Cost:</span><br>
                    Total sold inventory value based on purchased prices as of for this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$inventorycost}</span></dd>

                    <dt><span class="subheading-a">All Additional Expenses:</span><br>
                    Total additional expenses for Test as of for this period</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;0</span></dd>

                    <dt><span class="subheading-a">Total Inventory Valuation:</span><br>
                    Total inventory cost plus all additional expenses</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$inventorycost}</span></dd>

                    <dt><span class="subheading-a">Newly Purchased Inventory:</span><br>
                    Newly added Inventory costs for this period.</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;0</span></dd>
                </dl>
                <div class="dashed"></div>
                <dl>
                    <dt><span class="subheading-a">Inventory Sales:</span><br>
                    Total inventory sales without tax</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;{$totalwithouttax}</span></dd>

                    <dt><span class="subheading-a">Sold Inventory Cost:</span><br>
                    Total cost of inventory sold for this period</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;{$totalwithouttax}</span></dd>

                    <dt><span class="subheading-a">Sold Additional Expenses:</span><br>
                    Total additional expenses associated with sold inventory for this period</dt>
                    <dd><span style="font-size: 16px;" class="negative">&#8377;&nbsp;0</span></dd>

                    <dt><span class="subheading-a">Profit / Loss:</span><br>
                    The total of Inventory Sales minus the cost of those items for this period.</dt>
                    <dd><span style="font-size: 16px;" class="positive">&#8377;&nbsp;0</span></dd>
                </dl>
            </div>
            <div style="font-weight: bold; color: #036; font-size: 20px; padding-top: 10px; clear:both">
                Invoice List's
            </div>
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left; min-width: 25px;">Invoice #</th>
                        <th style="text-align: left;">Account Name</th>
                        <th style="text-align: right;" class="jettisonable">Order Total</th>
                        <th style="padding-right: 32px;" class="list-right">Date Invoiced</th>
                    </tr>
                </thead>
                <tbody>
                    {if count($orders) > 0}
                        {foreach $orders as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.status|ucfirst}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.chalan_no}</td>
                                <td style="text-align: left;">{$val.account_name}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">&#8377;&nbsp;{$val.grandtotal|ceil}</td>
                                <td style="padding-right: 32px;text-align: center" class="list-right">
                                   {$val.createdat|date_format}
                                </td>
                            </tr>
                        {/foreach}
                        <tr style="border-top: solid 4px #eee; border-bottom: none;">
                            <td class="light-grey" colspan="3">Grand Total {$from} - {$to} :</td>
							<td style="padding-right: 12px;text-align: right;">&#8377;&nbsp;{$totalwithtax|ceil}</td>
							<td></td>
						</tr>
                    {else}
                        <tr style="border-bottom: none;">
                            <td style="padding: 15px 10px;" class="list-center" colspan="5">
                                <p style="color:#666;">Sorry, there were no paid invoiced during this period of time.</p>
                                <p style="color:#666;" class="sm-grey">Tip: Try adjusting the Date Range on the right to go back further in history.</p>
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$orders|@count}</strong> results in your database.</div>
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