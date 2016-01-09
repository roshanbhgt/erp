<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Invoices List {$customer.account_name}</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Status</th>
                        <th style="text-align: left;width: 125px;">Account Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Grand Total in &#8377;</th>
                        <th class="jettisonable">Date Created</th>
                        <th class="jettisonable">Payment Method</th>
                        <th class="jettisonable">Paid Date</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if $invoices > 0}
                        {foreach $invoices as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.status|ucfirst}</td>
                                <td style="text-align: center;">{$val.account_name}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.email}</td>
                                <td style="text-align: center;">&#8377;&nbsp;{$val.grandtotal}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.paymentmethod|ucfirst}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.markpaidat}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    {if $val.status != 'paid'}
                                        <a href="{$FRONTEND}custrevenue.php?action=custinvmarkpaid&id={$val.id}"><img src="{$FRONTEND}skin/images/paid.png" alt="Mark As Paid" title="Mark As Paid" /></a>
                                    {/if}
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Hey, it looks like you haven't entered any customers yet.</p>
                                    <p>Quickly add your first customer using the toolbar above.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: Once your customer list grows larger, we recommend trying our 'Instant Search' (top left) to quickly find what you're looking for.</p>
                                </div>              
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$invoices|@count}</strong> results in your database.</div>
        </div>
    </div>
</div>