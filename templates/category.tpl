<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Category List</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Name</th>
                        <th style="text-align: left; min-width: 25px;">Description</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if $categories > 0}
                        {foreach $categories as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.title}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.description}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable">
                                    <a href="{$FRONTEND}category.php?action=edit&id={$val.id}"><img src="{$FRONTEND}skin/images/edit.png" /></a>
                                </td>
                            </tr>
                        {/foreach}
                    {else}
                        <tr>
                            <td style="text-align: center;" colspan="7">
                                <div style="padding:50px 10px 5px 10px;color:#666;">
                                    <p style="font-weight:bold;font-size:14px;">Create some categories for the inventory you carry.</p>
                                    <p>Categories are here to keep you organized but they also act as a basic template for quicker data entry.</p>
                                    <p style="font-size:11px;margin-top:50px;">Hint: You can only delete categories if there's currently no inventory items associated with it.</p>
                                </div>              
                            </td>
                        </tr>
                    {/if}
                </tbody>
            </table>
        </div>
        <div class="paging">
            <div style="float: left;">There are <strong>{$categories|@count}</strong> results in your database.</div>
        </div>
    </div>
</div>