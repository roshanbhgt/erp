<div class="order-history">
    <div style="border: 1px solid #aaa; border-radius: 8px;">
        <div class="panel-head">
            <h2>Global Address Book</h2>
        </div>
        <div class="table-wrapper">
            <table cellspacing="0" cellpadding="0" class="list">
                <thead>
                    <tr>
                        <th style="text-align: left;width: 125px;">Full Name</th>
                        <th style="text-align: left; min-width: 25px;">Email</th>
                        <th>Phone</th>
                        <th class="jettisonable">Date Added</th>
                        <th style="padding-right: 32px;" class="list-right"></th>
                    </tr>
                </thead>
                <tbody>
                    {if count($contacts) > 0}
                        {foreach $contacts as $val}
                            <tr>
                                <td style="text-align: left;width: 125px;">{$val.firstname|ucfirst}&nbsp;{$val.lastname|ucfirst}</td>
                                <td style="text-align: left; min-width: 25px;">{$val.pri_email}<br/>{$val.sec_email}</td>
                                <td style="text-align: center;">{$val.phone}<br/>{$val.cell}</td>
                                <td style="text-align: center;" class="jettisonable">{$val.createdat}</td>
                                <td style="text-align: right;padding-right: 10px;" class="jettisonable"></td>
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
            <div style="float: left;">There are <strong>{count($contacts)}</strong> results in your database.</div>
        </div>
    </div>
</div>