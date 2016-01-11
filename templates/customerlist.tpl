<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Customer List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Account Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Phone</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if $customer > 0}
                        {foreach $customer as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.account_name}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.email}</td>
                                <td style="text-align: center;">{$val.phone}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <a href="{$FRONTEND}customer.php?action=edit&id={$val.id}"><img src="{$FRONTEND}skin/images/edit.png" /></a>
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
            <div style="float: left;">There are <strong>{$customercount}</strong> results in your database.</div>
            {if $customercount >10}
                <div class="pagination">
                    <ul>
                        {if ($page-1) > 0}
                            <li><a href="{$FRONTEND}customer.php?page={$page-1}">«</a></li>
                        {/if}
                        {if ($page-2)>0}
                            <li><a href="{$FRONTEND}customer.php?page={$page-2}">{$page-2}</a></li>
                        {/if}
                        {if ($page-1)>0}
                            <li><a href="{$FRONTEND}customer.php?page={$page-1}">{$page-1}</a></li>
                        {/if}
                        <li><a href="javascript:void(0);" class="active">{$page}</a></li>
                        {if ($page+1)<=($pagecount)}
                            <li><a href="{$FRONTEND}customer.php?page={$page+1}">{$page+1}</a></li>
                        {/if}
                        {if ($page+2)<=($pagecount)}
                            <li><a href="{$FRONTEND}customer.php?page={$page+2}">{$page+2}</a></li>
                        {/if}
                        {if ($page+1)<=($pagecount) && ($page+2)<=($pagecount)}
                            {if ($page+2) < $pagecount }
                                <li><a href="{$FRONTEND}customer.php?page={$page+2}">»</a></li>
                            {/if}
                        {/if}
                        <li> of <a href="{$FRONTEND}customer.php?page={$pagecount}">{$pagecount}</a></li>
                    </ul>
                </div>
            {/if}
        </div>
    </div>
</div>