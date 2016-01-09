<div class="dashboard">
    <div class="column-2">
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"></span><h2 class="dashboard">Top Unpaid Invoices</h2>
                {if $unpaidinvcount > 0}
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Chalan No</td>
                                <td>Grand Total in &#8377;</td>
                            </tr>
                        </thead>
                        <tbody>
                        {$i = 1}
                        {foreach $unpaidinv as $val}
                            <tr>
                                <td>{$i}</td>
                                <td>{$val.chalan_no}</td>
                                <td>{$val.grandtotal|string_format:"%d"}</td>
                            </tr>
                            {$i=$i+1}
                        {/foreach}
                        </tbody>
                    </table>
                {else}
                    <p style="padding:20px 0px 0px 0px; color:#999;">Looks like there's no unpaid invoices.<br><br>Once you have some, you'll see the biggest unpaid invoices here.</p>
                {/if}
            </div>
        </div>
        <div class="news">
            <div class="content">
                <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;"></span><h2 class="dashboard">Latest Purcahse</h2>
                {if $purbillcount > 0}
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Bill No</td>
                                <td>Grand Total in &#8377;</td>
                            </tr>
                        </thead>
                        <tbody>
                        {$i = 1}
                        {foreach $purcasebills as $val}
                            <tr>
                                <td>{$i}</td>
                                <td>{$val.chalan}</td>
                                <td>{$val.total|string_format:"%d"}</td>
                            </tr>
                            {$i=$i+1}
                        {/foreach}
                        </tbody>
                    </table>
                {else}
                    <p style="padding:20px 0px 0px 0px; color:#999;">Looks like there's no purchases.<br><br>Once you have some, you'll see the biggest purchase here.</p>
                {/if}
            </div>
        </div>
    </div>
    <div class="column-1">
        <div class="activity">
            <div class="head">
                <span class="heading">
                    Today's Activity:
                </span>
            </div>
            <ul class="activity-feed">
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;">{$custcount}</span><h2 class="dashboard">New Customer</h2>                
                    {if $custcount > 0}
                    <table>
                        <thead>
                            <tr>
                                <td>Sr. No.</td>
                                <td>Account Name</td>
                            </tr>
                        </thead>
                        <tbody>
                        {$i = 0}
                        {foreach $customer as $val}
                            <tr>
                                <td>{$i}</td>
                                <td>{$val.account_name}</td>
                            </tr>
                            {$i++}
                        {/foreach}
                        </tbody>
                    </table>
                    {else}
                        <p style="padding:20px; color:#999;">No customers to report here.<br><br></p>                                
                    {/if}
                </li>
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;">{$paidinvcount}</span><h2 class="dashboard">Total Sales</h2>                
                    {if $paidinvcount > 0}
                        <p style="padding:20px;"><span class="positive" style="font-size: 16px;">&#8377;&nbsp;{$paidtotal|string_format:"%d"}</span></p>
                    {else}
                        <p style="padding:20px; color:#999;">No paid invoices to report here.<br><br></p>                                
                    {/if}
                </li>
                <li style="width:300px;float: left;">
                    <span style="float: right; font-size: 11px; margin-top: 6px; color: #666;">{$purbillcount}</span><h2 class="dashboard">Total purchase</h2>                
                    {if $purbillcount > 0}
                        <p style="padding:20px;"><span class="positive" style="font-size: 16px;">&#8377;&nbsp;{$purchtotal|string_format:"%d"}</span></p>
                    {else}
                        <p style="padding:20px; color:#999;">No purchase to report here.<br><br></p>                                
                    {/if}                    
                </li>                
            </ul>
        </div>
    </div>
</div>
